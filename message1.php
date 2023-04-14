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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
           <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"/>
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
  margin-top: -0.8%;
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
        max-width: 15%;
        height: 32px;
        height: $h;
        
        border-radius: 20px;
        padding: 0 0.6em;
        text-align: center;
        
        transition: 0.2s ease, min-height 0 linear;
        
        &.filled {
            
            border: 1px solid slategrey;
            
        }
        
        &:focus {
            
            border-color: $c;
            box-shadow: inset 0 0 2px $c;
            outline: none;
            
        }
        
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
   color: white !important;
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
  font-size: 1.6rem;
  font-weight: bold;
}
.btn-primary{
  background-color: #00285e99;
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

.form-inline input {
  vertical-align: middle;
  margin: 5px 5px 5px 0;
  padding: 4px;
  margin-right: 1%;
  align-items: center;
  background-color: #e5e5e5;
  border: 2px solid #6c6c6c;
  border-radius: 5px;
}

.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
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
@media screen and (max-width: 1900px) {
  .controllerLeft{

    width: auto;
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
   
  }

}
</style>
<style>
.tableraport {
border-collapse: collapse;
width: 88%;
margin-left: 1.97%;
margin-top: 4.26%;
color: #38444c;
font-family: monospace;
font-size: 15px;
text-align: middle;

}
table {
border-collapse: collapse;
width: 100%;
margin-left: 11.4%;
margin-top: 4.0%;
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
.dateraport{
  text-align: center;
  vertical-align: text-top;
  font-family: Open Sans, Arial, sans-serif;
  color: gray;
  margin-top: 0.8%;
  margin-left: 12.7%;
  margin-right: 20%;
}
.btn-success {
    color: #fff;
    background-color: #00285e99;
    border-color: #7cc0e7;
    width: 150px;
	height: 50px;
	cursor: pointer;
	background: #1787c7;
	border: none;
	border-radius: 10px;
	box-shadow: 0px 10px 25px #173138, 0px -10px 25px #2f73a3, inset 0px -5px 10px #12302f, inset 0px 5px 10px #60808d;
	font-family: 'Arial', ;
	color: white;
	font-size: 18px;
	transition: 500ms;
}
.btn:hover {
    transform: translateY(2px);
    background-color: #00285e99;
}
.btn-success.focus, .btn-success:focus {
    color: #fff;
    background-color: #00285e99;
    border-color: #00285e99;
}
.btn-primary{
  background-color: #00285e99;
}
.btn-success:hover {
    color: #fff;
    background-color: #00285e99;
    border-color: #00285e99;
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    max-width: 70%;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.container {
    max-width: 40%;
    margin-left: 15%;
    margin-right: 30%;
    padding-left: 1px;
    margin-top: 6%;
    padding-right: 10px;
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
  <a style="font-weight: 600; color:#ccc;" href="https://laserpromocja.canpack.ad/barcode1/forms1.php"><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-edit"></i> Formularze</a>
  <a style="font-weight: 600; color:#ccc;" href="https://laserpromocja.canpack.ad/barcode1/search1.php"><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-search"></i> Wyszukiwanie</a>
  <a style="font-weight: 600; color:#ccc;" href="https://laserpromocja.canpack.ad/barcode1/raports1.php"><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-archive"></i> Raporty</a>
  <a class="active" style="font-weight: 600;"  style="font-weight: 600; color:#ccc;" href="https://laserpromocja.canpack.ad/barcode1/message1.php"><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-envelope"></i> Wiadomości</a>

</span>
</div>
</div>

<div class="navbarlow" >


<div>
<a style="font-weight: 600;color:white;"><i style='color: #aba9a9;' class="fa fa-fw fa-envelope"></i> Wiadomości</a>

              <div id="date" class="dateraport">  
              </div> 
</div>
</div>

<h2></h2>

      <div class="controllerLeft">
          <div class="actionbottom">
            <div class="configurtion">
              <div class="leftpanel">
                <div class="firstoption">
                  <a style="font-weight: 600; color:white;"><i></i> Aktualne wiadomoci </a>
                </div>
              </div>
            </div>      
          </div>
      </div>

      <div class="column-container col-span-1">
        <div class="column">

  <div class="container">
      <h2 style="text-align: left;"><a href="#">Podaj imię i napisz wiadomość</a></h2>
  <br/>
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" style="max-width: 70%;text-align: left;    border-radius: unset;" id="comment_name" class="form-control" placeholder="Podaj imię" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" style="text-align: left;"id="comment_content" class="form-control" placeholder="Dodaj wiadomość" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Zatwierdź" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>

        </div>
      </div>
    </div>
  </div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

</script>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>
<br><br><br><br>
  </body>
</html>