<?php
include 'auth.php';
if(isset($_POST['save']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $flat = $_POST['flat'];
     $members = $_POST['members'];
     $twh = $_POST['twh'];
     $fwh = $_POST['fwh'];
     
     $pass = password_hash($password, PASSWORD_BCRYPT);
     $emailquery ="select * from fr2020 where email='$email' ";
     $query = mysqli_query($conn,$emailquery);

     $emailcount = mysqli_num_rows($query);
     if($emailcount>0) {
         echo "You are already registered with us";
     }else {
       $insertquery ="INSERT INTO `fr2020`(`name`, `email`, `password`, `flat`, `members`, `twh`, `fwh`) VALUES ('$name','$email','$pass','$flat','$members','$twh','$fwh')";
       $register = mysqli_query($conn,$insertquery);
       if($register){
    header("location: login.php");
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
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 80px;
  height: 80px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #E74C3C;
  width: 80px;
  height: 80px;
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




      .footer a {
          text-decoration: none;
          color: #E74C3C;
      }


        .header {
        top: 0;
        left: 0;
        position: fixed;
        background: white;
        height: 50px;
        width: 100%;
        box-shadow: 0 4px 4px 0 grey;
        line-height: 50px;
        display: flex;
        justify-content: space-between;
        z-index: 9999999;
    }

    .back {
        line-height: 70px;
        text-decoration: none;
    }

     .card {
          height: auto;
          width: 90%;
          box-shadow: 0 2px 2px 0 grey;
     }

    .card input[type="text"] {
        width: 90%;
        height: 40px;
        color: #E74C3C;
        outline: none;
        border: none;
        border: 2px solid #E74C3C;
        border-radius: 20px;
}


  .maint {
        height: 50px;
        width: 90%;
        border-radius: 20px;
        color: white;
        outline: none;
        border: none;
        border: 2px solid #E74C3C;
        background: #E74C3C;
        align-items: center;
        text-align: center;
        line-height: 50px;
}
    </style>
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Kufam&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#FF5500" />
</head>
<body onload="myFunction()" style="margin:0;">
    <div id="loader"></div>

<div class="header">
    <a href="login.php" class="back"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="30" height="30"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#e74c3c"><path d="M114.55469,22.87734c-1.48951,0.04438 -2.90324,0.6669 -3.94167,1.73568l-57.33333,57.33333c-2.23811,2.23904 -2.23811,5.86825 0,8.10729l57.33333,57.33333c1.43802,1.49778 3.5734,2.10113 5.5826,1.57735c2.0092,-0.52378 3.57826,-2.09284 4.10204,-4.10204c0.52378,-2.0092 -0.07957,-4.14458 -1.57735,-5.5826l-53.27969,-53.27969l53.27969,-53.27969c1.69569,-1.64828 2.20555,-4.16851 1.28389,-6.3463c-0.92166,-2.17779 -3.08576,-3.56638 -5.44951,-3.49667z"></path></g></g></svg></a>
    <div>Signup</div>
</div>
<div style="display:none;" id="myDiv" class="animate-bottom">
<br><br><br>
<center>
<div class="card">
    <b>Create an account </b><br><br>
    <form method="post">
    <input type="text" placeholder="Name" name="name" required><br><br>
    <input type="text" placeholder="Email" name="email" required><br><br>
    <input type="text" placeholder="Password" name="password" required><br><br>
    <input type="text" placeholder="Flatno/Block" name="flat" required><br><br>
    <input type="text" placeholder="No. of family members" name="members" required><br><br>
    <input type="text" placeholder="No. of Two wheelers" name="twh" required><br><br>
    <input type="text" placeholder="No. of Four wheelers" name="fwh" required><br><br>
    <input class="maint" type="submit" value="Signup" name="save">
    <br><br>
 </form>
</div>
<br>
<div class="footer"><a href="terms.php">Privacy policy | Terms and conditions </a></div><br>
Copyright 2020 Friends residency Keshiakole, Bankura (722155) W.B.
</center>




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