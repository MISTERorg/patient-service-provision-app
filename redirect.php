<?php 
	session_start();
	if(isset($_SESSION['name']))
	{
	 
		include "register/dbh.php"; 
		
		$sql="SELECT * FROM `chat`";

		$query = mysqli_query($conn,$sql);
?>
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
    <meta http-equiv="refresh" content="6;url= INSIDE/home.php">
    <title>Document</title>
</head>
<body style="background-color: black">
<style> 
div {
    width: 100px;
    height: 100px;
    position: absolute;
    -webkit-animation-name: example; 
    -webkit-animation-duration: 4s; 
    -webkit-animation-iteration-count: 3;
    animation-name: example;
    animation-duration: 6.5s;
    animation-iteration-count: 1;
}
img{
    width:200px;
    height:200px;
}
span{
    color: white;
    position: relative;
    display: block;
    text-align:center;
    font-family:bold,arial;
    font-size: 40px;
    width:900px;
    top:300px;
    left:300px;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
    0%  {left:250px; top:300px;}
    20%  { left:250px; top:150px;}
    40%  { left:80%; top:150px;}
    60%  { left:80%; top:75%;}
    80%  {left:250px; top:75%;}
    100% {left:300px; top:300px;} 
    }

/* Standard syntax */
@keyframes example {
    0%  {left:100px; top:300px;}
    20%  { left:100px; top:100px;}
    40%  { left:80%; top:100px;}
    60%  { left:80%; top:73%;}
    80%  {left:100px; top:73%;}
    100% {left:100px; top:300px;}    
    
}
</style>
 <div><img src="image/H-logo.png" alt="" ></div>
 <br>
 <span>HELLO <?php echo $_SESSION['name']; ?> <br> SORRY WE DIDN'T RECOGNISE YOU <br><br>
  THE TIME IS <p id="demo"></p>

<script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
  var d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>

 </span>   
</body>
</html>

<?php
	}
	else
	{
		header('location:home.php');
	}
?>
