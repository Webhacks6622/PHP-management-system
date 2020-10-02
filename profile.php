<?php
session_start();
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
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #E74C3C;
  width: 120px;
  height: 120px;
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
	.footer {
		bottom: 0;
		left: 0;
		position: fixed;
		width: 100%;
		height: 50px;
		background: white;
		display: flex;
		justify-content: space-around;
	}



.account {
	    width: 100px;
	    height: 30px;
	    color: white;
	    outline: none;
	    border: none;
	    text-align: center;
	    background: #E74C3C;
	    line-height: 30px;
	    border-radius: 5px;
}



.card {
	    width: 100%;
	    height: 50px;
	    background: white;
	    border-radius: 5px;
	    line-height: 50px;
	    box-shadow: 0 2px 2px 0 grey;
	    justify-content: space-between;
	    display: flex;
	    align-items: center;

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

.logout {
	    line-height: 70px;
}

.menu {
	    line-height: 70px;

}

.container {
	     justify-content: space-around;
	     display: flex;
	     width: 100%;
	     height: auto;
}

.container .parent {
	    height: 100px;
	    width: 150px;
	    background: white;
	    box-shadow: 0 2px 2px 0 grey;
	    border-radius: 2px;
	    align-items: center;
	    text-align: center;
	    line-height: 100px;

}

.container2 {
	     justify-content: space-around;
	     display: flex;
	     width: 100%;
	     height: auto;
}

.container2 .parent1 {
	    height: 60px;
	    width: 50%;
	    box-shadow: 0 2px 2px 0 grey;
	    border-radius: 2px;
	    background: #E74C3C;
	    color: white;
	    align-items: center;
	    text-align: center;
	    line-height: 60px;

}

.container2 .parent2 {
	    height: 60px;
	    width: 50%;
	    background: white;
	    box-shadow: 0 2px 2px 0 grey;
	    border-radius: 2px;
	    color: #E74C3C;
	    align-items: center;
	    text-align: center;
	    line-height: 60px;

}

.maint {
	    height: 50px;
	    width: 90%;
	    border-radius: 2px;
	    color: #E74C3C;
	    outline: none;
	    border: none;
	    border: 2px solid #E74C3C;
	    background: white;
	    align-items: center;
	    text-align: center;
	    line-height: 50px;
}

</style>
	<title></title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Kufam&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#FF5500" />
<body bgcolor="#eeeeee" onload="myFunction()" style="margin:0;">
	<div id="loader"></div>
  <div class="header">
  	<div class="menu"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="40" height="40"
viewBox="0 0 226 226"
style=" fill:#000000;"><g transform="translate(33.9,33.9) scale(0.7,0.7)"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,226v-226h226v226z" fill="none" stroke="none"></path><g id="original-icon" fill="#e74c3c" stroke="none"><path d="M0,33.9v22.6h226v-22.6zM0,101.7v22.6h226v-22.6zM0,169.5v22.6h226v-22.6z"></path></g></g></g></svg></div>
  	<div class="title">Dashboard</div>
  	<div class="logout"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="35" height="35"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#e74c3c"><path d="M57.33333,14.33333c-7.91917,0 -14.33333,6.41417 -14.33333,14.33333v114.66667c0,7.91917 6.41417,14.33333 14.33333,14.33333h57.33333c7.91917,0 14.33333,-6.41417 14.33333,-14.33333v-35.83333h-14.33333v35.83333h-57.33333v-114.66667h57.33333v35.83333h14.33333v-35.83333c0,-7.91917 -6.41417,-14.33333 -14.33333,-14.33333zM143.33333,57.33333v21.5h-64.5v14.33333h64.5v21.5l28.66667,-28.66667z"></path></g></g></svg></div>
  </div>
<br><br><br>
<div style="display:none;" id="myDiv" class="animate-bottom">
<div class="card">
<div><?php echo $_SESSION['uname']; ?></div>	
<div class="account">Edit account</div>
</div>
<br>

<div class="container">
	<div class="parent">Flat no: <?php echo $_SESSION['flt']; ?></div>
	<div class="parent">Members: <?php echo  $_SESSION['mem']; ?></div>
	<div class="parent">2Wh: <?php echo $_SESSION['two'];?></div>
	<div class="parent">4wh: <?php echo  $_SESSION['four'];?></div>

</div>
<br>
<div class="container2">
<div class="parent1">Maintenance fees: </div>
<div class="parent2">Dues: </div>
</div>
<br>
<center>
<div class="maint">Pay maintenance</div></center>
<br><br>
<center><b>Maintenance record</b>
	<hr color="pink">
<br>
<div class="maint">January: Unpaid</div><br>
<div class="maint">February: Unpaid</div><br>
<div class="maint">March: Unpaid</div><br>
<div class="maint">April: Unpaid</div><br>
<div class="maint">May: Unpaid</div><br>
<div class="maint">June: Unpaid</div><br>
<div class="maint">July: Unpaid</div><br>
<div class="maint">August: Unpaid</div><br>
<div class="maint">September: Unpaid</div><br>
<div class="maint">October: Unpaid</div><br>
<div class="maint">November: Unpaid</div><br>
<div class="maint">December: Unpaid</div><br>




<div class="footer">
	<div><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#e74c3c"><path d="M14.43132,21.5l-0.014,0.014l-0.09798,114.65267h28.68066v28.66667l28.66667,-28.66667h86v-114.66667zM50.16667,57.33333h50.16667v15.10319l21.5,-15.10319v43l-21.5,-15.10319v15.10319h-50.16667z"></path></g></g></svg></div>
	<div><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="25" height="25"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#e74c3c"><path d="M86,17.2c-37.9948,0 -68.8,30.8052 -68.8,68.8c0,12.90693 3.62542,24.94039 9.80937,35.26224l-9.19349,33.53776l34.25443,-8.99192c10.01798,5.69561 21.5829,8.99192 33.92969,8.99192c37.9948,0 68.8,-30.8052 68.8,-68.8c0,-37.9948 -30.8052,-68.8 -68.8,-68.8zM62.45078,53.90677c1.118,0 2.26672,-0.00681 3.2586,0.04479c1.22693,0.02867 2.56235,0.11852 3.84088,2.94505c1.51933,3.35973 4.82756,11.78818 5.25183,12.64245c0.42427,0.85427 0.72491,1.86064 0.13437,2.97865c-0.56187,1.14666 -0.85408,1.84066 -1.67968,2.85546c-0.85427,0.98613 -1.79033,2.21092 -2.56433,2.95625c-0.85427,0.85427 -1.73639,1.79095 -0.75026,3.49375c0.98613,1.7028 4.41091,7.28501 9.47343,11.79141c6.50733,5.8136 11.99772,7.60016 13.70626,8.45442c1.70853,0.85427 2.69798,0.72115 3.68411,-0.42552c1.0148,-1.118 4.26192,-4.95423 5.40859,-6.66276c1.118,-1.70853 2.25929,-1.41291 3.80729,-0.85104c1.57093,0.56187 9.9485,4.6887 11.65703,5.54297c1.70853,0.85427 2.82859,1.2771 3.25859,1.97083c0.44147,0.71667 0.44191,4.12836 -0.97422,8.10729c-1.41613,3.9732 -8.37013,7.81543 -11.48906,8.08489c-3.1476,0.2924 -6.08513,1.41479 -20.4586,-4.24401c-17.33759,-6.8284 -28.27151,-24.58614 -29.12578,-25.73281c-0.85427,-1.118 -6.94271,-9.23246 -6.94271,-17.60313c0,-8.39933 4.40383,-12.51282 5.94609,-14.22135c1.57093,-1.70853 3.41089,-2.1276 4.55755,-2.1276z"></path></g></g></svg></div>
	<div><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="30" height="30"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#e74c3c"><path d="M103.1888,22.93333c-11.739,0 -23.4737,4.48203 -32.42917,13.4375l-11.38828,11.37708c-6.44427,6.44427 -14.10382,11.46496 -22.46302,14.88203l72.45052,72.45052c3.41707,-8.3592 8.43776,-16.01302 14.88203,-22.46302l11.38828,-11.38828c15.30065,-15.30065 17.48128,-38.70135 6.64036,-56.37031c4.1296,-1.84127 6.79163,-5.93737 6.79714,-10.45885c0,-6.33287 -5.1338,-11.46667 -11.46667,-11.46667c-4.52148,0.00551 -8.61759,2.66754 -10.45886,6.79714c-7.32933,-4.4991 -15.63183,-6.79714 -23.95234,-6.79714zM22.87734,63.01067c-2.33303,0.00061 -4.43307,1.41473 -5.31097,3.57628c-0.8779,2.16155 -0.3586,4.6395 1.31331,6.26669l31.09661,31.09661c-5.86446,1.9346 -9.83059,7.40777 -9.84297,13.58308c0,7.91608 6.41725,14.33333 14.33333,14.33333c6.17645,-0.00596 11.65448,-3.96783 13.59427,-9.83177l31.08542,31.08542c1.43802,1.49778 3.5734,2.10113 5.5826,1.57735c2.0092,-0.52378 3.57826,-2.09284 4.10204,-4.10204c0.52378,-2.0092 -0.07957,-4.14458 -1.57735,-5.5826l-80.26667,-80.26667c-1.07942,-1.10959 -2.56162,-1.73559 -4.10963,-1.73568z"></path></g></g></svg></div>
	<div><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#e74c3c"><path d="M28.66667,28.66667c-6.665,0 -12.23843,4.6075 -13.82943,10.77799l71.16276,44.5957l71.20475,-44.46972c-1.548,-6.24217 -7.15625,-10.90397 -13.87142,-10.90397zM14.33333,55.42969v73.57031c0,7.90483 6.4285,14.33333 14.33333,14.33333h114.66667c7.90483,0 14.33333,-6.4285 14.33333,-14.33333v-73.41634l-71.66667,44.74967z"></path></g></g></svg></div>


</div></center></div>
<br><br>
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