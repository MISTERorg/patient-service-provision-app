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
<!-- background -->
    <div class="slideshow-container">
    
    <div class="mySlides fade">
        <div class="head-bg1" style="background-color: rgb(0, 162, 255);"></div>
        <img class="bgp" src="image/DHF.jpg" style="width:100%">
        
        <div  class="head-bg2" style="background-color: rgb(0, 162, 255);"></div>
        <div  class="head-bg3" style=" background: linear-gradient(to bottom, rgb(0, 162, 255), rgb(0, 162, 255),white,white);"></div>
    </div>

    <div class="mySlides fade">
        <div  class="head-bg1"  style="background-color:black;"></div>
        <img class="bgp" src="image/DT.jpg" style="width:100%">
    
        <div  class="head-bg2"  style="background-color:black;"></div>
        <div  class="head-bg3" style=" background: linear-gradient(to bottom, black, black,white,white);"></div>
    </div>

    <div class="mySlides fade">
        <div  class="head-bg1"  style="background-color:rgb(224, 7, 159);"> </div>
        <img class="bgp" src="image/MC.jpg" style="width:100%">

        <div  class="head-bg2"  style="background-color: rgb(224, 7, 159);"> </div>
        <div  class="head-bg3" style=" background: linear-gradient(to bottom,  rgb(224, 7, 159),  rgb(224, 7, 159),white,white);"></div>
    </div>

    <div style="text-align:center">
        <span class="dot1" ></span> 
        <span class="dot1" ></span> 
        <span class="dot1" ></span> 
    </div>
    <script>
        // slider
            var slideIndex = 0;
            showSlides();

            function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot1");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active1", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active1";
            setTimeout(showSlides, 5000); // Change image every 2 seconds
            }
    </script>
    </div>

<!-- header -->
    <div class="alogo_G11" >
        <img src="../../image/H-logo.png" style="width:65px;" class="hi1">
    </div>

    <p id="animetext"></p>

    <script>
        var i = 0;
        var txt = 'Please drag marker to your exact location on the map below to permit users to find you and double click to add and remove markers';
        var speed = 60;

        function typeWriter() {
        if (i < txt.length) {
            document.getElementById("animetext").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
        }
    </script>



<!-- search bar -->
 <!-- search bar complete -->
      <span class="geosearch">
        <form autocomplete="off" action="">
            <div class="autocomplete_src" >
            <button type="submit" class="src_btn_class_1 "></button>
                <img src="../../image/SRC-LOGO.png"  class="src_btn_class_11">
                <input id="myInput"  type="search" name="search" class="src" placeholder="location"><br>
               
            </div>
        </form>
        <style>
    
        </style>
        <script>
            function autocomplete_src(inp, arr) {
                /*the autocomplete function takes two arguments,
                the text field element and an array of possible autocompleted values:*/
                var currentFocus;
                /*execute a function when someone writes in the text field:*/
                inp.addEventListener("input", function(e) {
                    var a, b, i, val = this.value;
                    /*close any already open lists of autocompleted values*/
                    closeAllLists();
                    if (!val) { return false;}
                    currentFocus = -1;
                    /*create a DIV element that will contain the items (values):*/
                    a = document.createElement("DIV");
                    a.setAttribute("id", this.id + "autocomplete_src-list");
                    a.setAttribute("class", "autocomplete_src-items");
                    /*append the DIV element as a child of the autocomplete container:*/
                    this.parentNode.appendChild(a);
                    /*for each item in the array...*/
                    for (i = 0; i < arr.length; i++) {
                    /*check if the item starts with the same letters as the text field value:*/
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        /*create a DIV element for each matching element:*/
                        b = document.createElement("DIV");
                        /*make the matching letters bold:*/
                        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                        b.innerHTML += arr[i].substr(val.length);
                        /*insert a input field that will hold the current array item's value:*/
                        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                        /*execute a function when someone clicks on the item value (DIV element):*/
                        b.addEventListener("click", function(e) {
                            /*insert the value for the autocomplete text field:*/
                            inp.value = this.getElementsByTagName("input")[0].value;
                            /*close the list of autocompleted values,
                            (or any other open lists of autocompleted values:*/
                            closeAllLists();
                        });
                        a.appendChild(b);
                    }
                    }
                });
                /*execute a function presses a key on the keyboard:*/
                inp.addEventListener("keydown", function(e) {
                    var x = document.getElementById(this.id + "autocomplete_src-list");
                    if (x) x = x.getElementsByTagName("div");
                    if (e.keyCode == 40) {
                    /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                    currentFocus++;
                    /*and and make the current item more visible:*/
                    addActive(x);
                    } else if (e.keyCode == 38) { //up
                    /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                    currentFocus--;
                    /*and and make the current item more visible:*/
                    addActive(x);
                    } else if (e.keyCode == 13) {
                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                    e.preventDefault();
                    if (currentFocus > -1) {
                        /*and simulate a click on the "active" item:*/
                        if (x) x[currentFocus].click();
                    }
                    }
                });
                function addActive(x) {
                /*a function to classify an item as "active":*/
                if (!x) return false;
                /*start by removing the "active" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                /*add class "autocomplete-active":*/
                x[currentFocus].classList.add("autocomplete_src-active");
                }
                function removeActive(x) {
                /*a function to remove the "active" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove("autocomplete_src-active");
                }
                }
                function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName("autocomplete_src-items");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                    }
                }
                }
                /*execute a function when someone clicks in the document:*/
                document.addEventListener("click", function (e) {
                    closeAllLists(e.target);
                    });
            }

            /*An array containing all the country names in the world:*/
            var countries = ["Douala","bonaberi"];

            /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
            autocomplete_src(document.getElementById("myInput"), countries);
        </script>
      </span>  
      




    <div id="pop">type your town here to ease location</div>

    <script> 
    function pop() {
        var x = document.getElementById("pop");
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 6000);
    }
    </script>
 
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
    }
}

    // map and tiles
    var map = L.map('map',{doubleClickZoom:false}).setView([0,0],1);
     map.flyTo([4.0376,9.7324],12);

        const tileUrl1 =  L.tileLayer('https://api.maptiler.com/maps/hybrid/{z}/{x}/{y}@2X.jpg?key=qCuJg6byTo0cIYvEA31k',{
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
        iconUrl: 'map-logo.png',
        iconSize:[200,100],
        iconAnchor:[95,20],
        popupAnchor:[1,0],
       

        });
        
    //    original marker  
        var marker = L.marker([4.0376,9.7324],{icon:Icon,clickable: true,draggable: true}).addTo(map)
        .on('dragend',function(){
            var coord = String(marker.getLatLng()).split(',');
            var lat = coord[0].split('(');
            var lng = coor-d[1].split(')');
            marker.bindPopup("we moved to lat:"+lat[1]+"long:"+lng[0]);
                
        });
    // remove marker
        marker.on('dblclick',function(){
            map.removeLayer(this);
        });
    // add more markers    
        map.on('dblclick',function(e){
            var coordi = e.latlng.toString().split(',');
            var lat = coordi[0].split('(');
            var lng = coordi[1].split(')');
            marker.bindPopup("we moved to lat:"+lat[1]+"long:"+lng[0]);
            marker = L.marker(e.latlng,{icon:Icon,clickable: true,draggable: true}).addTo(map);
            
            marker.on('dblclick',function(){
            map.removeLayer(this);
            alert("you have removed one marker");
                });
                marker.on('dragend',function(){
            marker.bindPopup("we moved to lat:"+lat[1]+"long:"+lng[0]);
                
        });
                
            });
        marker.bindPopup("<b>Hello ELAD</b><br>you are in Douala").openPopup();
       
        
    // mister health logo on map
        L.control.scale({
            metric: true,       
            imperial:false,
            position: 'bottomleft'
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


        // map2 view


        var map1 = L.map('map1',{doubleClickZoom:false}).setView([0,0],1);

        const tileUrl1 =  L.tileLayer('https://api.maptiler.com/maps/hybrid/{z}/{x}/{y}@2X.jpg?key=qCuJg6byTo0cIYvEA31k',{
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
        crossOrigin:true,
        maxZoom: 20,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'your.mapbox.access.token'
        }).addTo(map1);
        
        
    //    original marker  
        var marker1 = L.marker([4.0376,9.7324],{icon:Icon,clickable: true,draggable: true}).addTo(map1)
        .on('dragend',function(){
            var coord = String(marker1.getLatLng()).split(',');
            var lat = coord[0].split('(');
            var lng = coor-d[1].split(')');
            marker1.bindPopup("we moved to lat:"+lat[1]+"long:"+lng[0]);
                
        });
    // remove marker
        marker1.on('dblclick',function(){
            map1.removeLayer(this);
        });
    // add more markers    
        map1.on('dblclick',function(e){
            var coordi = e.latlng.toString().split(',');
            var lat = coordi[0].split('(');
            var lng = coordi[1].split(')');
            marker1.bindPopup("we moved to lat:"+lat[1]+"long:"+lng[0]);
            marker1 = L.marker(e.latlng,{icon:Icon,clickable: true,draggable: true}).addTo(map1);
            
            marker1.on('dblclick',function(){
            map1.removeLayer(this);
            alert("you have removed one marker");
                });
                marker1.on('dragend',function(){
            marker1.bindPopup("we moved to lat:"+lat[1]+"long:"+lng[0]);
                
        });
                
            });
        marker1.bindPopup("<b>Hello ELAD</b><br>you are in Douala").openPopup();
       
        
    // mister health logo on map
        L.control.scale({
            metric: true,       
            imperial:false,
            position: 'bottomleft'
        }).addTo(map1);  
        L.Control.Watermark=L.Control.extend({
            onAdd:function(map1){
                var img = L.DomUtil.create('img');
                img.src = "../../image/H-logo.png";
                img.style.width = "60px";
                return img;
            },
            onRemove:function(map1){},
        });
        L.control.watermark = function(opts){
            return new L.Control.Watermark(opts);
        }
        L.control.watermark({position:'bottomleft'}).addTo(map1);

    // saving data from each marker in database
        
        
  </script>
   
   
   
</body>
</html>