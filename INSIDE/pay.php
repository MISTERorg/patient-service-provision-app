<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | MISTERhealth</title>
    <link href="../image/favicon (3).ico" rel="shortcut icon">
    <link rel="stylesheet" href="home.css">   </head>
<body>

    <style>
        body{
            background-image: url("../image/pay.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .tab1{
            width:50%;
            margin-left: 25%;
            height: 30%;
            border:solid 3px;
            border-radius: 30px;
            padding: 20px;
            background-color: white;
        }
        .s{
            margin-left: 30%;
        }
    </style>
<div class="tab1 ">
                          <div class="signup-imgcontainer">
                            <img src="../image/reg-logo.jpg" alt="Avatar2" class="avatar">
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
                          <span class="s-t">OR</span>
                          <span class="m-l"></span>
                          <span class="s-t">AND</span>
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
</body>
</html>