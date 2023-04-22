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
<body>
<div class="slideshow-container">
   
   <div class="mySlides fade">
     <div class="head-bg4" style="background-color: rgb(0, 162, 255);"><img src="image/H-logo3.png" alt="" srcset=""></div>
   </div>

   <div class="mySlides fade">
     <div  class="head-bg4"  style="background-color:black;"><img src="image/H-logo.png" alt="" srcset=""></div>
   </div>

   <div class="mySlides fade">
     <div  class="head-bg4"  style="background-color:white;"><img src="image/H-logo2.png" alt="" srcset=""></div>
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
      
        
</body>
</html>










<div class="login">            
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="login_btn">Login</button>       

                <div id="id01" class="modal">

                    <form class="modal-content animate" action="include/login.inc.php">
                      <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="image/reg-logo.jpg" alt="Avatar" class="avatar">
                      </div>

                      <div class="container">  
                        <label for="uname" style="color: darkorchid;"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>

                        <label for="mail" style="color: darkorchid;"><b>E-mail</b></label>
                        <input type="email" placeholder="Enter E-mail" name="mail" required>

                        <label for="psw" style="color: darkorchid;"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>

                        <button type="submit" class="log_btn">Login</button><br/>
                        <input type="checkbox" checked="checked" name="remember"> <span style="color:  #00eaff">REMEMBER ME</span>
                      </div>

                      <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <span class="psw">Forgot <a href="#" style="color: palevioletred">password?</a></span>
                      </div>  
                    </form>
                </div>

                <script>
                                  // Get the modal
                  var modal = document.getElementById('id01');

                  When the user clicks anywhere outside of the modal, close it
                  window.onclick = function(event) {
                      if (event.target == modal) {
                          modal.style.display = "none";
                      }
                  }

                </script>

              </div>



              <div class="container3">
              <!--login bottom and form-->
                <div class="login">            
                      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="login_btn"> L O G I N</button>       

                      <div id="id01" class="modal">

                      <form class="modal-content animate" action="include/login.inc.php">
                        <div class="imgcontainer">
                          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                          <img src="image/reg-logo.jpg" alt="Avatar" class="avatar">
                        </div>

                        <div class="container">  
                          <label for="uname" style="color: darkorchid;"><b>Username</b></label>
                          <input type="text" placeholder="Enter Username" name="uname" required>

                          <label for="mail" style="color: darkorchid;"><b>E-mail</b></label>
                          <input type="email" placeholder="Enter E-mail" name="mail" required>

                          <label for="psw" style="color: darkorchid;"><b>Password</b></label>
                          <input type="password" placeholder="Enter Password" name="psw" required>

                          <button type="submit" class="log_btn">Login</button><br/>
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
                      <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;" class="signup_btn">S I G N U P</button>

                      <div id="id02" class="modal1">

                      <form id="modal1_content_animate" class="animate" action="include/signup.inc.php">
                        <!-- One "tab" for each step in the form: -->
                          <div class="tab">
                            <div class="signup-imgcontainer">
                              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal1">&times;</span>
                              <img src="image/sign-tel.jpg" alt="Avatar2" class="avatar">
                            </div>

                            <label for="P-#1" style="color: darkorchid;"><b>Phone number</b></label>
                              <input type="text" placeholder="677665544" name="symp-check1"  onkeypress="return onlyNumberKey(event)" required>
                              <input type="checkbox"  name="symp-check1-checkbox" class="symp-check-checkbox">
                              <br>
                            <label for="P-#2" style="color: darkorchid;"><b>Any other phone number</b></label>
                              <input type="text" placeholder="65544332211" name="symp-check2"  onkeypress="return onlyNumberKey(event)" > 
                              <input type="checkbox"  name="symp-check2-checkbox" class="symp-check-checkbox">
                              <br>               
                            <label for="mail" style="color: darkorchid;"><b>E-mail</b></label>
                              <input type="email" placeholder="Enter E-mail" name="mail" required>
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
                              <input type="text" placeholder="09" class="day" max="31" name="symp-check2" style="width:200px;"  onkeypress="return onlyNumberKey(event)"  required> 

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

                              <input type="text" placeholder="1990" max="2021" class="year" name="symp-check2" style="width:200px;"  onkeypress="return onlyNumberKey(event)" required> 
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

                            <div>
                              <div>
                                <label for="orange" style="color: darkorchid;" ><b>Orange Money</b></<input>
                                <input type="text" placeholder="6-556-455-99" name="orange-money" class="OM" style="background-color: orangered;color:white;"  onkeypress="return onlyNumberKey(event)" required>
                              </div>                      

                              <div>
                                <label for="MTN" style="color: darkorchid;"><b>MTN Money</b></label>
                                <input type="text" placeholder="6-500-800-31" name="MTN-money" class="MOMO" style="background-color: rgb(255, 210, 0);color:white;"  onkeypress="return onlyNumberKey(event)" required>
                              </div>                      
                            </div>
                            <br/>
                            <span class="s">
                              <span class="e-l"></span> 
                              <span class="s-t">OR</span>
                              <span class="m-l"></span>
                              <span class="s-t">AND</span>
                              <span class="e-l"></span> 
                            </span>
                            <br/>
                            <div>
                                <label for="MTN" style="color: darkorchid;"><b>Card Name</b></label>
                                <input type="text" name="" class="C-name" placeholder="Mister Xpress" onkeypress="return onlyStringKey(event)">
                              <br>
                                <label for="MTN" style="color: darkorchid;"><b>Card Number</b></label>
                                <input type="text" name="" class="C-number" placeholder="1111-2222-3333-4444" onkeypress="return onlyNumberKey(event)" >
                              <br>
                                <div class="autocomplete_c_month" >
                                <label for="MTN" style="color: darkorchid;"><b>Exp month</b></label>
                                  <input id="c_Month"  type="text" name="month" class="exp-month" placeholder="June" required>
                                </div>
                                <script>
                                  function autocomplete_c_month(inp, arr) {
                                    /*the autocomplete function takes two arguments,  the text field element and an array of possible autocompleted values:*/
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
                                        a.setAttribute("id", this.id + "autocomplete_c_month-list");
                                        a.setAttribute("class", "autocomplete_c_month-items");
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
                                                /*close the list of autocompleted values, (or any other open lists of autocompleted values:*/
                                                closeAllLists();
                                            });
                                            a.appendChild(b);
                                          }
                                        }
                                    });
                                    /*execute a function presses a key on the keyboard:*/
                                    inp.addEventListener("keydown", function(e) {
                                        var x = document.getElementById(this.id + "autocomplete_c_month-list");
                                        if (x) x = x.getElementsByTagName("div");
                                        if (e.keyCode == 40) {
                                          /*If the arrow DOWN key is pressed,increase the currentFocus variable:*/
                                          currentFocus++;
                                          /*and and make the current item more visible:*/
                                          addActive(x);
                                        } else if (e.keyCode == 38) { //up
                                          /*If the arrow UP key is pressed, decrease the currentFocus variable:*/
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
                                      x[currentFocus].classList.add("autocomplete_c_month-active");
                                    }
                                    function removeActive(x) {
                                      /*a function to remove the "active" class from all autocomplete items:*/
                                      for (var i = 0; i < x.length; i++) {
                                        x[i].classList.remove("autocomplete_c_month-active");
                                      }
                                    }
                                    function closeAllLists(elmnt) {
                                      /*close all autocomplete lists in the document, except the one passed as an argument:*/
                                      var x = document.getElementsByClassName("autocomplete_c_month-items");
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
                                  autocomplete_c_month(document.getElementById("c_Month"), months);

                                </script>
                              <br>
                                <label for="MTN" style="color: darkorchid;"><b>Exp Year</b></label>
                                <input type="text" name="" class="exp-year" placeholder="2021" onkeypress="return onlyNumberKey(event)">
                              <br>
                                <label for="MTN" style="color: darkorchid;"><b>CVV</b></label>
                                <input type="text" name="" class="C-cvv" placeholder="237" onkeypress="return onlyNumberKey(event)" >
                              <br>
                            </div>                 
                          </div>
                          <div class="tab">
                              <div class="signup-imgcontainer">
                                    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal1">&times;</span>
                                    <img src="image/reg-logo.jpg" alt="Avatar2" class="avatar">
                              </div>

                              <div class="signup-container">  
                                <label for="uname" style="color: darkorchid;" ><b>User Firstname</b></label>
                                <input type="text" placeholder="Enter User Firstname" name="ufname"  onkeypress="return onlyStringKey(event)" autofocus required>

                                <label for="uname" style="color: darkorchid;" ><b>User Lastname</b></label>
                                <input type="text" placeholder="Enter User Lastname" name="ulname"  onkeypress="return onlyStringKey(event)" autofocus required>


                                <label for="psw" style="color: darkorchid;"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="psw" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
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
                                <input type="password" placeholder="repeat-Password" name="R-psw" required>
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