<?xml version="1.0" encoding="utf-8"?>
<?pcf-stylesheet path="/_resources/xsl/properties.xsl" extension="inc"?>
<!DOCTYPE document SYSTEM "http://commons.omniupdate.com/dtd/standard.dtd"> 

<document xmlns:ouc="http://omniupdate.com/XSL/Variables">
<directory>	
	<config>	
		<parameter name="pagetype">properties</parameter>
		<!-- ouc:properties -->
        <parameter name="header_title" group="Everyone" prompt="Section Title" alt="Enter the title for the navigation">Department Name</parameter>
		<parameter name="header_source" type="select" group="Everyone" prompt="Major Section" alt="Choose to have this section's title display as the header title.">
<option value="true" selected="false">Yes</option>
<option value="false" selected="true">No</option>
</parameter> 

	  <parameter name="contact_info" type="select" group="Everyone" prompt="Contact Info" alt="Set Contact Info yes/no">
<option value="true" selected="false">Yes</option>
<option value="false" selected="true">No</option>
</parameter>		
		
		<!-- /ouc:properties -->
	</config> 
</directory>

  <information>  
	  <title>
	      <ouc:div label="info_title"  group="Everyone"  button="707" break="break">
          <ouc:editor csspath="/_resources/ou/editor/info_title.css" width="955" /> 					 
			   <h3>Contact Section</h3>
		  </ouc:div>	 	  
	  </title>	
	  <contacts>
	      <ouc:div label="info_contacts"  group="Everyone"  button="707" break="break">
          <ouc:editor csspath="/_resources/ou/editor/info_contacts.css" width="955" /> 					 
			   <p>(582) 938-5738</p>
				<p><a href="mailto:epstarr@semo.edu">mglasstetter@semo.edu</a></p>
				<p>(593) 295-8583 <small>(fax)</small></p>
				<p>Carnahan 106</p> 
		  </ouc:div>	 	  
	  </contacts>
	  <address>
	      <ouc:div label="info_address"  group="Everyone"  button="707" break="break">
          <ouc:editor csspath="/_resources/ou/editor/info_address.css" width="955" /> 					 
			     <strong>Office of Admissions</strong><br/><em>One University Plaza, MS 3550<br/>Cape Girardeau, Missouri 63701</em> 
		  </ouc:div>	 	  
	  </address>	
	  <icons>
	      <ouc:div label="info_icons"  group="Everyone"  button="707" break="break">
          <ouc:editor csspath="/_resources/ou/editor/info_icons.css" width="955" /> 					 
			   <a href="http://www.semo.edu/facebook" id="contact-facebook"></a>
				<a href="http://www.semo.edu/twitter" id="contact-twitter"></a>
				<a href="http://www.semo.edu/google" id="contact-google"></a>
				<a href="http://www.semo.edu/linkedin" id="contact-linkedin"></a>
				<a href="http://www.semo.edu/pinterest" id="contact-pinterest"></a>
		  </ouc:div>	 	  
	  </icons>	
    
  </information>
</document>
