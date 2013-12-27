<?php

/*
 *  main migration file to be run 
 */

 
/*
 * General notes from Hayk
 * 
 * Consider using the glob() function   http://fr2.php.net/manual/en/function.glob.php
 * Another link for a very useful function http://www.php.net/manual/en/function.scandir.php    function get_files()
 * 
 * 
 */
  
  
 /*
  * 
  * $current_dir 
  *  some notes
  */ 

// enable error reporting
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1); 
 
include 'config.php';

function listFileNames($path) {
	$contents = scandir($path);		
	foreach($contents as $filename) {
    echo "Filename: " . $filename . "<br/>" ; 
	}
}

echo "<br/>Listing the Files: <br/>";
listFileNames(SOURCE_ROOT); 
echo "<br/>";

function find_all_files($dir) 
{ 
    $root = scandir($dir); 
    foreach($root as $value) 
    { 
        if($value === '.' || $value === '..') {continue;} 
        if(is_file("$dir/$value")) {$result[]="$dir/$value";continue;} 
        foreach(find_all_files("$dir/$value") as $value) 
        { 
            $result[]=$value; 
        } 
    } 
    return $result; 
} 

echo "<br/>Finding all files in Source Root: <br/>";
echo find_all_files(SOURCE_ROOT);
echo "<br/>";



function list_directory($path) {
   $file_list = array();
   $stack[] = $path;

   while ($stack) {
       $current_dir = array_pop($stack);
       if ($dh = opendir($current_dir)) {
           while (($file = readdir($dh)) !== false) {
               if ($file !== '.' AND $file !== '..') {
                   $current_file = "{$current_dir}/{$file}";
                   $report = array();
                   if (is_file($current_file)) {
                       $file_list[] = "{$current_dir}/{$file}";
                   } elseif (is_dir($current_file)) {
                       $stack[] = $current_file;
                       $file_list[] = "{$current_dir}/{$file}/";
                   }
               }
           }
       }
   }

   return $file_list;
}

echo "<br/><b>List Directory function:</b> <br/>";
  $directory_list =  list_directory(SOURCE_ROOT); 
  //print_r($directory_list) . "<br/>";
  foreach($directory_list as $file) {
  	if(is_file($file)) {
  		$contents = file_get_contents($file); 		
  		 echo $contents . "<hr/><hr/>";
  	} //end if
  }
  
echo "<b>End List Directory Function</b><br/>";

// the above function did not give me the result i was expecting


function createFile($file) {
if(!file_exists(dirname($file)))
    mkdir(dirname($file), 0777, true);
}

function displayConstant($our_constant){
	echo $our_constant;	
}

function get_files($root_dir, $all_data=array()) 
  {
    // only include files with these extensions
    $allow_extensions = array("php", "html");
    // make any specific files you wish to be excluded
    $ignore_files = array("gdform.php","fishheader.php","fishfooter.php",
      "sitelinks.php","google204accd1c3ac0501.html","sitemapxml.php",
      "rotate.php", "fishstockingreport2.php", "repcentral.php", "repne.php",
      "repnorth.php","reppowell.php","repse.php","repsouth.php","repse.php",
      "stockreplib.php","iestyles.php");
    $ignore_regex = '/^_/';
    // skip these directories
    $ignore_dirs = array(".", "..", "images", "dev", "lib", "data", "osh", "fiq", "google",
      "stats", "_db_backups", "maps", "php_uploads", "test");

    // run through content of root directory
    $dir_content = scandir($root_dir); 
    foreach($dir_content as $key => $content)
    {
      $path = $root_dir.'/'.$content;
      if(is_file($path) && is_readable($path)) 
      {
        // skip ignored files
        if(!in_array($content, $ignore_files)) 
        {
          if (preg_match($ignore_regex,$content) == 0)
          {
            $content_chunks = explode(".",$content);
            $ext = $content_chunks[count($content_chunks) - 1];
            // only include files with desired extensions
            if (in_array($ext, $allow_extensions))
            {
                // save file name with path
                $all_data[] = $path;    
            }
          }
        }
      }
      // if content is a directory and readable, add path and name
      elseif(is_dir($path) && is_readable($path)) 
      {
        // skip any ignored dirs
        if(!in_array($content, $ignore_dirs))
        {
          // recursive callback to open new directory
          $all_data = get_files($path, $all_data);
        }
      }
    } // end foreach
    return $all_data;
  } // end get_files()
  
$root_dir = "C://wamp/www/migration/source";  
  
echo "<br/> Testing get_files() function: <br/>";
   $files_array = get_files($root_dir);
   print_r($files_array) . "<br/>";
echo "End testing get_files() function <br/>";

//begin scanDirectories() function
function scanDirectories($rootDir, $allowext, $allData=array()) {
    $dirContent = scandir($rootDir);
    foreach($dirContent as $key => $content) {
        $path = $rootDir.'/'.$content;
        $ext = substr($content, strrpos($content, '.') + 1);
        
        if(in_array($ext, $allowext)) {
            if(is_file($path) && is_readable($path)) {
                $allData[] = $path;
            }elseif(is_dir($path) && is_readable($path)) {
                // recursive callback to open new directory
                $allData = scanDirectories($path, $allData);
            }
        }
    }
    return $allData;
}

$rootDir = "source";
$allowext = array("zip","rar","html");
$files_array2 = scanDirectories($rootDir,$allowext);

echo "<br/>Testing the scanDirectories() function: <br/>";
print_r($files_array2);

?>