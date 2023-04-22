<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('doctor')"> doctor</button>
  <button class="btn" onclick="filterSelection('animals')"> Animals</button>
  <button class="btn" onclick="filterSelection('fruits')"> Fruits</button>
  <button class="btn" onclick="filterSelection('colors')"> Colors</button>
</div>

<!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
<div class="container">
<div class="filterDiv doctor " style="background-image:url(image/CAM.jpg) "><span class="fh">Allergists/Immunologists </span><br><br><div class="ft">They treat immune system disorders such as asthma, eczema, food allergies, insect sting allergies, and some autoimmune diseases.</div></div>
<div class="filterDiv doctor"><span class="fh">Anesthesiologists </span><br><br><div class="ft">These doctors give you drugs to numb your pain or to put you under during surgery, childbirth, or other procedures. They monitor your vital signs while you’re under anesthesia.</div></div>
<div class="filterDiv doctor"><span class="fh">Cardiologists </span><br><br><div class="ft">They’re experts on the heart and blood vessels. You might see them for heart failure, a heart attack, high blood pressure, or an irregular heartbeat.</div></div>
<div class="filterDiv doctor"><span class="fh">Colon and Rectal Surgeons </span><br><br><div class="ft">You would see these doctors for problems with your small intestine, colon, and bottom. They can treat colon cancer, hemorrhoids, and inflammatory bowel disease. </div></div>
<div class="filterDiv doctor"><span class="fh">Critical Care Medicine Specialists</span><br><br><div class="ft">They care for people who are critically ill or injured, often heading intensive care units in hospitals. You might see them if your heart or other organs are failing or if you’ve been in an accident. </div></div>
<div class="filterDiv doctor"><span class="fh">Dermatologists </span><br><br><div class="ft">Have problems with your skin, hair, nails? Do you have moles, scars, acne, or skin allergies? Dermatologists can help.</div></div>
<div class="filterDiv doctor"><span class="fh">Endocrinologists </span><br><br><div class="ft">These are experts on hormones and metabolism. They can treat conditions like diabetes, thyroid problems, infertility, and calcium and bone disorders.</div></div>
<div class="filterDiv doctor"><span class="fh">Emergency Medicine Specialists</span><br><br><div class="ft">These doctors make life-or-death decisions for sick and injured people, usually in an emergency room. Their job is to save lives and to avoid or lower the chances of disability.</div></div>
<div class="filterDiv doctor"><span class="fh">Family Physicians </span><br><br><div class="ft">They care for the whole family, including children, adults, and the elderly. They do routine checkups and screening tests, give you flu and immunization shots, and manage diabetes and other ongoing medical conditions.</div></div>
<div class="filterDiv doctor"><span class="fh">Gastroenterologists </span><br><br><div class="ft">They’re specialists in digestive organs, including the stomach, bowels, pancreas, liver, and gallbladder. You might see them for abdominal pain, ulcers, diarrhea, jaundice, or cancers in your digestive organs. They also do a colonoscopy and other tests for colon cancer.</div></div>
<div class="filterDiv doctor"><span class="fh">Geriatric Medicine Specialists </span><br><br><div class="ft">These doctors care for the elderly. They can treat people in their homes, doctors' offices, nursing homes, assisted-living centers, and hospitals.</div></div>

<div class="filterDiv "><span class="fh"></span><br><br><div class="ft"></div></div>

</div>
<style>
.container {
    overflow: hidden;
}

.filterDiv {
    float: left;
    background-color:none;
    color: #000000;
    width: 32%;
    height: 200px;
    text-align: center;
    margin: 2px;
    border-style: solid;
    border:1px;
    display: none; /* Hidden by default */
    object-fit: contain;
}
.fi{
 
  z-index: -30;
  width: 100%;
  height: 80%;
}

/* The "show" class is added to the filtered elements */
.show {
    display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

/* Add a light grey background on mouse-over */
.btn:hover {
  background-color: #ddd;
}

/* Add a dark background to the active button */
.btn.active {
  background-color: #666;
  color: white;
}

</style>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
  }
}

// Show filtered elements
function AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

</script>
</body>
</html>