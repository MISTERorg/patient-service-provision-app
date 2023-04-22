<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui, shrink-to-fit=no, user-scalable=no">
    <link href="../../image/favicon (3).ico" rel="shortcut icon">
    <link href="https://cdn.maptiler.com/maptiler-geocoder/v1.1.0/maptiler-geocoder.css" rel="stylesheet" />
    <link rel="stylesheet" href="signup_ci.css">    
    <link rel="stylesheet" href="../../map/leaflet.css" />
    <script src="../../map/leaflet.js"></script>  
    <script src="https://cdn.maptiler.com/maptiler-geocoder/v1.1.0/maptiler-geocoder.js"></script>
    <title>registration | MISTERhealth</title>

</head>

<body onload="typeWriter();pop()">

 
<!-- full map- -->
    <div id="map" style="display:block"></div>
    <div id="map1" style="display:none"></div>
  <!-- map button -->
   <button id="Map_btn" class="map_btn" onclick ="Mbtn()"><div><b>Open Street</b></div></button>
   
   
  <script>
   // map
   function Mbtn(){
    var x = document.getElementById("map");
    var y = document.getElementById("map1");
    if (y.style.display === "none") {
        y.style.display = "block";
        x.style.display = "none";
    } else {
        x.style.display = "block";
        y.style.display = "none";

        
        
  </script>
   
   
   
</body>
</html>