<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Healthcare Engineering</title>

<meta name="keywords" content="Healthcare Engineering, Health Care Engineering, University of Southern California, USC, Industrial Engineering, efficiency, hosptial, management engineering, surgery" />

<link href="styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" media="all" type="text/css" href="dropdown.css" />
<!--[if lte IE 6]>
<link rel="stylesheet" media="all" type="dropdown_ie.css" />
<![endif]-->

<style type="text/css">
#info {
width:828px;
margin:0 auto;
padding:0;
}
.menu {margin-left:0px;}
</style>
<!--test site

  <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;
    &amp;key=ABQIAAAAqz84E5Y3AfXVoIIMcuGa9BRYYUsZOCjI5A77VEldue_CKZnbqhRXHigWMmfGJfP39uqpTXTQiNH_zQ"
    type="text/javascript">
  </script> -->

  <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;
    &amp;key=ABQIAAAAqz84E5Y3AfXVoIIMcuGa9BRk7T9zcHCZkP3cmP15rKgDiNXWvRSPY_ibSqc2evaU3qG14s1gHmMRDQ"
    type="text/javascript"> 
  </script>
  
  <!--local host -->
  <!--
    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;
    &amp;key=ABQIAAAAqz84E5Y3AfXVoIIMcuGa9BSAzpegr-pxnW3fT32TMsaz9-15bBQsKwgribS2EQyOhwYoDsciQGJJRw"
    type="text/javascript">
  </script>-->
<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="jquery.corner.js"></script>
    <script type="text/javascript">
		$(function() {
			$("#pages").corner("20px");
			$("#content").corner("20px");
		});
    </script>
  

<script language="javascript">
var uscInfo = new Array(5);

//this creates a multidimensional array
for(i=0; i<uscInfo.length; i++) {
	uscInfo[i] = new Array(2);
}

//uscInfo[0][0] = '3715 McClintock Avenue, Los Angeles, CA 90089';
//uscInfo[0][1] = 'USC: Epstein Department of Industrial &amp; Systems Engineering';

uscInfo[0][0] = '1001 Potrero Ave Ste 107, San Francisco, CA 94110';
uscInfo[0][1] = 'San Francisco General Hospital';


uscInfo[1][0] = '700 River Drive, Fort Bragg, CA, 95437';
uscInfo[1][1] = 'Medocino Coast Medical Center';



uscInfo[2][0] = '1441 Constitution Blvd., Salinas, CA, 93906';
uscInfo[2][1] = 'Natividad Medical Center';

uscInfo[3][0] = '222 West 39th Avenue, San Mateo, CA';
uscInfo[3][1] = 'San Mateo Medical Center';

uscInfo[4][0] = '50 Douglas Drive, Martinez, CA';
uscInfo[4][1] = 'Contra Costa County Hospital';

var map = null;
var geocoder = null;

	function addListener(marker, address, name)
	{
		GEvent.addListener(marker, "click", function() {
  				marker.openInfoWindowHtml("<b>"+name+"</b><br/>"+"<i>"+address+"</i>");
				});
	}
	
	function plotPoint(address,hospital_name) {
      if (geocoder) {
        geocoder.getLatLng(
          address,
          function(point) {
            if (!point) {
              alert(address + " not found");
            } else {
			  marker = new GMarker(point)		  
			  map.addOverlay(marker)
			  addListener(marker, address, hospital_name);
            }
          }
        );
      }
    } 
	

    function initialize() {
      if (GBrowserIsCompatible()) {
        map = new GMap2(document.getElementById("map_canvas"));
		geocoder = new GClientGeocoder();
		map.setCenter(new GLatLng(37.7556360, -122.405094), 6);
		map.addControl(new GSmallMapControl());
		map.addControl(new GMapTypeControl());
	  for(i=0; i<uscInfo.length; i++) {
			plotPoint(uscInfo[i][0], uscInfo[i][1]);
			}
    	}
	}
</script>
</head>

<body onload="initialize();" onunload="GUnload()">
     <div id="masthead">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="33%" valign="top">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
  		<tr>
    		<td><a href="http://www.usc.edu" target="_blank"><img src="usc_name_black.gif" alt="USC" width="315" height="25" border="0" /></a></td>
  		</tr>
  		<tr>
    		<td><a href="http://healthcareengineering.usc.edu/"><img src="title.jpg" alt="USC" width="475" height="50" border="0" /></a></td>
  		</tr>
	</table>
</td>

<!--
<td width="34%" align="right">
<table width="256" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="doctors.jpg" alt="hospital" width="112" height="75" border="0" /></td>
    <td><img src="lacusc_hospital.gif" alt="doctors" width="86" height="75" border="0" onclick="newwin('lacusc_large.gif',421,367)" /></td>
    <td><img src="david.jpg" alt="engineer" width="61" height="75" border="0" onclick="newwin('david_large.jpg',300,367)" /></td>
  </tr>
</table>
</td>
-->

<td width="33%" align="right">
<table width="70%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right"><a href="http://www.usc.edu" target="_blank"><img src="mono-white-cardinal-big.gif" alt="USC" width="94" height="75" border="0" /></a></td>
  </tr>
</table>
</td>

</tr>
</table>
</div>
<?php include('navigation_main.php'); ?>
<div id="pages">
<h1>NORTHERN CALIFORNIA HOSPITALS</h1>    
     <h4>Click pinpoints for information about each hospital.</h4>   

      <div id="map_canvas" style="width: 800px; height: 450px;"></div>
</div>
<?php include('footer.php'); ?>




