<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="map/leaflet.css" />
    <script src="map/leaflet.js"></script>  
    <script src="https://cdn.maptiler.com/maptiler-geocoder/v1.1.0/maptiler-geocoder.js"></script>
    <link href="https://cdn.maptiler.com/maptiler-geocoder/v1.1.0/maptiler-geocoder.css" rel="stylesheet" />
    <title>Document</title>
    <style>
        #map{
            position:absolute;
            top:0;
            bottom: 200px;
            left: 0;
            right:0;
        }
        #search{
            color: white;
           background-color: black;
           
            top:300;
            bottom: 0px;
            left: 0;
            right:0;
        }
    </style>
</head>
<body>


    <div id="map"></div>
    <script>
      // map and tiles
      var map = L.map('map').setView([0,0],1);


L.tileLayer('https://api.maptiler.com/maps/hybrid/{z}/{x}/{y}@2X.jpg?key=qCuJg6byTo0cIYvEA31k',{
    attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
    crossOrigin:true,
    maxZoom: 20,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(map);

// icon on map
var Icon = L.icon({
    iconUrl: 'H-logo3.png',
    iconSize:[50,50],
    iconAnchor:[25,6],
    popupAnchor:[1,0],
});
var marker = L.marker([51.5, -0.09],{icon:Icon}).addTo(map);
marker.bindPopup("<b>Hello world!</b><br>ikeorah.").openPopup();

// mister health logo on map
L.control.scale({
     metric: true,
     imperial:false,
     position: 'bottomleft',
 }).addTo(map);
 L.Control.Watermark=L.Control.extend({
     onAdd:function(map){
         var img = L.DomUtil.create('img');
         img.src = "../../image/H-logo.png";
         img.style.width = "60px";
         return img;
     },
     onRemove:function(map){},
 });
 L.control.watermark = function(opts){
     return new L.Control.Watermark(opts);
 }
 L.control.watermark({position:'bottomleft'}).addTo(map);
    </script>
   
   
   
 
   
   
   
   
   
   <!-- autocomplete map -->
    <input autocomplete="off" id="search" type="text" />
    <script>
      var geocoder = new maptiler.Geocoder({
        input: 'search',
        key: 'qCuJg6byTo0cIYvEA31k'
      });
      geocoder.on('select', function(item) {
        console.log('Selected', item);
      });



      var geocoder = new maptiler.Geocoder({
  key: 'get_your_own_key'
});
 
geocoder.geocode('Zurich')
.then(function(results) {
  console.log(results.features[0]);
});
    </script>

</body>
</html>





























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="map/leaflet.css" />
    <script src="map/leaflet.js"></script>  
    <script src="https://cdn.maptiler.com/maptiler-geocoder/v1.1.0/maptiler-geocoder.js"></script>
    <link href="https://cdn.maptiler.com/maptiler-geocoder/v1.1.0/maptiler-geocoder.css" rel="stylesheet" />
    <title>Document</title>
    <style>
        #map{
            position:absolute;
            top:30px;
            bottom: 200px;
            left: 0;
            right:0;
        }
    </style>
</head>
<body>
    <button onclick="test()">try me</button>
    <div id="map"></div>
    <script>
// map itself
        var map = L.map('map').setView([0,0],5);
        L.tileLayer('https://api.maptiler.com/maps/hybrid/{z}/{x}/{y}@2X.jpg?key=qCuJg6byTo0cIYvEA31k',{
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
        }).addTo(map);
        
       
var layergroup = L.layerGroup().addTo(map);
function test(){
    layergroup.clearlayers();
    marker.closePopup();
    marker = L.marker([51.5, -0.09]).addTo(layerGroup);
    marker.bindPopup("<b>main center</b>").openPopup();
       
}
//   popup
        var popup = L.popup();

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("You clicked the map at " + e.latlng.toString())
                .openOn(mymap);
        }

        map.on('click', onMapClick);
    </script>
   
   
   
   
   <!-- add a marker on click -->
   <script>
         map.on('click',function(e){
            var coord = e.latlng.toString().split(',');
            var lat = coord[0].split('(');
            var lng = coord[1].split(')');
            alert("tou clicked at lat:"+lat[1]+"long:"+lng[0]);
            L.marker(e.latlng).addTo(map);
                });
   </script>