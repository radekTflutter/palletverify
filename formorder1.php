<?php
ob_start();
?>
<?php

require_once "connect.php";
	$con = mysqli_connect($host, $db_user, $db_password, $db_name);
	if (mysqli_connect_errno()) {
		die("Błąd połączenia z bazą");
	}
  
  ?>
  
<!DOCTYPE html>
<html>
<title>Weryfikacja palet</title>
<meta charset="UTF-8">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/css/font-awesome.min.css">
<link rel="stylesheet" href="css/css/font-awesome.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
<style>
body {font-family: Arial, Helvetica, sans-serif;}

body{
  font:1.7em normal Arial,sans-serif;
  color:#34495E;
  background: fixed;
}

h1{
  text-align:center;
  text-transform:uppercase;
  letter-spacing:-2px;
  font-size:2.5em;
  margin:20px 0;
}

#container{
 
  width:84%;
  margin-left:13.7%;
  margin-right:1.5%;
  margin-top: -0.5%; 
}



 

.table tr:hover{
background:#BDC3C7;
  color:#FFFFFF;
}

.fixed{
  top:0;
  position:fixed;
  width:auto;
 display:none;
 vertical-align: inherit;
}
 

.end{
  margin-top:800px;
}
.navbar {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  background-color: #2a2727;
  height: 60px;
  margin-bottom: 0px;
  border-radius: unset;
  z-index: 101;
  vertical-align: top;
  display: block;

}

.navbar a {
  float: left;
  padding: 5px;
  color: white;
  text-decoration: none;
  font-size: 15px;
  margin-top: 6px;
  margin: 10px;
  margin-left: 27px;
  font-family: 'Source Sans Pro',Verdana,sans-serif ;
  
}
.navbar2 a {
  float: left;
  padding: 11px 25px;
  color: white;
  text-decoration: none;
  font-size: 15px;
  margin-top: 20px;
  margin: 10px;
  margin-left: -25%;
  font-family: 'Source Sans Pro',Verdana,sans-serif ;
  
}
.row{
  margin: -5%;
}
.container{
  margin: 10%;
}
.navbar a:hover {
  background-color: #000;
}

.navbarlow {
  position: fixed;
  width: 100%;
  background-color: #0171B9;
  height: 60px;
  z-index: 90;
  display: block;
  margin-top: 21px;
}

.navbarlow a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 23px;
  margin-left: 7px;
  font-family: 'Source Sans Pro',Verdana,sans-serif ;
}

.img {
  float: right;
}

.active {

  border-radius: 5px;
  padding: 20px;
  weight: 10%;
}
.active a:hover{
  width: auto;
  height: auto;
}

/* medium width */
@media (max-width:1600px),
screen and (min-device-width:768px) and (max-device-width:1400px)
{
  #container{
  position: fixed;
  width:82%;
  margin-left:16%;
  margin-right:5%;
  margin-top:5%;
 
}

}
/* medium width */
@media (max-width:1400px),
screen and (min-device-width:768px) and (max-device-width:1400px)
{
  #container{
  position: fixed;
  width:75%;
  margin-left:20%;
  margin-right:5%;
  margin-top:5%;
 
}

}
/* medium width */
@media (max-width:1200px),
screen and (min-device-width:768px) and (max-device-width:1400px)
{
  #container{
  position: fixed;
  width:75%;
  margin-left:5%;
  margin-right:5%;
  margin-top:5%;
 
}
.controllerLeft {
  display: none;
}
}

/* medium width */
@media (max-width:1279px),
screen and (min-device-width:768px) and (max-device-width:1024px)
{
	div.capability-size
	{
		width:1px;
	}

}

/* small width */
@media (max-width:800px),
screen and (max-device-width:480px) and (orientation:portrait)
{
	div.capability-size
	{
		width:2px;
	}
.navbarlow{
  display: none;
}
}

.read_article{
	text-align:center;
}
.col-xs-5 {
    width: 34.66667%;
}
.controllerLeft {
    position: fixed;
    width: 225px;
    margin-top: 60px;
    overflow: hidden;
    background-color: #363636;
    height: 100%;
    overflow-y: hidden;
    padding: 0;
    margin: 0;
    color: #111;
    font-family: 'Source Sans Pro',Verdana,sans-serif;
    font-size: 90%;
    font-weight: 400;
    z-index:1;

}
.actionbottom {
    margin: -4px;
    padding: 12px;
    margin-top: 37%;
    margin-left: -5.5%;
    background-color: #363636;
    color: white;
    font-family: 'Source Sans Pro',Verdana,sans-serif;
    font-size: 95%;
    font-weight: 600;
}
.actionbottom2 {
  color: #fff;
    background-color: #2d2d2d;
 
    padding: 12px;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 8px;
    font-weight: 600;
    background-color: #363636;
 
    font-family: 'Source Sans Pro',Verdana,sans-serif;
    font-size: 100%;
    font-weight: 600; 
}
.configuration{
  
  color: #111;
    font-family: 'Source Sans Pro',Verdana,sans-serif;
    padding: 12px;
    font-weight: 600;
    size: 100%;
    margin-top: 30px;
}
.links{
  display: inline-block;
    vertical-align: top;
    margin: 0 88px;
    margin-top: -6px;
}
@media screen and (max-width: 1200px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 1200px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  
}



@media screen and (max-width: 1200px) {
  #container{
    width:100%;
    max-width: 1100px;
    min-width: 1000px; 
    padding: 20px;

    overflow: auto;
    max-width: 768px;

    padding: 20px;
   
  }

  .table{
    border-collapse: collapse;
    border-radius: 0.5em;
    width: 100%;

 
  }
}
@media screen and (max-width: 1100px) {
 

  .tablescroll{
 
  }
}
.fa-fw:hover{
   color: #0171b9 !important;
}
.navbar a:hover{
   color: #0171b9 !important;
}
.fa-fw:hover{
   color: #0171b9 !important;
}
.navbar a:hover{
   color: #0171b9 !important;
}
.modal-content{
  margin-top: 12%;
  width: 75%;
  margin-left: 17%;
}
.close{
  font-size: 3.5rem;
}
.modal-title{
  font-size: 1.85rem;
  font-weight: bold;
}
.form-control{
  font-size: 2rem;
}
.btn{
  font-size: 2.1rem;
}
.btn-primary{
  background-color: #0171B9;
  border-radius: 60px;
}
.btn-danger{
  background-color: red;
  border-radius: 60px;
}
.navbar {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  background-color: #2a2727;
  height: 60px;
  margin-bottom: 0px;
  border-radius: unset;
  z-index: 101;
  vertical-align: top;
  display: block;

}


.navbar a {
  float: left;
  padding: 10px;
  color: white;
  text-decoration: none;
  font-size: 15px;
  margin-top: 20px;
  margin: 10px;
  margin-left: 0%;
  font-family: 'Source Sans Pro',Verdana,sans-serif ;
  
}
.navbar2 a {
  float: left;
  padding: 10px;
  color: white;
  text-decoration: none;
  font-size: 15px;
  margin-top: 20px;
  margin: 10px;
  margin-left: 0%;
  font-family: 'Source Sans Pro',Verdana,sans-serif ;
  
}
.row{
  margin: -5%;
}
.container{
  margin: 10%;
}
.navbar a:hover {
  background-color: #000;
}

.navbarlow {
  position: fixed;
  width: 100%;
  background-color: #0171B9;
  height: 60px;
  z-index: 90;
  display: block;
  margin-top: 21px;
}

.navbarlow a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 23px;
  margin-left: 7px;
  font-family: 'Source Sans Pro',Verdana,sans-serif ;
}
.navbar22a{
  margin: -5px;
  margin-left: 5px;
}
[type="number"] {
   margin-bottom: 10px;
}
.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 5px 5px 0;
}

.form-inline button:hover {
  background-color: royalblue;
}
.firstoption {
  background-color: #00000052;
  border-radius: 5px;
  padding: 10px;
  weight: 5px;
}
.secondoption {
  background-color: unset;
  border-radius: 5px;
  padding: 10px;
  weight: 5px;
}
.thirdoption {
  background-color: unset;
  border-radius: 5px;
  padding: 10px;
  weight: 5px;
}
.fourthoption {
  background-color: unset;
  border-radius: 5px;
  padding: 10px;
  weight: 5px;
}
.logo {
  float:left;
  margin-top:-1.1%;
  margin-left: 1.5%;
}
body {
  font-family: 'lato', sans-serif;
}
.container {
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
}

h2 {
  font-size: 26px;
  margin: 20px 0;
  text-align: center;
  small {
    font-size: 0.5em;
  }
}

.responsive-table {
  li {
    border-radius: 3px;
    padding: 25px 30px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
  }
  .table-header {
    background-color: #95A5A6;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.03em;
  }
  .table-row {
    background-color: #ffffff;
    box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
  }
  .col-1 {
    flex-basis: 10%;
  }
  .col-2 {
    flex-basis: 40%;
  }
  .col-3 {
    flex-basis: 25%;
  }
  .col-4 {
    flex-basis: 25%;
  }
  
  @media all and (max-width: 767px) {
    .table-header {
      display: none;
    }
    .table-row{
      
    }
    li {
      display: block;
    }
    .col {
      
      flex-basis: 100%;
      
    }
    .col {
      display: flex;
      padding: 10px 0;
      &:before {
        color: #6C7A89;
        padding-right: 10px;
        content: attr(data-label);
        flex-basis: 50%;
        text-align: right;
      }
    }
  }
}

</style>
<style>
table {
border-collapse: collapse;
width: 88%;
margin-left: 11.96%;
margin-top: 4.26%;
color: #38444c;
font-family: monospace;
font-size: 15px;
text-align: middle;

}
th {
background-color: #566670ba;
color: white;
text-align: -webkit-center;
}
tr:nth-child(even) {background-color: #f2f2f2}
th,td{
  text-align:center;
  padding:5px 5px;
  border-radius: 1px;
  overflow: hidden;
  font-size: 92%;
  align-items: center;
  vertical-align: unset;
  border-top: double;
 
}

 tr:nth-child(even){
  background:#ECF0F1;
}
thead{

  width: 88%;
}
tbody{
  text-transform: uppercase;
  font-weight: bold;
  border-bottom: double;
  
}
.thead{
  border-radius: 5px;
}
tr{
  font-stretch: normal;
  
}
.row {
    margin-top: 5%;
}
.row {
    margin-left: -15px;
    margin-right: -15px;
}
.w3-row-padding, .w3-row-padding>.w3-half3, .w3-row-padding>.w3-third, .w3-row-padding>.w3-twothird, .w3-row-padding>.w3-threequarter, .w3-row-padding>.w3-quarter, .w3-row-padding>.w3-col {
    padding: 0px;
    margin-top: 6%;
}
#center3 {
    margin-left: 20%;
    margin-right: 20%;
}
@media (min-width: 801px){
.w3-col.m6, .w3-half {
    width: 57.99999%;
}
}
.w3-col, .w3-half, .w3-third, .w3-twothird, .w3-threequarter, .w3-quarter {
    padding-right: 1%;
    padding-left: 1%;
    padding-bottom: 2%;
    float: left;
    width: 200%;
}

.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
    position: relative;
    min-height: 1px;
    padding-left: 15px;
    padding-right: 15px;
}

.col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
}
.col-sm-8 {
    width: 66.66667%;
    margin-left: 4%;
}
#center3 {
    margin-left: 20%;
    margin-right: 20%;
}

    .w3-col.m6, .w3-half {
    width: 79.99999%;
}
label {
  display: inline-block;
    max-width: 100%;
    margin-bottom: 0px;
    margin-top: 0%;
    font-weight: bold;
    font-size: 100%;
    color: #444;
}

input:not([type=submit]),
    input:not([type=reset]),
    input:not([type=button]),
    input:not([type=radio]),
    input:not([type=checkbox]),
    input:not([type=select]),
    input:not([type=text]),
textarea {
        
        display: block;
        width: 100%;
        max-width: 80%;
        height: $h;
        border-left-color: currentColor;
        border-right-color: currentcolor;
        border-radius: 22px;
        padding: 0 0.6em;
        border-block-color: unset;

     
        
      
        
    }
    .button:hover {
  background-color: #b8bfc7; 
  color: white;
}    .button:active {
  background-color: grey; 
  color: white;
}
.buttonorder:hover {
  background-color: red; 
  color: white;
}
    .radioDiv{
		margin-top: -20px;
    font-size: 100%;
	}
 
        .blink {
            animation: blinker 1.5s linear infinite;
            color: red;
            font-family: sans-serif;
        }
        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }
 table{
  background-color: transparent;
  border-collapse: collapse;
    width: 80%;
    margin-left: 0%;
    margin-top: 2.26%;
    color: transparent;
    font-family: monospace;
    font-size: 15px;

 }
 th{
  background-color: transparent;
    color: black;
 }
 button{
  font-weight: bold;
 }
 .flex-parent-element {
  display: flex;
  width: 92%;
}

.flex-child-element {
  flex: 1;
  margin: 1px;
}

.flex-child-element:first-child {
  margin-right: 2px;
}
</style>
</head>
<body>
<div class="navbar" id="myTopnav">
  <div class="logo">
  <a style="float:left; width: auto; height: 65px;" href="https://laserpromocja.canpack.ad/barcode1/main1.php"><img src="logo2.png" width="60" height="50"></a>
</div>
   <div class="navbar2 a">
    <span class="links">
  <a style="font-weight: 600; color:#ccc;" href="https://laserpromocja.canpack.ad/barcode1/main1.php" ><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-home"></i> Strona główna</a>
  <a class="active" style="font-weight: 600;" style="color:#ccc;"href="https://laserpromocja.canpack.ad/barcode1/forms1.php"><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-edit"></i> Formularze</a>
  <a style="font-weight: 600; color:#ccc;" href="https://laserpromocja.canpack.ad/barcode1/search1.php"><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-search"></i> Wyszukiwanie</a>
  <a style="font-weight: 600; color:#ccc;" href="https://laserpromocja.canpack.ad/barcode1/raports1.php"><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-archive"></i> Raporty</a>
  <a style="font-weight: 600; color:#ccc;" href="https://laserpromocja.canpack.ad/barcode1/message1.php"><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-envelope"></i> Wiadomości</a>
</span>
</div>
</div>

<div class="navbarlow" >

<div>
  <a style="font-weight: 600;color:white;"><i style='color: #aba9a9;' class="fa fa-fw fa-edit"></i> Formularze</a>

</div>

</div>

<h2></h2>

<div class="controllerLeft">
  <div class="actionbottom">
    <div class="configurtion">
     <div class="leftpanel">
      <div class="firstoption">
        <a style="font-weight: 600; color:white;"><i></i> Zatwierdzane zlecenie </a>
      </div>
      <div class="secondoption">
        <a style="font-weight: 600; color:#ccc; " href="https://laserpromocja.canpack.ad/barcode1/forms1.php"><i></i>  Do zatwierdzenia </a>
      </div>
      <div class="thirdoption">
       <a style="font-weight: 600; color:#ccc;" href="https://laserpromocja.canpack.ad/barcode1/formsedit1.php"><i></i>  Zamknięte zlecenia </a>
      </div>
      <div class="fourthoption">
       <a style="font-weight: 600; color:#ccc;" href="https://laserpromocja.canpack.ad/barcode1/formsarch1.php"><i></i>  Archiwalne zlecenia </a>
      </div>
    </div>
  </div>
  </div>
  </div>
</div>
</div>

</div>
<h2></h2>
<?php
$date = date("d-m-Y H:i:s");
$dateraport = date("Y-m-d H:i:s");
require_once "connect.php";
$connect = mysqli_connect($host, $db_user, $db_password, $db_name) or die("Błąd połączenia!");
mysqli_set_charset($connect, "utf8");
$idform = $_GET['id'];

if (isset($_POST['palletestatus1'])) {

  $sql = "UPDATE form SET palletenumbers = palletenumbers+1, palletebroken = palletebroken+1, statusnewcode=1, orderdate = '$date', orderdateraport = '$dateraport' WHERE id='" . $_POST["idform"] . "' AND statuscomplete=0";
                  $results = mysqli_query($connect, $sql);
                  header("Refresh:0");
  echo 'ZAPISANE!';
}
if (isset($_POST['palletestatus11'])) {

  $sql = "UPDATE form SET palletenumbers = palletenumbers-1, palletebroken = palletebroken-1, statusnewcode=1, orderdate = '$date', orderdateraport = '$dateraport' WHERE id='" . $_POST["idform"] . "' AND statuscomplete=0 AND palletebroken >= 1";
                  $results = mysqli_query($connect, $sql);
                  header("Refresh:0");
  echo 'ZAPISANE!';
}

if (isset($_POST['palletestatus2'])) {

  $sql = "UPDATE form SET palletenumbers = palletenumbers+1, palletescrap = palletescrap+1, statusnewcode=1, orderdate = '$date', orderdateraport = '$dateraport' WHERE id='" . $_POST["idform"] . "' AND statuscomplete=0";
                  $results = mysqli_query($connect, $sql);
                  header("Refresh:0");
  echo 'ZAPISANE!';
}
if (isset($_POST['palletestatus22'])) {

  $sql = "UPDATE form SET palletenumbers = palletenumbers-1, palletescrap = palletescrap-1, statusnewcode=1, orderdate = '$date', orderdateraport = '$dateraport' WHERE id='" . $_POST["idform"] . "' AND statuscomplete=0 AND palletescrap >= 1";
                  $results = mysqli_query($connect, $sql);
                  header("Refresh:0");
  echo 'ZAPISANE!';
}

if (isset($_POST['palletestatus3'])) {

  $sql = "UPDATE form SET palletenumbers = palletenumbers+1, palletesorted = palletesorted+1, statusnewcode=1, orderdate = '$date', orderdateraport = '$dateraport' WHERE id='" . $_POST["idform"] . "' AND statuscomplete=0";
                  $results = mysqli_query($connect, $sql);
                  header("Refresh:0");
  echo 'ZAPISANE!';
}
if (isset($_POST['palletestatus33'])) {

  $sql = "UPDATE form SET palletenumbers = palletenumbers-1, palletesorted = palletesorted-1, statusnewcode=1, orderdate = '$date', orderdateraport = '$dateraport' WHERE id='" . $_POST["idform"] . "' AND statuscomplete=0 AND palletesorted >= 1";
                  $results = mysqli_query($connect, $sql);
                  header("Refresh:0");
  echo 'ZAPISANE!';
}

if (isset($_POST['palletestatus4'])) {

  $sql = "UPDATE form SET palletenumbers = palletenumbers+1, palletefullscrap = palletefullscrap+1, statusnewcode=1, orderdate = '$date', orderdateraport = '$dateraport' WHERE id='" . $_POST["idform"] . "' AND statuscomplete=0";
                  $results = mysqli_query($connect, $sql);
                  header("Refresh:0");
  echo 'ZAPISANE!';
}
if (isset($_POST['palletestatus44'])) {

  $sql = "UPDATE form SET palletenumbers = palletenumbers-1, palletefullscrap = palletefullscrap-1, statusnewcode=1, orderdate = '$date', orderdateraport = '$dateraport' WHERE id='" . $_POST["idform"] . "' AND statuscomplete=0 AND palletefullscrap >= 1";
                  $results = mysqli_query($connect, $sql);
                  header("Refresh:0");
  echo 'ZAPISANE!';
}

if (isset($_POST['palletestatus5'])) {

  $sql = "UPDATE form SET palletenumbers = palletenumbers+1, palleterespray = palleterespray+1, statusnewcode=1, orderdate = '$date', orderdateraport = '$dateraport' WHERE id='" . $_POST["idform"] . "' AND statuscomplete=0";
                  $results = mysqli_query($connect, $sql);
                  header("Refresh:0");
  echo 'ZAPISANE!';
}
if (isset($_POST['palletestatus55'])) {

  $sql = "UPDATE form SET palletenumbers = palletenumbers-1, palleterespray = palleterespray-1, statusnewcode=1, orderdate = '$date', orderdateraport = '$dateraport' WHERE id='" . $_POST["idform"] . "' AND statuscomplete=0 AND palleterespray >= 1";
                  $results = mysqli_query($connect, $sql);
                  header("Refresh:0");
  echo 'ZAPISANE!';
}

if (isset($_POST['palletestatus6']) && $_POST['palleteothercomment'] == true) {
$palleteothercomment = $_POST['palleteothercomment'];
  $sql = "UPDATE form SET palletenumbers = palletenumbers+1, palleteother = palleteother+1, statusnewcode=1, orderdate = '$date', orderdateraport = '$dateraport', palleteothercomment = '$palleteothercomment' WHERE id='" . $_POST["idform"] . "' AND statuscomplete=0";
                  $results = mysqli_query($connect, $sql);
                  header("Refresh:0");
  echo 'ZAPISANE!';
}
if (isset($_POST['palletestatus66'])) {
  $palleteothercomment = $_POST['palleteothercomment'];
    $sql = "UPDATE form SET palletenumbers = palletenumbers-1, palleteother = palleteother-1, statusnewcode=1, orderdate = '$date', orderdateraport = '$dateraport' WHERE id='" . $_POST["idform"] . "' AND statuscomplete=0 AND palleteother >= 1";
                    $results = mysqli_query($connect, $sql);
                    header("Refresh:0");
    echo 'ZAPISANE!';
  }


  

$idform = $_GET['id'];
$date = date("d-m-Y H:i:s");  
$dateraport = date("Y-m-d H:i:s");
 
require_once "connect.php";
$conn = @mysqli_connect($host, $db_user, $db_password, $db_name);
$results = mysqli_query($conn, "SELECT * FROM form WHERE id='$idform' AND statuscomplete=0");
$row2 = mysqli_fetch_array($results);
$palletenumbers = $row2['palletebroken'] + $row2['palletescrap'] + $row2['palletesorted'] + $row2['palletefullscrap'] + $row2['palleterespray'] + $row2['palleteother'];
$code = $row2['code'];


if (isset($_POST['add'])) {
 


  $log = 'LOGFILE - ZAMYKANIE ZLECENIA:' . "\r\n" .
    'Numer formularza:' . ' ' . $_POST['idform'] . ',' . "\r\n" .
    'Aktualna liczba palet w bazie danych:' . ' ' . $palletenumbers . ',' . "\r\n" .
    'Paleta Przesypana/Uszkodzona:' . ' ' . $row2['palletebroken'] . ',' . "\r\n" .
    'Końcówka do złomu - dodawanie:' . ' ' . $row2['palletescrap'] . ',' . "\r\n" .
    'Paleta sortowana na bieżąco:' . ' ' . $row2['palletesorted'] . ',' . "\r\n" .
    'Pełna paleta do złomu:' . ' ' . $row2['palletefullscrap'] . ',' . "\r\n" .
    'Paleta sortowana/respray:' . ' ' . $row2['palleterespray'] . ',' . "\r\n" .
    'Paleta inna:' . ' ' . $row2['palleteother'] . ',' . "\r\n" .
    'Paleta inna - opis:' . ' ' . $_POST['palleteothercomment'] . ',' . "\r\n" .
    'Uwagi:' . ' ' . $_POST['comments'] . ',' . "\r\n" .
    'Data weryfikowania zlecenia:' . ' ' . $date . ',' . "\r\n" .
    'Data weryfikowania zlecenia:' . ' ' . $dateraport . ',' . "\r\n" .
    'IP adres:' . ' ' . $_SERVER['REMOTE_ADDR'] . ',' . "\r\n";
  $file = fopen("uploads/logfile/order/" . $code ."_order_close_" . $date . ".txt", "a+");
  fprintf( $file, "\xEF\xBB\xBF");
  fwrite($file, $log);
  fclose($file);
 
}

if (isset($_POST['add'])) {
  $sql = "UPDATE form SET comments ='" . $_POST["comments"] . "', statusnewcode=1, statuscomplete=1, orderclosedate = '$date' WHERE id='" . $_POST["idform"] . "' AND statuscomplete=0";
  $results = mysqli_query($connect, $sql);
  header("Location: forms1.php");
  echo 'ZAPISANE!';
}



if (isset($_POST['palletestatus6']) && $_POST['palleteothercomment'] == false) {
  alert("Podaj opis dla: Paleta inna");
}
function alert($msg) {
  echo "<script type='text/javascript'>alert('$msg');</script>";
}


?>

<?php

$idform = $_GET['id'];
require_once "connect.php";
$conn = @mysqli_connect($host, $db_user, $db_password, $db_name);
$results = mysqli_query($conn, "SELECT * FROM form WHERE id='$idform' AND statusorderdelete=0 AND statuscomplete=0");
$row = mysqli_fetch_array($results);

?>
        <?php
$query = "SELECT * FROM form WHERE statusorderdelete=0 AND statuscomplete=0 AND id='$idform' ORDER BY id DESC LIMIT 10";
$prepared = $conn->prepare($query);
$prepared->execute();
$result = $prepared->get_result();
?>
      <?php
if ($result->num_rows > 0) {
  $sn=1;
  while($data = $result->fetch_assoc()) {
    $palletenumbers = $data['palletebroken'] + $data['palletescrap'] + $data['palletesorted'] + $data['palletefullscrap'] + $data['palleterespray'] + $data['palleteother'];
    $code = $data['code'];
    ?>
   <?php
   
   $idform = $_GET['id'];
   $date = date("d-m-Y H:i:s");  
   $dateraport = date("Y-m-d H:i:s");
    

   if (isset($_POST['palletestatus1'])) {
     $log = 'LOGFILE - WERYFIKOWANIE PALET:' . "\r\n" .
       'Numer formularza:' . ' ' . $_POST['idform'] . ',' . "\r\n" .
       'Aktualna liczba palet w bazie danych:' . ' ' . $palletenumbers . ',' . "\r\n" .
       'Paleta Przesypana/Uszkodzona - dodawanie:' . " 1" . ',' . "\r\n" .
       'Data weryfikowania zlecenia:' . ' ' . $date . ',' . "\r\n" .
       'Data weryfikowania zlecenia:' . ' ' . $dateraport . ',' . "\r\n" .
       'IP adres:' . ' ' . $_SERVER['REMOTE_ADDR'] . ',' . "\r\n";
     $file = fopen("uploads/logfile/order/" . $code ."_order_palletebroken_" . $date . ".txt", "a+");
     fprintf( $file, "\xEF\xBB\xBF");
     fwrite($file, $log);
     fclose($file);
   }
   
   if (isset($_POST['palletestatus2'])) {
     $log = 'LOGFILE - WERYFIKOWANIE PALET:' . "\r\n" .
       'Numer formularza:' . ' ' . $_POST['idform'] . ',' . "\r\n" .
       'Aktualna liczba palet w bazie danych:' . ' ' . $palletenumbers . ',' . "\r\n" .
       'Końcówka do złomu - dodawanie:' . " 1" . ',' . "\r\n" .
       'Data weryfikowania zlecenia:' . ' ' . $date . ',' . "\r\n" .
       'Data weryfikowania zlecenia:' . ' ' . $dateraport . ',' . "\r\n" .
       'IP adres:' . ' ' . $_SERVER['REMOTE_ADDR'] . ',' . "\r\n";
     $file = fopen("uploads/logfile/order/" . $code ."_order_palletescrap_" . $date . ".txt", "a+");
     fprintf( $file, "\xEF\xBB\xBF");
     fwrite($file, $log);
     fclose($file);
   }
   
   if (isset($_POST['palletestatus3'])) {
     $log = 'LOGFILE - WERYFIKOWANIE PALET:' . "\r\n" .
       'Numer formularza:' . ' ' . $_POST['idform'] . ',' . "\r\n" .
       'Aktualna liczba palet w bazie danych:' . ' ' . $palletenumbers . ',' . "\r\n" .
       'Paleta sortowana na bieżąco - dodawanie:' . " 1" . ',' . "\r\n" .
       'Data weryfikowania zlecenia:' . ' ' . $date . ',' . "\r\n" .
       'Data weryfikowania zlecenia:' . ' ' . $dateraport . ',' . "\r\n" .
       'IP adres:' . ' ' . $_SERVER['REMOTE_ADDR'] . ',' . "\r\n";
     $file = fopen("uploads/logfile/order/" . $code ."_order_palletesorted_" . $date . ".txt", "a+");
     fprintf( $file, "\xEF\xBB\xBF");
     fwrite($file, $log);
     fclose($file);
   }
   
   if (isset($_POST['palletestatus4'])) {
     $log = 'LOGFILE - WERYFIKOWANIE PALET:' . "\r\n" .
       'Numer formularza:' . ' ' . $_POST['idform'] . ',' . "\r\n" .
       'Aktualna liczba palet w bazie danych:' . ' ' . $palletenumbers . ',' . "\r\n" .
       'Pełna paleta do złomu - dodawanie:' . " 1" . ',' . "\r\n" .
       'Data weryfikowania zlecenia:' . ' ' . $date . ',' . "\r\n" .
       'Data weryfikowania zlecenia:' . ' ' . $dateraport . ',' . "\r\n" .
       'IP adres:' . ' ' . $_SERVER['REMOTE_ADDR'] . ',' . "\r\n";
     $file = fopen("uploads/logfile/order/" . $code ."_order_palletefullscrap_" . $date . ".txt", "a+");
     fprintf( $file, "\xEF\xBB\xBF");
     fwrite($file, $log);
     fclose($file);
   }
   
   if (isset($_POST['palletestatus5'])) {
     $log = 'LOGFILE - WERYFIKOWANIE PALET:' . "\r\n" .
       'Numer formularza:' . ' ' . $_POST['idform'] . ',' . "\r\n" .
       'Aktualna liczba palet w bazie danych:' . ' ' . $palletenumbers . ',' . "\r\n" .
       'Paleta sortowana/respray - dodawanie:' . " 1" . ',' . "\r\n" .
       'Data weryfikowania zlecenia:' . ' ' . $date . ',' . "\r\n" .
       'Data weryfikowania zlecenia:' . ' ' . $dateraport . ',' . "\r\n" .
       'IP adres:' . ' ' . $_SERVER['REMOTE_ADDR'] . ',' . "\r\n";
     $file = fopen("uploads/logfile/order/" . $code ."_order_palleterespray_" . $date . ".txt", "a+");
     fprintf( $file, "\xEF\xBB\xBF");
     fwrite($file, $log);
     fclose($file);
   }
   
   if (isset($_POST['palletestatus6'])) {
     $log = 'LOGFILE - WERYFIKOWANIE PALET:' . "\r\n" .
       'Numer formularza:' . ' ' . $_POST['idform'] . ',' . "\r\n" .
       'Aktualna liczba palet w bazie danych:' . ' ' . $palletenumbers . ',' . "\r\n" .
       'Paleta inna - dodawanie:' . " 1" . ',' . "\r\n" .
       'Paleta inna - opis:' . ' ' . $_POST['palleteothercomment'] . ',' . "\r\n" .
       'Data weryfikowania zlecenia:' . ' ' . $date . ',' . "\r\n" .
       'Data weryfikowania zlecenia:' . ' ' . $dateraport . ',' . "\r\n" .
       'IP adres:' . ' ' . $_SERVER['REMOTE_ADDR'] . ',' . "\r\n";
     $file = fopen("uploads/logfile/order/" . $code ."_order_palleteother_" . $date . ".txt", "a+");
     fprintf( $file, "\xEF\xBB\xBF");
     fwrite($file, $log);
     fclose($file);
   }
   
   if (isset($_POST['palletestatus11'])) {
     $log = 'LOGFILE - WERYFIKOWANIE PALET:' . "\r\n" .
       'Numer formularza:' . ' ' . $_POST['idform'] . ',' . "\r\n" .
       'Aktualna liczba palet w bazie danych:' . ' ' . $palletenumbers . ',' . "\r\n" .
       'Paleta Przesypana/Uszkodzona - odejmowanie:' . " -1" . ',' . "\r\n" .
       'Data weryfikowania zlecenia:' . ' ' . $date . ',' . "\r\n" .
       'Data weryfikowania zlecenia:' . ' ' . $dateraport . ',' . "\r\n" .
       'IP adres:' . ' ' . $_SERVER['REMOTE_ADDR'] . ',' . "\r\n";
     $file = fopen("uploads/logfile/order/" . $code ."_order_palletebroken_" . $date . ".txt", "a+");
     fprintf( $file, "\xEF\xBB\xBF");
     fwrite($file, $log);
     fclose($file);
   }

   if (isset($_POST['palletestatus22'])) {
    $log = 'LOGFILE - WERYFIKOWANIE PALET:' . "\r\n" .
      'Numer formularza:' . ' ' . $_POST['idform'] . ',' . "\r\n" .
      'Aktualna liczba palet w bazie danych:' . ' ' . $palletenumbers . ',' . "\r\n" .
      'Końcówka do złomu - odejmowanie:' . " -1" . ',' . "\r\n" .
      'Data weryfikowania zlecenia:' . ' ' . $date . ',' . "\r\n" .
      'Data weryfikowania zlecenia:' . ' ' . $dateraport . ',' . "\r\n" .
      'IP adres:' . ' ' . $_SERVER['REMOTE_ADDR'] . ',' . "\r\n";
    $file = fopen("uploads/logfile/order/" . $code ."_order_palletescrap_" . $date . ".txt", "a+");
    fprintf( $file, "\xEF\xBB\xBF");
    fwrite($file, $log);
    fclose($file);
  }
  
  if (isset($_POST['palletestatus33'])) {
    $log = 'LOGFILE - WERYFIKOWANIE PALET:' . "\r\n" .
      'Numer formularza:' . ' ' . $_POST['idform'] . ',' . "\r\n" .
      'Aktualna liczba palet w bazie danych:' . ' ' . $palletenumbers . ',' . "\r\n" .
      'Paleta sortowana na bieżąco - odejmowanie:' . " -1" . ',' . "\r\n" .
      'Data weryfikowania zlecenia:' . ' ' . $date . ',' . "\r\n" .
      'Data weryfikowania zlecenia:' . ' ' . $dateraport . ',' . "\r\n" .
      'IP adres:' . ' ' . $_SERVER['REMOTE_ADDR'] . ',' . "\r\n";
    $file = fopen("uploads/logfile/order/" . $code ."_order_palletesorted_" . $date . ".txt", "a+");
    fprintf( $file, "\xEF\xBB\xBF");
    fwrite($file, $log);
    fclose($file);
  }
  
  if (isset($_POST['palletestatus44'])) {
    $log = 'LOGFILE - WERYFIKOWANIE PALET:' . "\r\n" .
      'Numer formularza:' . ' ' . $_POST['idform'] . ',' . "\r\n" .
      'Aktualna liczba palet w bazie danych:' . ' ' . $palletenumbers . ',' . "\r\n" .
      'Pełna paleta do złomu - odejmowanie:' . " -1" . ',' . "\r\n" .
      'Data weryfikowania zlecenia:' . ' ' . $date . ',' . "\r\n" .
      'Data weryfikowania zlecenia:' . ' ' . $dateraport . ',' . "\r\n" .
      'IP adres:' . ' ' . $_SERVER['REMOTE_ADDR'] . ',' . "\r\n";
    $file = fopen("uploads/logfile/order/" . $code ."_order_palletefullscrap_" . $date . ".txt", "a+");
    fprintf( $file, "\xEF\xBB\xBF");
    fwrite($file, $log);
    fclose($file);
  }
  
  if (isset($_POST['palletestatus55'])) {
    $log = 'LOGFILE - WERYFIKOWANIE PALET:' . "\r\n" .
      'Numer formularza:' . ' ' . $_POST['idform'] . ',' . "\r\n" .
      'Aktualna liczba palet w bazie danych:' . ' ' . $palletenumbers . ',' . "\r\n" .
      'Paleta sortowana/respray - odejmowanie:' . " -1" . ',' . "\r\n" .
      'Data weryfikowania zlecenia:' . ' ' . $date . ',' . "\r\n" .
      'Data weryfikowania zlecenia:' . ' ' . $dateraport . ',' . "\r\n" .
      'IP adres:' . ' ' . $_SERVER['REMOTE_ADDR'] . ',' . "\r\n";
    $file = fopen("uploads/logfile/order/" . $code ."_order_palleterespray_" . $date . ".txt", "a+");
    fprintf( $file, "\xEF\xBB\xBF");
    fwrite($file, $log);
    fclose($file);
  }
  
  if (isset($_POST['palletestatus66'])) {
    $log = 'LOGFILE - WERYFIKOWANIE PALET:' . "\r\n" .
      'Numer formularza:' . ' ' . $_POST['idform'] . ',' . "\r\n" .
      'Aktualna liczba palet w bazie danych:' . ' ' . $palletenumbers . ',' . "\r\n" .
      'Paleta inna - odejmowanie:' . " -1" . ',' . "\r\n" .
      'Paleta inna - opis:' . ' ' . $_POST['palleteothercomment'] . ',' . "\r\n" .
      'Data weryfikowania zlecenia:' . ' ' . $date . ',' . "\r\n" .
      'Data weryfikowania zlecenia:' . ' ' . $dateraport . ',' . "\r\n" .
      'IP adres:' . ' ' . $_SERVER['REMOTE_ADDR'] . ',' . "\r\n";
    $file = fopen("uploads/logfile/order/" . $code ."_order_palleteother_" . $date . ".txt", "a+");
    fprintf( $file, "\xEF\xBB\xBF");
    fwrite($file, $log);
    fclose($file);
  }

   ?>
  <div class="col-9">
    <div class="w3-row-padding">
    <div class="row">
 <div class="col-sm-8">
      <div id="center3">
        <div class="w3-half">
          
          <form action="" style="padding:5px 0px;" method="post">  
           <input type=hidden name="idform" value="<?php echo $idform; ?>">
      
           <div class="flex-parent-element">
 
              <div class="flex-child-element">
                <label style='font-size:110%;color: #444;'>NR FORMULARZA:</label>
                <br><input type="text" id="id" value="<?php echo $row['id']; ?>" style="text-align:center;margin-left:4%;max-width:75%;color:black;font-weight:bold" readonly></textarea>
          
              </div>
              
              <div class="flex-child-element">
                <label style='font-size:110%;color: #444;margin-left:6%;'>NR ZLECENIA:</label>
                <br><input type="text" id="code" value="<?php echo $row['code']; ?>" style="text-align:center;margin-left:2%;max-width:75%;color:black;font-weight:bold" readonly></textarea>
              </div>
              </div>

              <div class="mycontainer">	
              <div class="w3-section">
              <div class="radioDiv">
              <br><br>
                <label style='font-size:120%;color: #444;'>RODZAJ WERYFIKOWANEJ PALETY:</label>
              
                </div>

                <label style="margin-top:4px;">Paleta Przesypana/Uszkodzona:  <?php echo $data['palletebroken']; ?> </label>
                <div class="flex-parent-element">
                <div class="flex-child-element">
                <input type="submit" value="Odejmij" style="height:40px; width:80%; color: #dc3545; font-size:120%;" id="pallete1" action="" class="button" name="palletestatus11">
                </div>
                <div class="flex-child-element">
                <input type="submit" value="Dodaj" style="height:40px; width:80%; color: #0171B9; font-size:120%;" id="pallete1" action="" class="button" name="palletestatus1">
                </div>
              </div>
              <br>          
                <label>Końcówka do złomu:  <?php echo $data['palletescrap']; ?></label>
                <div class="flex-parent-element">
                <div class="flex-child-element">
                <input type="submit" value="Odejmij" style="height:40px; width:80%; color: #dc3545; font-size:120%;" id="pallete2" action="" class="button" name="palletestatus22">
                </div>
                <div class="flex-child-element">
                <input type="submit" value="Dodaj" style="height:40px; width:80%; color: #0171B9; font-size:120%;" id="pallete2" action="" class="button" name="palletestatus2"> 
                </div>
              </div>
              <br>             
                <label>Paleta sortowana na bieżąco:  <?php echo $data['palletesorted']; ?></label><br>
                <div class="flex-parent-element">
                <div class="flex-child-element">
                <input type="submit" value="Odejmij" style="height:40px; width:80%; color: #dc3545; font-size:120%;" id="pallete3" action="" class="button" name="palletestatus33">
                </div>
                <div class="flex-child-element">
                <input type="submit" value="Dodaj" style="height:40px; width:80%; color: #0171B9; font-size:120%;" id="pallete3" action="" class="button" name="palletestatus3">
                </div>
              </div>
              <br>            
                <label>Pełna paleta do złomu:  <?php echo $data['palletefullscrap']; ?></label><br>
                <div class="flex-parent-element">
                <div class="flex-child-element">
                <input type="submit" value="Odejmij" style="height:40px; width:80%; color: #dc3545; font-size:120%;" id="pallete4" action="" class="button" name="palletestatus44">
                </div>
                <div class="flex-child-element">
                <input type="submit" value="Dodaj" style="height:40px; width:80%; color: #0171B9; font-size:120%;" id="pallete4" action="" class="button" name="palletestatus4">
                </div>
              </div>
              <br>    
                <label>Paleta sortowana/respray:  <?php echo $data['palleterespray']; ?></label><br>
                <div class="flex-parent-element">
                <div class="flex-child-element">
                <input type="submit" value="Odejmij" style="height:40px; width:80%; color: #dc3545; font-size:120%;" id="pallete5" action="" class="button" name="palletestatus55">
                </div>
                <div class="flex-child-element">
                <input type="submit" value="Dodaj" style="height:40px; width:80%; color: #0171B9; font-size:120%;" id="pallete5" action="" class="button" name="palletestatus5">
                </div>
              </div>
              <br>    

                <label>Paleta inna - opis:</label>
                <br><textarea type="text" name="palleteothercomment" id="paleteothercomment" style="color:black;font-weight:bold;border-radius: 5px;" cols="20" rows="1" ><?php echo $row['palleteothercomment']; ?></textarea>
                
                <label style="margin-top: 2%;">Paleta inna:  <?php echo $data['palleteother']; ?></label><br>
                <div class="flex-parent-element">
                <div class="flex-child-element">
                <input type="submit" value="Odejmij" style="height:40px; width:80%; color: #dc3545; font-size:120%;" id="pallete6" action="" class="button" name="palletestatus66">
                </div>
                <div class="flex-child-element">   
                <input type="submit" value="Dodaj" style="height:40px; width:80%; color: #0171B9; font-size:120%;" id="pallete6" action="" class="button" name="palletestatus6">
                </div>
              </div>
               
                <table class="normal">      
  <thead>
    <tr>
    <th>Suma zweryfikowanych palet:  <?php echo $palletenumbers; ?></th>
      </tr>
  </thead>
  <tbody>

              </div>
              <br>
              <div class="w3-section">
                <label style='font-size:120%;color: #444;'>UWAGI:</label>
                <br><textarea type="text" name="comments" id="comments" style="color:black;font-weight:bold;border-radius: 5px;;" cols="20" rows="2" ></textarea>
              </div>
              <br>
              <input type="submit" name="add" id="order" style="height:40px; width:80%; color: #444; font-size:120%;" value="ZAMKNIJ ZLECENIE" onclick="return Defuse();" action="" class="buttonorder"></textarea>
              <?php
	 
	echo "<script type='text/javascript'>
  function Defuse() {
      return confirm('CZY NAPEWNO CHCESZ ZAMKNĄĆ ZLECENIE?');
  }
  </script>\n";
  
 
  ?>
            </form>
      


<div id="container">

    <tr> 
  


 <tr>
 <?php
  $sn++;}
} 
else  {
  header("Location:formsedit1.php");
  exit();
}
  ?>
 
 </tr>
  </tbody>
</table>
                <div class="w3-row">
                </div>
                </div>
                </div>
          </div>

        </div>

             </div>

                <div class="w3-row">
               </div>

         </div>
        </div>
      </div>
    </div>
  </div>
 

     
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}

</script>
 

</body>
</html>