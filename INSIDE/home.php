<?php 
	session_start();
	if(isset($_SESSION['name']))
	{
		
		include "../register/dbh.php"; 
		
    $sql="SELECT * FROM `users`";
    
    

		$query = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
 <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui, shrink-to-fit=no, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="google-site-verification" content="">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Home | MISTERhealth</title>
    <link href="../image/favicon (3).ico" rel="shortcut icon">
    <link rel="stylesheet" href="home.css">    
 </head>

 <body class="body" style="background-color: black;">
    <!--background -->

    <div class="slideshow-container">
   
      <div class="mySlides fade">
        <div class="head-bg1" style="background-color: rgb(0, 162, 255);"></div>
        <img class="bgp" src="../image/DHF.jpg" style="width:100%">
        <div class="text"><?php echo $_SESSION['name']; ?></div>
        <div  class="head-bg2" style="background-color: rgb(0, 162, 255);"></div>
        <div  class="head-bg3" style=" background: linear-gradient(to bottom, rgb(0, 162, 255), rgb(0, 162, 255),white,white);"></div>
      </div>

      <div class="mySlides fade">
        <div  class="head-bg1"  style="background-color:black;"></div>
        <img class="bgp" src="../image/DT.jpg" style="width:100%">
        <div class="text"><?php echo $_SESSION['name']; ?></div>
        <div  class="head-bg2"  style="background-color:black;"></div>
        <div  class="head-bg3" style=" background: linear-gradient(to bottom, black, black,white,white);"></div>
      </div>

      <div class="mySlides fade">
        <div  class="head-bg1"  style="background-color:rgb(224, 7, 159);"> </div>
        <img class="bgp" src="../image/MC.jpg" style="width:100%">
        <div class="text"><?php echo $_SESSION['name']; ?></div>
        <div  class="head-bg2"  style="background-color: rgb(224, 7, 159);"> </div>
        <div  class="head-bg3" style=" background: linear-gradient(to bottom,  rgb(224, 7, 159),  rgb(224, 7, 159),white,white);"></div>
      </div>

      <div style="text-align:center">
        <span class="dot1" ></span> 
        <span class="dot1" ></span> 
        <span class="dot1" ></span> 
      </div>

    </div>
    <script>
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
        setTimeout(showSlides, 5000); // Change ../image every 2 seconds
        }
    </script>

    <!--background end -->
    <header>
        <nav class="M-nav">
           <!--logo-->
          <a href="#"></a>
        
            <!--logo for animated logo-->
            <div class="alogo_G11" >
              <img src="../image/H-logo.png"  class="hi1">
            </div>
        
          </a>
         <!-- navigation block 1-->
          <div class="nav_10_G12">
            <div class="nav_lang" id="nav_lang_id">
                <div class="dropdown_lang">
                  <button class="dropbtn"><span class="lang1">Language</span><span class="lang2">Lang</span>
                  
                  </button>
                    <div class="dropdown_lang-content">
                      <a href="#">English</a>
                      <a href="#">Francais</a>
                    </div>
                </div> 
                <span  class="emerg1">
                <a href="#ab"> Emergency </a>
                </span>
                <span class="em2">
                  <a href="" >🚑❗❗</a>
                </span>
                <span  class="done"><a href="pay.php"><sup style="font-size: 20px"  >👐</sup><span class="hand">Donate</span></a>     </span>       
                <!-- search bar complete -->
                <span>
                    <form autocomplete="off" action="">
                      <div class="autocomplete_src" >
                        <button type="submit" class="src_btn_class_1 "></button>
                           <img src="../image/SRC-LOGO.png"  class="src_btn_class_11">
                        <input id="myInput"  type="search" name="search" class="src" placeholder=" Search✍">
                      </div>
                    </form>
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
                        var countries = ["Alonso perela","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

                        /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
                        autocomplete_src(document.getElementById("myInput"), countries);
                    </script>
                </span>        
                </div>
            </div>
          </div>
          <!-- navigation block 2 -->'
          <div class="reg">
 
              <div class="all-we" >
               <!-- N-E us botton -->
                <a href="http://www.medicalnewstoday.com/" class="N-E"   style="width:auto;" id="reg_btn">
                  <span > News & Experts</span> 
                </a>
               <!-- symp-check us botton   -->
                <a href="../symptoms/symptoms.php"  class="symp-check"  id="reg_btn">
                  <span >Symptoms Check</span>
                </a>
                <!-- portfolio button -->
                <a href="#" class="F-center">
                  <span >Find a Center</span>
                </a>
                <!-- help and advices -->
                <a href="http://www.healthline.com/" class="H-A">
                  <span >Help and Advices</span>
                </a>

                <div class="we">
                  <div class="dropdown_more">
                    <button href="javascript:void(0);" class="dropbtn_more" >🏠</button>
                    <div class="dropdown_more-content">
                      <a href="http://www.medicalnewstoday.com/"   style="width:auto;" id="reg_btn">News & Experts</a>
                      <a href="../symptoms/symptoms.php"  >Symptoms Check</a>
                      <a href="#">Find a Center</a>
                      <a href="http://www.healthline.com/">Help and Advices</a>
                    </div>
                  </div> 
                </div>
           
              </div>  
              <a href="cart/cart.html" class="cart"><img src="../image/cart.png" alt=""></a>

              <div class="dropdown_more">
                <button class="dropbtn_more">Other Services </button>
                <div class="dropdown_more-content">
                  <a href="#">phones,computers..</a>
                  <a href="#">House Dressing..</a>
                  <a href="#">MORE....</a>
                </div>
              </div> 
              <!-- web dev info -->

          </div>

          <div class="H-medecin">
            <h2 class="H-M-h"><u>center facilities</u></h2>
            <a href="#"   style="width:auto;" id="reg_btn"><span>find a center</span></a>
            <a href="#"   style="width:auto;" id="reg_btn"><span>add your center</span></a>
            <a href="#"   style="width:auto;" id="reg_btn"><span>find a doctor</span></a>
            <a href="#"   style="width:auto;" id="reg_btn"><span>recrutement and internships</span></a>
          </div>

        </nav>

    </header>
    <div class="M-cont">
      <div>
        <h2><span>free of charge </span></h2><br>
        <a  class="box1" href="#"   style="background-image: url(../image/net.jpg)"  id="reg_btn"><span>mosquito<span style="color: white">_</span>net</span></a>
        <a class="box1" href="#" style="background-image: url(../image/condom.jpg)" id="reg_btn"><span>contraceptics</span></a>
        <a class="box1" href="#"  style="background-image: url(../image/vacc.png)" id="reg_btn"><span>vacinations</span></a>
      </div>
      <div>
        <h2><span>Herbal medecine</span></h2><br>
        <a class="box1" href="#" style="background-image: url(../image/hpp.png)" id="reg_btn"><span>naturopath advices</span></a>
        <a class="box1" href="pay.php"  style="background-image: url(../image/hmp.jpg)" id="reg_btn"><span>herbal medecines</span></a>
        <a class="box1" href="#"  style="background-image: url(../image/hdp.jpg)"><span>herbal preparations</span></a>
        <a href="#"><span></span></a>
      </div>
      <div>
        <h2><span>lowest prices </span></h2><br>
        <a class="box1" href="pay.php" style="background-image: url(image/drugs.jpg)"><span>Drugs<span style="color: white">_</span>&<span style="color: white">_</span>Supplements</span></a>
        <a class="box1"href="pay.php"style="background-image: url(image/bbyk.jpg)"><span>Family<span style="color: white">_</span>&<span style="color: white">_</span>Pregnancykits</span></a>
        <a class="box1" href="pay.php" style="background-image: url(image/cons.jpg)"><span>direct-consultation<span style="color: white">_</span>used<span style="color: white">_</span>kits</span></a>
        <a href="#"><span></span></a>
      </div>
    
    </div>

    <div class="box2">
      <h3 >Download Our App</h3>
      <div>download our app for Android & IOS mobile phones</div><br>
      <img class="di1" src="../image/app-store.png" alt="app-store" srcset="">
      <img class="di1" src="../image/play-store.png" alt="play-store" srcset="">
    </div>
    <div class="box2">
      <img class="di2" src="../image/H-logo1.jpg" alt="">
      <div>MISTERhealth is just a small portion of the infinite services proposed by the <span style="color:gold"> MISTER_WORLD ™</span> a company who innovate to your dreams</div>
    </div>
    <div class="box2">
      <h3>Look For <span style="color:gold">💡</span> </h3>
      <a href="">web & software designers</a><br>
      <a href="">women hair decoration products</a><br>
      <a href="">car maintenance</a><br>
      <a href="">mechanical designers</a><br>
    </div>
    <div class="box3">
      <h3>Follow Us On</h3>
      <a href="http:"><img src="../image/youtube.png" alt="" srcset="" ></a>
      <a href="http://"><img src="../image/google.png" alt="" srcset=""></a>
      <a href="http://"><img src="../image/histagram.png" alt="" srcset=""></a>
      <a href="http://"><img src="../image/whatapp.png" alt="" srcset=""></a>
      <a href="http://"><img src="../image/facebook.png" alt="" srcset=""></a>
      <a href="http://"><img src="../image/twitter.png" alt="" srcset=""></a>
      <a href="http://"><img src="../image/inno.png" alt="" srcset=""></a>
      <a href="http://"><img src="../image/snap.png" alt="" srcset=""></a>
      <hr>
    </div>
    <div class="cpyr">Copyright 2021 MISTER_world |MISTERhealth<sup style="font-size: 25px;">©</sup>.all rights reserved</div>
      <br><br>



 </body>
      </html>

<?php
	}
	else
	{
		header('location:../home.php');
	}
?>