<!DOCTYPE html>
<html>
<head>
  <title>Search Results :: Amber Lodging</title>
  

  <link rel="stylesheet" href="inc/bootstrap.min.css" type="text/css" media="screen">
  <link rel="stylesheet" href="inc/style.css" type="text/css" media="screen">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,800italic,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyA2CUo-V9LEi2YuJvh6F_Sf7NkmpXnC4yE"
      type="text/javascript"></script>
    <script type="text/javascript">
    var map;
    //<![CDATA[

    function load() {
      if (GBrowserIsCompatible()) {
        map = new GMap2(document.getElementById("map"));
        map.addControl(new GMapTypeControl());
        map.addControl(new GSmallMapControl());
        map.addControl(new GScaleControl());
        map.setCenter(new GLatLng(30.3, -98), 11, G_NORMAL_MAP);


	var marker1 = new GMarker(new GLatLng(30.8856944,-97.0349444));
	GEvent.addListener(marker1, 'click', function() { marker1.openInfoWindowHtml("<div style='width: 205px; height: 55;'><div style='width: 205px; height: 55px;'><strong>10th Annual Jasper Air Show & Fly-In</strong><br />Jasper, TX</div></div>"); });
	map.addOverlay(marker1);

	
      }
    }

    //]]>
    </script>

</head>


<body  onload="load(); startList();" onunload="GUnload()">
<div class="title-bar alc">Amber Lodging Company</div>
<div class="title-bar client-name">Johnny Washington</div>

<script language="JavaScript" type="text/JavaScript">
startList = function() {
if (document.all&&document.getElementById) {
navRoot = document.getElementById("nav");
for (i=0; i<navRoot.childNodes.length; i++) {
node = navRoot.childNodes[i];
if (node.nodeName=="LI") {
node.onmouseover=function() {
this.className+=" over";
  }
  node.onmouseout=function() {
  this.className=this.className.replace(" over", "");
   }
   }
  }
 }
}

</script>

<div id="container">

<div id="map" style="width: 100%; min-height: 800px"></div>

</div>


</body>

</html>