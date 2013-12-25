<?xml version="1.0" encoding="utf-8"?>
<?pcf-stylesheet path="/_resources/xsl/interior.xsl" extension="html"?>
<!DOCTYPE document SYSTEM "http://commons.omniupdate.com/dtd/standard.dtd">

<document xmlns:ouc="http://omniupdate.com/XSL/Variables">
	<headcode></headcode>
	<bodycode></bodycode>
	<footcode></footcode>
	
	<ouc:properties>
		<title><%= @title %></title>
		<meta name="keywords" content="" />		
		<meta name="description" content="" />
	</ouc:properties>
			
	<ouc:properties> <!-- Example config page properties -->
	    <parameter name="pageType" type="select" prompt="Page Type" alt="Layout choice.">
			<option value="admin" selected="false">Admin</option>			
			<option value="columns" selected="false">Columns</option>			
			<option value="full_width" selected="false">Full Width</option>			
			<option value="interior" selected="true">Interior</option>			
			<option value="landing" selected="false">Landing</option>			
		</parameter>
		<parameter name="slider"  type="checkbox" group="Everyone" prompt="Slider" alt="Enable/Disable the slider">
<option value="enable" selected="true"></option>
</parameter>	     		    			     
		<parameter name="breadcrumb" type="checkbox" prompt="Breadcrumb Navigation" alt="Enable/Disable Breadcrumb">
<option value="yes" selected="true"></option>
</parameter>				
		<parameter name="page_heading" type="checkbox" prompt="Page Heading" alt="Enable/Disable Page Heading">
<option value="yes" selected="true"></option>
</parameter>		
	</ouc:properties>
	
	<image_gallery>
		<ouc:div label="top-slider"  group="Everyone" button="787"><ouc:editor wysiwyg="gallery"/>{{a:4}}</ouc:div>
	</image_gallery>
	
	<side_banner>
		<ouc:div label="side_banner"  group="Everyone" button="707" break="break"><ouc:editor csspath="/_resources/ou/editor/maincontent.css" width="1155"/><table class="side_banner">
			<thead>
				<tr><th>Image</th><th>Heading</th></tr>
			</thead>
			<tbody>
				<tr>
					<td><a href="#"><img class="img-thumbnail" src="http://www.placehold.it/300x200" alt="" /></a></td>
					<td>HERE IS A BANNER TEXT</td>
				</tr>
				<tr>
					<td><a href="#"><img class="img-thumbnail" src="http://www.placehold.it/300x200" alt="" /></a></td>
					<td>ANOTHER BANNER TEXT</td>
				</tr>
			</tbody>
			</table></ouc:div>	   
	</side_banner>
			
	<page_header>
		<ouc:div label="page_header" group="Everyone" button="707" break="break">
		<ouc:editor csspath="/_resources/ou/editor/page_title.css" width="1155" />		
			
		</ouc:div>	
	</page_header>
	
	<maincontent>	
	<ouc:div label="maincontent"  group="Everyone" button="707" break="break">
	<ouc:editor wysiwyg-class="maincontent" csspath="/_resources/ou/editor/maincontent.css" width="1155" />		
		
	</ouc:div>
	</maincontent>
				
</document>
