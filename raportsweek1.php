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
        border: 1px solid rgba(slategrey, 0.5);
        border-radius: 3px;
        padding: 0 0.6em;
        
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
    width: 99.6%;

 
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
  background-color: unset;
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
  background-color: #00000052;
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
table {
border-collapse: collapse;
width: 99.6%;
margin-left: 12.0%;
margin-top: 4.28%;
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
th{
  font-family:Verdana, Geneva, Tahoma, sans-serif;
  font-weight: 800;
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
  <a class="active" style="font-weight: 600;" style="font-weight: 600; color:#ccc;" href="https://laserpromocja.canpack.ad/barcode1/raports1.php"><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-archive"></i> Raporty</a>
  <a style="font-weight: 600; color:#ccc;" href="https://laserpromocja.canpack.ad/barcode1/message1.php"><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-envelope"></i> Wiadomości</a>
 
 
  <input style="margin-right: 1%; border-radius: 30px; margin-top: 1.5%;margin-left: 152%; min-width: 20%;" id="myInput" type="text" placeholder="Wyszukaj..."></textarea>

</span>
</div>
</div>

<div class="navbarlow" >


<div>
<a style="font-weight: 600;color:white;"><i style='color: #aba9a9;' class="fa fa-fw fa-archive"></i> Bieżący tydzień</a>

</div>

</div>

<h2></h2>


<div class="controllerLeft">
  <div class="actionbottom">
    <div class="configurtion">
     <div class="leftpanel">
      <div class="firstoption">
        <a style="font-weight: 600; color:#ccc;" href="https://laserpromocja.canpack.ad/barcode1/raports1.php"><i></i> Raport data </a>
      </div>
      <div class="secondoption">
      <a style="font-weight: 600; color:#ccc;" href="https://laserpromocja.canpack.ad/barcode1/raportsday1.php"><i></i> Raport dobowy </a>
      </div>
      <div class="thirdoption">
       <a style="font-weight: 600; color:white;"><i></i> Raport tygodniowy </a>
      </div>
      <div class="fourthoption">
       <a style="font-weight: 600; color:#ccc;" href="https://laserpromocja.canpack.ad/barcode1/raportsmonth1.php"><i></i> Raport miesięczny </a>
      </div>
    </div>
  </div>
  </div>

</div>
</div>

</div>

<div id="tableDiv">
<table>
  <thead class="thead">
<tr>
      <th>Formularz</th>
      <th>Numer zlecenia</th>
      <th>Data zlecenia</th>
      <th>Numer linii</th>
      <th>Paleta przesypana/uszkodzona</th>
      <th>Końcówka do złomu</th>
      <th>Paleta do sortowania na bieżąco</th>
      <th>Pełna paleta do złomu</th>
      <th>Paleta sortowana/respray</th>
      <th>Paleta inna</th>
      <th>Paleta inna opis</th>
      <th>Uwagi</th>
      <th>Ilość palet</th>
      <th>Data zamknięcia zlecenia</th>
      <th>Data edycji zlecenia</th>
      <th>Data weryfikowania zlecenia</th>
</tr>
  </thead>
</div>
<tbody id='myTable'>
<?php
$conn = mysqli_connect($host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$mysqli = @mysqli_connect($host, $db_user, $db_password, $db_name);
$sql = "SELECT * FROM form WHERE statusnewcode = 1 AND statusorderdelete = 0 AND WEEKOFYEAR(orderdateraport) = WEEKOFYEAR(NOW()) AND YEAR(orderdateraport) = YEAR(NOW())
ORDER BY orderdateraport DESC";
$res = $mysqli->query($sql);

 
if ($res->num_rows > 0) {
while($row=$res->fetch_assoc()){
  $palletenumbers = $row['palletebroken'] + $row['palletescrap'] + $row['palletesorted'] + $row['palletefullscrap'] + $row['palleterespray'] + $row['palleteother'];

  echo "
                            
  <tr uid='{$row["id"]}'>
  <td><p href=formorder1.php?id={$row["id"]}>{$row["id"]}</p></td>
  <td>{$row["code"]}</td>
  <td>{$row["scandate"]}</td>
  <td>{$row["linenumber"]}</td>
  <td>{$row["palletebroken"]}</td>
  <td>{$row["palletescrap"]}</td>
  <td>{$row["palletesorted"]}</td>
  <td>{$row["palletefullscrap"]}</td>
  <td>{$row["palleterespray"]}</td>
  <td>{$row["palleteother"]}</td>
  <td>{$row["palleteothercomment"]}</td>
  <td>{$row["comments"]}</td>
  <td>{$palletenumbers}</td>
  <td>{$row["orderclosedate"]}</td>
  <td>{$row["ordereditdate"]}</td>
  <td>{$row["orderdateraport"]}</td>
</tr>
";

}
echo "</table>";
} else { echo ' 

<style type="text/css">
        #tableDiv {
           visibility:hidden;
        }
        </style>
        <div id="empty" style="margin-left:20%;margin-left:20%;margin-top:10%;font-weight: 600; color:#707074;visibility:visible; "> Brak zleceń dla aktualnego tygodnia.
</div>
';

}
$conn->close();
?>
 </tbody>

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
		$(document).ready(function() {
			$("#myInput").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#myTable tr").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});
	</script>
<br><br><br><br>
  </body>
</html>