
<!DOCTYPE html>
<html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui, shrink-to-fit=no, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="google-site-verification" content="">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Home | MISTERhealth</title>
    <link href="image/favicon (3).ico" rel="shortcut icon">
    <link rel="stylesheet" href="home.css">    
 </head>

 <body class="body" style="background-color: black;">
    <!--background -->

    <div class="slideshow-container">
   
      <div class="mySlides fade">
        <div class="head-bg1" style="background-color: rgb(0, 162, 255);"></div>
        <img class="bgp" src="image/DHF.jpg" style="width:100%">
        <div class="text">Caption Text</div>
        <div  class="head-bg2" style="background-color: rgb(0, 162, 255);"></div>
        <div  class="head-bg3" style=" background: linear-gradient(to bottom, rgb(0, 162, 255), rgb(0, 162, 255),white,white);"></div>
      </div>

      <div class="mySlides fade">
        <div  class="head-bg1"  style="background-color:black;"></div>
        <img class="bgp" src="image/DT.jpg" style="width:100%">
        <div class="text">Caption Two</div>
        <div  class="head-bg2"  style="background-color:black;"></div>
        <div  class="head-bg3" style=" background: linear-gradient(to bottom, black, black,white,white);"></div>
      </div>

      <div class="mySlides fade">
        <div  class="head-bg1"  style="background-color:rgb(224, 7, 159);"> </div>
        <img class="bgp" src="image/MC.jpg" style="width:100%">
        <div class="text">Caption Three</div>
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
        setTimeout(showSlides, 5000); // Change image every 2 seconds
        }
    </script>

    <!--background end -->
    <header>
        <nav class="M-nav">
           <!--logo-->
          <a href="#"></a>
        
            <!--logo for animated logo-->
            <div class="alogo_G11" >
              <img src="image/H-logo.png"  class="hi1">
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
                      <a href="#">Espanol</a>
                    </div>
                </div> 
                <span  class="emerg1">
                <a href="#ab"> Emergency </a>
                </span>
                <span class="em2">
                  <a href="" >🚑❗❗</a>
                </span>
                <span  class="done"><a href="INSIDE/pay.php"><sup style="font-size: 20px"  >👐</sup><span class="hand">Donate</span></a>     </span>       
                <!-- search bar complete -->
                <span>
                    <form autocomplete="off" action="">
                      <div class="autocomplete_src" >
                        <button type="submit" class="src_btn_class_1 "></button>
                           <img src="image/SRC-LOGO.png"  class="src_btn_class_11">
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
                <a href="#" class="N-E"  onclick="document.getElementById('id01').style.display='block'" style="width:auto;" id="reg_btn">
                  <span > News & Experts</span> 
                </a>
               <!-- symp-check us botton   -->
                <a href="symptoms/symptoms.php"  class="symp-check"  id="reg_btn">
                  <span >Symptoms Check</span>
                </a>
                <!-- portfolio button -->
                <a href="#" class="F-center">
                  <span >Find a Center</span>
                </a>
                <!-- help and advices -->
                <a href="#" class="H-A">
                  <span >Help and Advices</span>
                </a>

                <div class="we">
                  <div class="dropdown_more">
                    <button href="javascript:void(0);" class="dropbtn_more" >🏠</button>
                    <div class="dropdown_more-content">
                      <a href="#"  onclick="document.getElementById('id01').style.display='block'" style="width:auto;" id="reg_btn">News & Experts</a>
                      <a href="symptoms/symptoms.php"  >Symptoms Check</a>
                      <a href="#">Find a Center</a>
                      <a href="#">Help and Advices</a>
                    </div>
                  </div> 
                </div>
           
              </div>  
              <a href="cart/cart.html" class="cart"><img src="image/cart.png" alt=""></a>

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
            <a href="#"  onclick="document.getElementById('id01').style.display='block'" style="width:auto;" id="reg_btn"><span>find a center</span></a>
            <a href="#"  onclick="document.getElementById('id01').style.display='block'" style="width:auto;" id="reg_btn"><span>add your center</span></a>
            <a href="#"  onclick="document.getElementById('id01').style.display='block'" style="width:auto;" id="reg_btn"><span>find a doctor</span></a>
            <a href="#"  onclick="document.getElementById('id01').style.display='block'" style="width:auto;" id="reg_btn"><span>recrutement and internships</span></a>
          </div>

        </nav>

    </header>
    <div class="M-cont">
      <div>
        <h2><span>free of charge </span></h2><br>
        <a  class="box1" href="#"  onclick="document.getElementById('id01').style.display='block'" style="background-image: url(image/net.jpg)"  id="reg_btn"><span>mosquito<span style="color: white">_</span>net</span></a>
        <a class="box1" onclick="document.getElementById('id01').style.display='block'" style="background-image: url(image/condom.jpg)" id="reg_btn"><span>contraceptics</span></a>
        <a class="box1"  onclick="document.getElementById('id01').style.display='block'" style="background-image: url(image/vacc.png)" id="reg_btn"><span>vacinations</span></a>
      </div>
      <div>
        <h2><span>Herbal medecine</span></h2><br>
        <a class="box1"  onclick="document.getElementById('id01').style.display='block';document.getElementById('id02').style.display='none'" style="background-image: url(image/hpp.png)" id="reg_btn"><span>naturopath advices</span></a>
        <a class="box1" href="#" onclick="document.getElementById('id01').style.display='block'" style="background-image: url(image/hmp.jpg)" id="reg_btn"><span>herbal medecines</span></a>
        <a class="box1" href="#" onclick="document.getElementById('id01').style.display='block'" style="background-image: url(image/hdp.jpg)"><span>herbal preparations</span></a>
        <a href="#"><span></span></a>
      </div>
      <div>
        <h2><span>lowest prices </span></h2><br>
        <a class="box1" href="INSIDE/pay.php" style="background-image: url(image/drugs.jpg)"><span>Drugs<span style="color: white">_</span>&<span style="color: white">_</span>Supplements</span></a>
        <a class="box1"href="INSIDE/pay.php"style="background-image: url(image/bbyk.jpg)"><span>Family<span style="color: white">_</span>&<span style="color: white">_</span>Pregnancykits</span></a>
        <a class="box1" href="INSIDE/pay.php" style="background-image: url(image/cons.jpg)"><span>direct-consultation<span style="color: white">_</span>used<span style="color: white">_</span>kits</span></a>
        <a href="#"><span></span></a>
      </div>
  
    </div>

    <div class="box2">
      <h3 >Download Our App</h3>
      <div>download our app for Android & IOS mobile phones</div><br>
      <img class="di1" src="image/app-store.png" alt="app-store" srcset="">
      <img class="di1" src="image/play-store.png" alt="play-store" srcset="">
    </div>
    <div class="box2">
      <img class="di2" src="image/H-logo1.jpg" alt="">
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
      <a href="http:"><img src="image/youtube.png" alt="" srcset="" ></a>
      <a href="http://"><img src="image/google.png" alt="" srcset=""></a>
      <a href="http://"><img src="image/histagram.png" alt="" srcset=""></a>
      <a href="http://"><img src="image/whatapp.png" alt="" srcset=""></a>
      <a href="http://"><img src="image/facebook.png" alt="" srcset=""></a>
      <a href="http://"><img src="image/twitter.png" alt="" srcset=""></a>
      <a href="http://"><img src="image/inno.png" alt="" srcset=""></a>
      <a href="http://"><img src="image/snap.png" alt="" srcset=""></a>
      <hr>
    </div>
    <div class="cpyr">Copyright 2021 MISTER_world |MISTERhealth<sup style="font-size: 25px;">©</sup>.all rights reserved</div>
      <br><br>


              <!--login bottom and form-->
              <div class="login">            
                  

                   <div id="id01" class="modal">

                      <form class="modal-content animate" method="POST" action="register/login.inc.php">
                   
                        <div class="imgcontainer">
                          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                          <img src="image/reg-logo.jpg" alt="Avatar" class="avatar">
                          <h3 class="LST">Am not yet a member i prefer to  <a href="input/signup_f">SIGNUP</a> first</h3>
                        </div>

                        <div class="container">  
                          <label for="uname" style="color: darkorchid;"><b>Username</b></label>
                          <input type="text" placeholder="Enter Username" name="name" required>

                          <label for="mail" style="color: darkorchid;"><b>E-mail</b></label>
                          <input type="email" placeholder="Enter E-mail" name="email" required>

                          <label for="psw" style="color: darkorchid;"><b>Password</b></label>
                          <input type="password" placeholder="Enter Password" name="password" required>

                          <button type="submit" name="l_submit" class="log_btn">Login</button><br/>
                          <input type="checkbox" checked="checked" name="remember"> <span style="color:  #00eaff">REMEMBER ME</span>
                        </div>

                        <div class="container" style="background-color:#f1f1f1">
                          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                          <span class="psw">Forgot <a href="#" style="color: palevioletred">password?</a></span>
                        </div>  
                      </form>
                  </div>

                  <script>
                    var modal = document.getElementById('id01');
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                  </script>

                </div>
















                

                            <!--SIGNUP bottom and form-->
              <div class="signup">
                <div id="id02" class="modal1">
                    <form id="modal1_content_animate" class="animate" method="POST" action="register/signup.inc.php">
                      <!-- One "tab" for each step in the form: -->
                        <div class="tab">
                          <div class="signup-imgcontainer">
                            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal1">&times;</span>
                            <img src="image/sign-tel.jpg" alt="Avatar2" class="avatar">
                          </div>

                          <label for="P-#1" style="color: darkorchid;"><b>Phone number</b></label>
                            <input type="text" placeholder="677665544" name="tel1"  onkeypress="return onlyNumberKey(event)" required>
                            <input type="checkbox"  name="c_tel1" class="contact-checkbox">
                            <br>
                          <label for="P-#2" style="color: darkorchid;"><b>Any other phone number</b></label>
                            <input type="text" placeholder="655443322" name="tel2"  onkeypress="return onlyNumberKey(event)" > 
                            <input type="checkbox"  name="c_tel2" class="contact-checkbox">
                            <br>               
                          <label for="mail" style="color: darkorchid;"><b>E-mail</b></label>
                            <input type="email" placeholder="Enter E-mail" name="email" required>
                          <br>  
                          <p>
                            <h3>Note❗❗</h3>
                            <img src="" alt="" class="txt-for-email">
                            <div>
                            NO Patients information,consultation records or Doctor-Patient conversation will be sent nor done here .
                            The purpose of this E-mail is just to notify you on new trends or upgrades concerning our cite and to provide to you and surrounding with general advices and quick solutions conserning your health and fitness to improove your day to day lives thanks.  
                            </div>
                          </p>
      
                        </div>
                        <div class="tab">
                          <div class="signup-imgcontainer">
                            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal1">&times;</span>
                            <img src="image/reg-logo.jpg" alt="Avatar2" class="avatar">
                          </div>

                          <label for="Birth Date" style="color: darkorchid;"><b>Date of Birth</b></label><br/>
                          <div>
                            <input type="text" placeholder="09" class="day" max="31" name="day" style="width:200px;"  onkeypress="return onlyNumberKey(event)"  required> 

                            <div class="autocomplete_month" >
                              <input id="myMonth"  type="text" name="month" class="month" placeholder="june" style="width:200px;" onkeypress="return onlyStringKey(event)" required>
                            </div>
                            <script>
                              function autocomplete_month(inp, arr) {
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
                                    a.setAttribute("id", this.id + "autocomplete_month-list");
                                    a.setAttribute("class", "autocomplete_month-items");
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
                                    var x = document.getElementById(this.id + "autocomplete_month-list");
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
                                  x[currentFocus].classList.add("autocomplete_month-active");
                                }
                                function removeActive(x) {
                                  /*a function to remove the "active" class from all autocomplete items:*/
                                  for (var i = 0; i < x.length; i++) {
                                    x[i].classList.remove("autocomplete_month-active");
                                  }
                                }
                                function closeAllLists(elmnt) {
                                  /*close all autocomplete lists in the document,
                                  except the one passed as an argument:*/
                                  var x = document.getElementsByClassName("autocomplete_month-items");
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
                              var months = ["january","February","March","April","May","June","July","August","September","October","November","December"];

                              /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
                              autocomplete_month(document.getElementById("myMonth"), months);

                            </script>

                            <input type="text" placeholder="1990" max="2021" class="year" name="year" style="width:200px;"  onkeypress="return onlyNumberKey(event)" required> 
                          </div >

                          <label for="" style="color: darkorchid;"><b>Gender</b></label><br/>
                          <div>
                            <input type="radio" name="gender" value="male" checked> Male<br>
                            <input type="radio" name="gender" value="female"> Female<br>
                            <input type="radio" name="gender" value="other"> Other
                          </div>

                        </div>
                        <div class="tab">
                            <div class="signup-imgcontainer">
                                  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal1">&times;</span>
                                  <img src="image/reg-logo.jpg" alt="Avatar2" class="avatar">
                            </div>

                            <div class="signup-container">  
                              <label for="uname" style="color: darkorchid;" ><b>User Firstname</b></label>
                              <input type="text" placeholder="Enter User Firstname" name="name"  onkeypress="return onlyStringKey(event)" autofocus required>

                              <label for="uname" style="color: darkorchid;" ><b>User Lastname</b></label>
                              <input type="text" placeholder="Enter User Lastname" name="s_name"  onkeypress="return onlyStringKey(event)" autofocus required>


                              <label for="psw" style="color: darkorchid;"><b>Password</b></label>
                              <input type="password" placeholder="Enter Password" name="password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                              <div id="message">
                                <h4>Password must contain the following:</h4>
                                  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                  <p id="number" class="invalid">A <b>number</b></p>
                                  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                                  <p id="best" class="fine"> <SUP style="font-size: 8px;font-style:italic;color:deeppink">MISTERweb</SUP> PASSWORD APROUVED</p>

                              </div>
                            
                                <script>
                                    var myInput = document.getElementById("psw");
                                    var letter = document.getElementById("letter");
                                    var capital = document.getElementById("capital");
                                    var number = document.getElementById("number");
                                    var length = document.getElementById("length");
                                    var good = document.getElementById("best");

                                    //  user clicks on the password field, show the message box
                                    myInput.onfocus = function() {
                                    document.getElementById("message").style.display = "block";
                                      }

                                    // When the user clicks outside of the password field, hide the message box
                                    myInput.onblur = function() {
                                    document.getElementById("message").style.display = "none";
                                    }

                                    // When the user starts to type something inside the password field
                                    myInput.onkeyup = function() {
                                    // Validate lowercase letters
                                  var lowerCaseLetters = /[a-z]/g;
                                  if(myInput.value.match(lowerCaseLetters)) {  
                                      letter.classList.remove("invalid");
                                      letter.classList.add("valid");
                                  } else {
                                      letter.classList.remove("valid");
                                      letter.classList.add("invalid");
                                  }

                                  // Validate capital letters
                                  var upperCaseLetters = /[A-Z]/g;
                                  if(myInput.value.match(upperCaseLetters)) {  
                                      capital.classList.remove("invalid");
                                      capital.classList.add("valid");
                                  } else {
                                      capital.classList.remove("valid");
                                      capital.classList.add("invalid");
                                  }

                                  // Validate numbers
                                  var numbers = /[0-9]/g;
                                  if(myInput.value.match(numbers)) {  
                                      number.classList.remove("invalid");
                                      number.classList.add("valid");
                                  } else {
                                      number.classList.remove("valid");
                                      number.classList.add("invalid");
                                  }

                                  // Validate length
                                  if(myInput.value.length >= 8) {
                                      length.classList.remove("invalid");
                                      length.classList.add("valid");
                                  } else {
                                      length.classList.remove("valid");
                                      length.classList.add("invalid");

                                  }
                                  // MISTER WEB VALIDATION
                                  if(myInput.value.length >= 8 && myInput.value.match(numbers) && myInput.value.match(upperCaseLetters)&& myInput.value.match(lowerCaseLetters)){
                                      letter.classList.remove("invalid");
                                      letter.classList.add("fine");
                                      capital.classList.remove("invalid");
                                      capital.classList.add("fine");
                                      number.classList.remove("invalid");
                                      number.classList.add("fine");
                                      length.classList.remove("invalid");
                                      length.classList.add("fine");
                                      good.classList.remove("fine");
                                      good.classList.add("ok-psw");

                                  }
                                  else{
                                      letter.classList.remove("fine");
                                      capital.classList.remove("fine");
                                      number.classList.remove("fine");
                                      length.classList.remove("fine");
                                      good.classList.remove("ok-psw");
                                      good.classList.add("fine");
                                  }
                                  }
                                </script>
                            <label for="R-psw" style="color: darkorchid;"><b>Repeat-Password</b></label>
                            <input type="password" placeholder="r-Password" name="r-password" required>
                            <div>
                              <span>
                                <button class="collapsible"><center>CLICK to Read the  Terms and Conditions</center></button>
                                  <div class="content">
                                      <p>jhrd,uyfljhvy,ujgc,hjtlujtclutclutcnfchgc. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.HWWWWWWWWWWWWWWWWWWFKTHFWHQTTTTTTTTTTTUILKYGKJYFJTQWFDTHF.WQYGDJYVJYVGJYVJQW.WQIYYGGGGGGGGGGGGDJVBJHVJWQWQ.WIHVBJYDWVJVJVJWTDQ <BR/>
                                      <BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/><BR/>FXCG</p>
                                  </div>
                                  <div class="term-h">
                                    <div class="progress-container">
                                        <div class="progress-bar" id="myBar"></div>
                                    </div>  
                                  </div>
                                
                                <script>
                                // When the user scrolls the page, execute myFunction 
                                  content.onscroll = function() {myFunction()};

                                    function myFunction() {
                                      var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                                      var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                                      var scrolled = (winScroll / height) * 100;
                                      document.getElementById("myBar").style.width = scrolled + "%";U}
                            
                            
                                      var coll = document.getElementsByClassName("collapsible");
                                      var i;
                                      for (i = 0; i < coll.length; i++) {
                                          coll[i].
                                          
                                          
                                          addEventListener("click", function() {
                                              this.classList.toggle("active");
                                              var content = this.nextElementSibling;
                                              if (content.style.display === "block") {
                                                  content.style.display = "none";
                                              } 
                                              else {
                                                  content.style.display = "block";
                                  }});}
                              </script>

                              </span>
                            </div>
                            <label> <input type="checkbox"  name="check-botton" required> I READ and ACCEPTED </label>     <br>
                          
                         </div>
                        </div>
                        
                        <div style="overflow:auto;">
                          <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)" class="next">Next</button>
                            
                          </div>
                          <div class="signup-container" style="background-color:#f1f1f1">
                                        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                                    </div>  

                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">
                          <span class="step"></span>
                          <span class="step"></span>
                          <span class="step"></span>
                          <span class="step"></span>
                        </div>
                      </form>

                        <script>
                          var currentTab = 0; // Current tab is set to be the first tab (0)
                          showTab(currentTab); // Display the crurrent tab

                          function showTab(n) {
                            // This function will display the specified tab of the form...
                            var x = document.getElementsByClassName("tab");
                            x[n].style.display = "block";
                            //... and fix the Previous/Next buttons:
                            if (n == 0) {
                              document.getElementById("prevBtn").style.display = "none";
                            } else {
                              document.getElementById("prevBtn").style.display = "inline";
                            }
                            if (n == (x.length - 1)) {
                              document.getElementById("nextBtn").innerHTML = "Submit";
                            } else {
                              document.getElementById("nextBtn").innerHTML = "Next";
                            }
                            //... and run a function that will display the correct step indicator:
                            fixStepIndicator(n)
                          }

                          function nextPrev(n) {
                            // This function will figure out which tab to display
                            var x = document.getElementsByClassName("tab");
                            // Exit the function if any field in the current tab is invalid:
                            if (n == 1 && !validateForm()) return false;
                            // Hide the current tab:
                            x[currentTab].style.display = "none";
                            // Increase or decrease the current tab by 1:
                            currentTab = currentTab + n;
                            // if you have reached the end of the form...
                            if (currentTab >= x.length) {
                              // ... the form gets submitted:
                              document.getElementById("modal1_content_animate").submit();
                              return false;
                            }
                            // Otherwise, display the correct tab:
                            showTab(currentTab);
                          }

                          function validateForm() {
                            // This function deals with validation of the form fields
                            var x, y, i, valid = true;
                            x = document.getElementsByClassName("tab");
                            y = x[currentTab].getElementsByTagName("input");
                            // A loop that checks every input field in the current tab:
                            for (i = 0; i < y.length; i++) {
                              // If a field is empty...
                              if (y[i].value == "") {
                                // add an "invalid" class to the field:
                                y[i].className += " invalid";
                                // and set the current valid status to false
                                valid = false;
                              }
                            }
                            // If the valid status is true, mark the step as finished and valid:
                            if (valid) {
                              document.getElementsByClassName("step")[currentTab].className += " finish";
                            }
                            return valid; // return the valid status
                          }

                          function fixStepIndicator(n) {
                            // This function removes the "active" class of all steps...
                            var i, x = document.getElementsByClassName("step");
                            for (i = 0; i < x.length; i++) {
                              x[i].className = x[i].className.replace(" active", "");
                            }
                            //... and adds the "active" class on the current step:
                            x[n].className += " active";
                          }
                        </script>

                      </div>
                      <script>
                        // Get the modal
                        var modal1 = document.getElementById('id02');
                        // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event1) {if (event1.target == modal1) {modal1.style.display = "none";}}
                      </script>
                      <script>
                        function onlyNumberKey(evt){
                          var ASCIICode =(evt.which) ? evt.which : evt.KeyCode
                          if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                            return false;
                          return true;  
                          }
                      </script>
                        <script>
                        function onlyStringKey(evt){
                          var ASCIICode =(evt.which) ? evt.which : evt.KeyCode
                          if (ASCIICode > 31 && (ASCIICode < 65 || ASCIICode ==91 || ASCIICode ==92 || ASCIICode ==93 || ASCIICode ==94 || ASCIICode ==95 || ASCIICode ==96 || ASCIICode > 122 ))
                            return false;
                          else if(ASCIICode < 97 || ASCIICode > 122)
                              
                          return true;  
                          }
                      </script>

              </div>


 </body>

 