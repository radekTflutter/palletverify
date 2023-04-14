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
<link rel="stylesheet" href="css/css/font-awesome.min.css">
<link rel="stylesheet" href="css/css/font-awesome.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
<meta http-equiv="refresh" content="120">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

body{
  font:1.9em normal Arial,sans-serif;
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
  position: fixed;
  width:84%;
  margin-left:14%;
  margin-right:5%;
  margin-top:5%;
 
}

  table {
  border-collapse: collapse;
  border-radius: 0.5em;
  overflow: hidden;
  width:100%;
}
 
thead{
  top: 300px;
  background:#6f7f8540;
  color:#444;
  height: 22px;
  line-height: 140%;
 
}

th,td{
  text-align:center;
  padding:5px 0;
  border-radius: 1px;
  overflow: hidden;
  font-size: 80%;
   
}

tbody tr:nth-child(even){
  background:#ECF0F1;
}

tbody tr:hover{
background:#BDC3C7;
  color:#FFFFFF;
}

.fixed{
  top:0;
  position:fixed;
  width:auto;
 display:none;
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
  margin: -1px;
  margin-left: 2.25%;
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

.img {
  float: right;
}

#ad {
   width: 90%;
}

.active {
 
  border-radius: 5px;
  padding: 20px;
  weight: 10%;
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


.table-fixed {
    background-color: #fbfbfb;
    width: 100%;
}
.table-fixed tbody {
    height: 600px;
    overflow-y: auto;
    width: 100%;
}
.table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
    display: block;
}
.table-fixed tbody td {
    float: left;
}
.table-fixed thead tr th {
    background-color:#159bd0;
    border-color:#0881b1;
    float: left;
	  color:#fff;
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
    background-color: #363636;
    color: white;
    font-family: 'Source Sans Pro',Verdana,sans-serif;
    font-size: 85%;
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
    margin: 0 104px;
    margin-top: -1px;
}

#master {

  padding:0;
	margin:0;
	background-color:#fff;
	color:#111;
	font-family:'Source Sans Pro',Verdana,sans-serif;
	font-size:90%;
	font-weight:400;
}
.containment{
  padding-top: 60px;
}
#dashboard {
    width: 100%;
    margin: 0 auto;
    text-align: center;
    padding-bottom: 10px;
    min-height: 200px;
}
.column-container {
    display: inline-block;
    vertical-align: top;
}
.col-span-1 {
    width: 33%;
}
.column {
padding: 12px;
    
}
.webpart-container {
    width: 100%;
    margin-bottom: 15px;
    position: relative;
    background-color: #fff;
    border: 1px solid #fff;
    overflow-x: hidden;
}
.webpart-header {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    padding: 0 30px 0 10px;
    vertical-align: bottom;
    text-align: left;
    text-transform: uppercase;
    font-family: 'Source Sans Pro',Verdana,sans-serif;
    font-size: 1.2em;
    font-weight: 600;
    color: #444;
    background-color: #fff;
    line-height: 30px;
    min-height: 30px;
    max-height: 30px;
    border-bottom: 2px solid #0171B9;
}
.webpart {
    text-align: left;
    overflow: hidden;
    color: #444;
    font-size: 100%;
    font-weight: 600;
}
#master {
    margin-top: 10px;
}
.ordernumber{
    text-align: left;
    overflow: hidden;
    color: #444;
    font-size: 1.0em;
    font-weight: 400;
}
.ordercontainer{
    text-align: center;
    padding-left: 5px;
    padding-right: 5px;
}
.number{
  padding: 0px;
  font-size: 6em;
  font-weight: 600;
  color: rgb(1, 113, 185);
  cursor: default;
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
#ad {
   width: 50%;
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

}
@media screen and (max-width: 1050px) {
  .topnav2 a:not(:first-child) {display: none;}
  .topnav2 a.icon {
    float: right;
    margin: 10px 10px;
    display: block;
    top: 17px;
    right: 20px;
    background-color: #363636;
    padding: 5px 10px;
  }
  .active {
    float: left;
    margin-left: -110px;
    color: #ffffffcf;
    display: block;
    top: 17px;
    right: 20px;
    background-color: #363636;
    padding: 5px 10px;
  }
}

@media screen and (max-width: 1050px) {
 
  .topnav2.responsive {position: relative;}
  .topnav2.responsive .icon {
    position: absolute;
    right: 0px;
    top: 0px;
  }
  .topnav2.responsive a {
    float: none;
    display: block;
    text-align: left;
    margin-left: -100px;
    background-color: #363636;
 
  }
  .active {
 
    margin-left: -110px;
    color: #ffffffcf;
    display: block;
    top: 17px;
    right: 20px;
    background-color: #363636;
 
  }
  .links{
    font-weight: 600;
    color: #ccc;
    background-color: #363636;
    border-radius: 5px;
  
    weight:auto;
    top: 54px;
    right: 20px;
    z-index: 102;
  }
  .topnav2{
    background-color: #2a2727;
    margin-top: -40px;
    height: 60px;
  }
  .navbar2 a {
    float: none;
    display: none;
    text-align: left;
  }
  .col-span-1 {
    width: 100%;
}
.navbarlow{
  display: none;
}
.navbar{
  display: none;
}

}
@media screen and (max-width: 1400px) {
 
  .col-span-1 {
    width: 100%;
}
}
.fa-fw:hover{
   color: #0171b9 !important;
}
.navbar a:hover{
   color: #0171b9 !important;
}
</style>
</head>
<body>

<div class="navbar" id="myTopnav">
  <div class="logo">
  <a style="float:left; width: auto; height: 60px;" href="https://laserpromocja.canpack.ad/barcode1/main1.php"><img src="logo2.png" width="60" height="50"></a>
</div>
   <div class="navbar2 a">
    <span class="links">
  <a class="active" style="font-weight: 600;" style="font-weight: 600; color:#ccc;" href="https://laserpromocja.canpack.ad/barcode1/main1.php" ><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-home"></i> Strona główna</a>
  <a style="font-weight: 600; color:#ccc;"  href="https://laserpromocja.canpack.ad/barcode1/forms1.php"><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-edit"></i> Formularze</a>
  <a style="font-weight: 600; color:#ccc;"href="https://laserpromocja.canpack.ad/barcode1/search1.php"><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-search"></i> Wyszukiwanie</a>
  <a style="font-weight: 600; color:#ccc;" href="https://laserpromocja.canpack.ad/barcode1/raports1.php"><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-archive"></i> Raporty</a>
  <a style="font-weight: 600; color:#ccc;" href="https://laserpromocja.canpack.ad/barcode1/message1.php"><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-envelope"></i> Wiadomości</a>
 
</span>
</div>
</div>

<div class="navbarlow" >

  <div>
    <a style="font-weight: 600;"><i style='color: #aba9a9;' class="fa fa-cog fa-spin"></i> Panel główny - weryfikacja palet</a>
  </div>

</div>
<div class="topnav2" id="myTopnav2">
<span class="links">
      <a class="active" style="font-weight: 600;" href="https://laserpromocja.canpack.ad/barcode1/main1.php" ><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-home"></i> Strona główna</a>
      <a href="https://laserpromocja.canpack.ad/barcode1/forms1.php"><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-edit"></i> Formularze</a>
      <a href="https://laserpromocja.canpack.ad/barcode1/search1.php"><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-search"></i> Wyszukiwanie</a>
      <a href="https://laserpromocja.canpack.ad/barcode1/raports1.php"><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-archive"></i> Raporty</a>
      <a href="https://laserpromocja.canpack.ad/barcode1/message1.php"><i style='font-size:22px;color: #818181;' class="fa fa-fw fa-envelope"></i> Wiadomości</a>
   </span>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<?php
   $sql = "SELECT COUNT(id) FROM form WHERE (statusnewcode=0 AND id > ((SELECT MAX(id) FROM form) - 6)) OR (statuscomplete=0 AND statusnewcode=1 AND statusorderdelete=0)";
   $query = mysqli_query($con, $sql);
   $row = mysqli_fetch_row($query);
   $rows = $row[0];
?>

<div id="master">
  <div class="containment">
    <div id="dashboard">
      <div class="column-container col-span-1">
        <div class="column" style="min-height: 1px;">
          <div class="webpart-container"  id="webpartcontainer_1">
            <div class="webpart-header">
              LICZBA AKTUALNYCH ZLECEŃ DO ZAMKNIĘCIA
            </div>   
            <div class="ordernumber">    
              <div class="codenumber">
                <div style="display:inline-block;overflow:hidden;width:250px;vertical-align:top;">
                  <div class="ordercontainer">
                    <div class="number">
                    <?php 
                      $ordersnumber = "<b>$rows</b>";
                      echo $ordersnumber; 
                    ?>
                    </div>
                  </div>  
                </div>
              </div>
            </div> 
          </div>
          <div class="webpart-container" id="webpartcontainer_1">
            <div class="webpart-header">
              W CELU ZATWIERDZANIA ZLECEŃ, KLIKNIJ W FORMULARZE
            </div>   
                <div style="margin: 10px;padding: 12px;background-color:#2a2727fa; float: left;font-size: 90%;font-weight: 900;border-radius:5px;">
                <a style="color:#FFF;" href="https://laserpromocja.canpack.ad/barcode1/forms1.php"><i class="fa fa-fw fa-edit"></i> Formularze</a>
               </div>
            <div class="ordernumber">    
              <div class="codenumber">
                <div style="display:inline-block;overflow:hidden;width:250px;vertical-align:top;">
                  <div class="ordercontainer">
                    <div class="number">
              
                    </div>
                  </div>  
                </div>
              </div>
            </div> 
          </div>  
          <div class="webpart-container" id="webpartcontainer_1">
            <div class="webpart-header">
              SKANOWANIE ZLECENIA DLA LINII 2, KLIKNIJ W PONIŻSZY LINK
            </div>   
                <div style="margin: 10px;padding: 12px;background-color:#2a2727fa; float: left;font-size: 90%;font-weight: 900;border-radius:5px;">
                <a style="color:#FFF;" href="https://laserpromocja.canpack.ad/barcode1/scan1_L2.php"><i class="fa fa-fw fa-edit"></i> Skanowanie L#2</a>
               </div>
            <div class="ordernumber">    
              <div class="codenumber">
                <div style="display:inline-block;overflow:hidden;width:250px;vertical-align:top;">
                  <div class="ordercontainer">
                    <div class="number">
              
                    </div>
                  </div>  
                </div>
              </div>
            </div> 
          </div>    
          <div class="webpart-container" id="webpartcontainer_1">
            <div class="webpart-header">
              SKANOWANIE ZLECENIA DLA LINII 3, KLIKNIJ W PONIŻSZY LINK
            </div>   
                <div style="margin: 10px;padding: 12px;background-color:#2a2727fa; float: left;font-size: 90%;font-weight: 900;border-radius:5px;">
                <a style="color:#FFF;" href="https://laserpromocja.canpack.ad/barcode1/scan1.php"><i class="fa fa-fw fa-edit"></i> Skanowanie L#3</a>
               </div>
            <div class="ordernumber">    
              <div class="codenumber">
                <div style="display:inline-block;overflow:hidden;width:250px;vertical-align:top;">
                  <div class="ordercontainer">
                    <div class="number">
              
                    </div>
                  </div>  
                </div>
              </div>
            </div> 
          </div>       
        </div>
      </div>    
      <div class="column-container col-span-1">
        <div class="column" style="min-height: 1px;">
          <div class="webpart-container" id="webpartcontainer_1">
            <div class="webpart-header">
              INSTRUKCJE
              </div>
              <div class="webpart">
                <div style="border-bottom:1px solid #ccc;margin: 8px;padding: 10px;font-size: 110%;font-weight: 600;">
                  Rodzaje weryfikowanej palety:
                </div>
                  <div style="margin: 5px;padding: 5px;font-size: 90%;font-weight: 200;">
                   * Paleta przesypana/uszkodzona – paleta przywieziona z magazynu,<br> &nbsp&nbsp która wymaga przesypania na paletyzerze
                  </div>
                  <div style="margin: 5px;padding: 5px;font-size: 90%;font-weight: 200;">
                   * Paleta do sortowania na bieżąco – paleta sortowana na paletyzerze<br> &nbsp&nbsp w trakcie produkcji aktualnego zlecenia
                  </div>
                  <div style="margin: 5px;padding: 5px;font-size: 90%;font-weight: 200;">
                   * Paleta do złomu – paleta wadliwa odstawiona w trakcie produkcji z <br> &nbsp&nbsp przeznaczeniem do złomowania (oklejona metką, odstawiona w SAP i Wiera)
                  </div>
                  <div style="margin: 5px;padding: 5px;font-size: 90%;font-weight: 200;">
                   * Paleta sortowana/Respray – paleta po sortowaniu/respray <br> &nbsp&nbsp pakowana w trakcie postoju linii lub zmiany litografii
                  </div>
                  <div style="margin: 5px;padding: 5px;font-size: 90%;font-weight: 200;">
                   * Końcówka do złomu – końcówka poniżej 5 warstw <br> &nbsp&nbsp (końcówka bez potwierdzenia w SAP)
                  </div>
                  <div style="margin: 5px;padding: 5px;font-size: 90%;font-weight: 200;">
                   * Paleta inna – palety odstawione w Wiera – <br> &nbsp&nbsp niezeskanowane w SAP(nieprzekazane na magazyn) / palety pakowane <br> &nbsp&nbsp na paletyzerze Goldco 2
                  </div>
              </div>
             </div>
             
         </div>
         <div class="column" style="min-height: 1px;">
          <div class="webpart-container" id="webpartcontainer_1">
            <div class="webpart-header">
              POMOC
              </div>
              <div class="webpart">
                <div style="border-bottom:1px solid #ccc;margin: 8px;padding: 10px;font-size: 110%;font-weight: 600;">
                  W celu uzyskania wsparcia proszę o kontakt z:
                </div>
                  <div style="margin: 5px;padding: 5px;font-size: 90%;font-weight: 200;">
                   * Działanie aplikacji - Radosław Tota 
                  </div>
                  <div style="margin: 5px;padding: 5px;font-size: 90%;font-weight: 200;">
                   * Kategoryzacja weryfikowanych palet - Tomasz Kumor
                  </div>
              </div>
             </div>
             
         </div>
      </div>    
      <div class="column-container col-span-1">
        <div class="column" style="min-height: 1px;">
          <div class="webpart-container" id="webpartcontainer_1">
            <div class="webpart-header">
              OGŁOSZENIA
            </div>   
            <div class="webpart">
                <div style="border-bottom:1px solid #ccc;margin: 8px;padding: 10px;font-size: 110%;font-weight: 600;">
                  Dodane zostały następujące opcje:
                </div>
                <div style="margin: 5px;padding: 5px;font-size: 90%;font-weight: 200;">
                   * Dodane w zakładce "Raporty": <br> &nbsp&nbsp  Dobowy/Tygodniowy/Miesięczny/ oraz filtrowanie po dacie weryfikowania zlecenia.
                  </div>
                  <div style="margin: 5px;padding: 5px;font-size: 90%;font-weight: 200;">
                   * W zakładce Formularze/Zamknięte zlecenia <br> &nbsp&nbsp dodana została możliwość edytowania i usuwania formularzy. 
                  </div>
                  <div style="margin: 5px;padding: 5px;font-size: 90%;font-weight: 200;">
                   * Trzecia opcja wyboru w zakładce Formularze: Archiwalne zlecenia, <br> &nbsp&nbsp to takie zlecenia, które nie wymagały weryfikacji przez KJ. <br> &nbsp&nbsp
                   Mają one jednak możliwość wybrania zatwierdzania <br> &nbsp&nbsp w przypadku wystąpienia konieczności weryfikowania palet.
                  </div>
              </div>

<a href="https://laserpromocja.canpack.ad/barcode1/main1.php"><img src="logo.jpg" class="image" id="ad"></a>
         </div>
        </div>
      </div>    
    </div>
  </div>
</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav2");
  if (x.className === "topnav2") {
    x.className += " responsive";
  } else {
    x.className = "topnav2";
  }
}

</script>

</body>
</html>


