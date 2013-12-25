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
   
include 'config.php';

function generatePropsFile($path) {
	$contents = scandir($path);	
}

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


function createFile($file) {
if(!file_exists(dirname($file)))
    mkdir(dirname($file), 0777, true);
}


?>