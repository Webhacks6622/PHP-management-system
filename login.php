<?php
session_start();
include 'auth.php';
if(isset($_POST['save']))
{    
     $email = $_POST['email'];
     $password = $_POST['password'];
     
     $emailquery ="select * from fr2020 where email='$email' ";
     $query = mysqli_query($conn,$emailquery);

     $emailcount = mysqli_num_rows($query);
     if($emailcount) {
         $emailpass = mysqli_fetch_assoc($query);
         $dbpass = $emailpass['password'];
         $_SESSION['uname'] = $emailpass['name'];
         $_SESSION['flt'] = $emailpass['flat'];
         $_SESSION['mem'] = $emailpass['members'];
         $_SESSION['two'] = $emailpass['twh'];
         $_SESSION['four'] = $emailpass['fwh'];
         $passdecode = password_verify($password, $dbpass);

         if($passdecode) {
         	?>
         	<script>
         		location.replace("profile.php");
         	</script>
            <?php
         }else {
            echo '<script>alert("Wrong email or password")</script>';
         } 

     }
       

}
?>






<!DOCTYPE html>
<html>
<head>
<style>
  html {
  	    padding: 0;
  	    margin: 0;
  	    font-family: 'Kufam', cursive;
  }
 
#loader {
  position: absolute;
  left: 60%;
  top: 50%;
  z-index: 1;
  width: 50px;
  height: 50px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #E74C3C;
  width: 50px;
  height: 50px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}




#myDiv {
  display: none;
  text-align: center;
}


 
	.header {
		top: -2px;
		left: 0;
		position: fixed;
		width: 100%;
		height: 100px;
		z-index: -99999;
	}
	.footer {
		bottom: 0;
		left: 0;
		position: fixed;
		width: 100%;
		height: 120px;
	}
.card{
	    height: auto;
	    width: 90%;
	    border-radius: 20px;
	    box-shadow:  9px 9px 27px #e0e0e0, 
             -9px -9px 27px #ffffff;
        top: 18%;
        left: 5%;
        position: fixed;
        z-index: 999999;
        transition: 0.5s;
}

.card:hover {
         box-shadow: 0 1px 1px 0 grey;
}

.card input[type="text"] {
	    width: 98%;
	    height: 40px;
	    color: #E74C3C;
	    outline: none;
	    border: none;
	    border: 2px solid #E74C3C;
	    border-radius: 20px;
}

.card input[type="email"] {
	    width: 98%;
	    height: 40px;
	    color: #E74C3C;
	    outline: none;
	    border: none;
	    border: 2px solid #E74C3C;
	    border-radius: 20px;
}

.card input[type="password"] {
	    width: 98%;
	    height: 40px;
	    color: #E74C3C;
	    outline: none;
	    border: none;
	    border: 2px solid #E74C3C;
	    border-radius: 20px;
}

.sign {
	   width: 99%;
	   height: 40px;
	   line-height: 40px;
	   background: #E74C3C;
	   border-radius: 20px;
	   color: white;

}
a {
	text-decoration: none;
}


.card input[type="submit"] {
	    width: 100%;
	    height: 45px;
	    background: #E74C3C;
	    color: white;
	    outline: none;
	    border: none;
	    border-radius: 20px;
	    font-size: 20px;
}
table td{
         padding: 5px;
}
.logo {
       top: 0;
       position: fixed;
       z-index: 99999;
       left: 20%;
}

</style>
	<title></title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Kufam&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#FF5500" />
<body onload="myFunction()" style="margin:0;">
   <div id="loader"></div>



    <div class="logo"><img src="frlogo.png" height="50px" width="200px"></div>
    <div class="container">
<div class="header"><img src="header1.jpg" height="100px" width="100%"></div>
<div class="footer"><img src="footer1.jpg" height="120px" width="100%"></div>
<div style="display:none;" id="myDiv" class="animate-bottom">
<div class="card">
	<center><h3>Account login</h3></center>
<form method="post">
	<table width="100%">
		<tr>
			<td><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="30" height="30"
viewBox="0 0 226 226"
style=" fill:#000000;"><g transform="translate(4.746,4.746) scale(0.958,0.958)"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="butt" stroke-linejoin="none" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g fill="#000000" stroke="#f64242" stroke-width="10" stroke-linejoin="round"><path d="M158.2,67.8v7.53333c0,24.96547 -20.23453,45.2 -45.2,45.2c-24.96547,0 -45.2,-20.23453 -45.2,-45.2v-7.53333c0,-24.96547 20.23453,-45.2 45.2,-45.2c24.96547,0 45.2,20.23453 45.2,45.2zM193.04167,173.94349c6.88547,8.95713 0.33088,21.92318 -10.96159,21.92318h-138.17487c-11.29247,0 -17.84706,-12.96604 -10.96159,-21.92318c11.1418,-14.4866 49.86313,-30.81016 80.04167,-30.81016c30.17853,0 68.91458,16.33109 80.05638,30.81016z"></path></g><path d="M0,226v-226h226v226z" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path><g fill="#e74c3c" stroke="none" stroke-width="1" stroke-linejoin="miter"><path d="M113,22.6c-24.96547,0 -45.2,20.23453 -45.2,45.2v7.53333c0,24.96547 20.23453,45.2 45.2,45.2c24.96547,0 45.2,-20.23453 45.2,-45.2v-7.53333c0,-24.96547 -20.23453,-45.2 -45.2,-45.2zM112.98529,143.13333c-30.17853,0 -68.89987,16.32356 -80.04167,30.81016c-6.88547,8.95713 -0.33088,21.92318 10.96159,21.92318h138.17487c11.29247,0 17.84705,-12.96604 10.96159,-21.92318c-11.1418,-14.47907 -49.87785,-30.81016 -80.05638,-30.81016z"></path></g><path d="" fill="none" stroke="none" stroke-width="1" stroke-linejoin="miter"></path></g></g></svg></td>
			<td><input type="email" placeholder="Email" name="email" required></td>
		</tr>
		<br>
		<tr>
			<td><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="26" height="26"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#e74c3c"><path d="M86,6.61538c-21.99099,0 -39.69231,17.70132 -39.69231,39.69231v13.23077c-14.54868,0 -26.46154,11.91286 -26.46154,26.46154v52.92308c0,14.54868 11.91286,26.46154 26.46154,26.46154h79.38462c14.54868,0 26.46154,-11.91286 26.46154,-26.46154v-52.92308c0,-14.54868 -11.91286,-26.46154 -26.46154,-26.46154v-13.23077c0,-21.99099 -17.70132,-39.69231 -39.69231,-39.69231zM86,19.84615c15.06551,0 26.46154,11.39603 26.46154,26.46154v13.23077h-52.92308v-13.23077c0,-15.06551 11.39603,-26.46154 26.46154,-26.46154zM86,80.00481c11.24099,0 19.84615,8.60517 19.84615,19.84615c0,7.93329 -5.29747,15.34976 -13.23077,17.98558v7.85577h-13.23077v-7.23558c0,-5.94351 3.38522,-10.62079 8.68269,-12.61058c2.63582,-0.67187 4.54808,-3.35937 4.54808,-5.99519c0,-3.97956 -2.63581,-6.61538 -6.61538,-6.61538c-3.97956,0 -6.61538,2.63582 -6.61538,6.61538h-13.23077c0,-11.24099 8.60517,-19.84615 19.84615,-19.84615zM79.38462,132.30769h13.23077v13.23077h-13.23077z"></path></g></g></svg></td>
			<td><input type="Password" placeholder="Password" name="password" required></td>
		</tr>
	</table>
	<br>
<center><input type="submit" value="login" name="save"><br><br>
Don't have an account? <br><br>
<a href="signup.php"><div class="sign">Signup</div></a>

</center>

</div>
</div></form></div>
<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

</body>
</html>