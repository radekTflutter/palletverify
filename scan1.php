<?php

require_once "connect.php";
	$con = mysqli_connect($host, $db_user, $db_password, $db_name);
	if (mysqli_connect_errno()) {
		die("Błąd połączenia z bazą");
	}
  
  ?>
  
  <?php
   $linenumber = "L#3";
$date = date("d-m-Y H:i:s");
echo $date;
if(isset($_POST['submit'])){
    $barcode = $_POST['barcode'];
    echo "<br />". $barcode;
}


require_once "connect.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
 
	try {
		$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
		if ($polaczenie->connect_errno != 0) {
			throw new Exception(mysqli_connect_errno());
		}

		if (isset($_POST['submit'])) {

			if ($polaczenie->query("INSERT INTO form (scandate, code, statusnewcode, statuscomplete, palletenumbers, palletebroken, palletescrap, palletesorted, palletefullscrap, palleterespray, linenumber) VALUES 
									('$date', '$barcode', '0', '0', '0', '0', '0', '0', '0', '0', '$linenumber')")) {
				header('Location: scan1.php');
			}
		}
		$polaczenie->close();
	} catch (Exception $e) {
		echo '<span style="color:red;">Błąd serwera!</span>';
		echo '<br />Informacja DEV: ' . $e;
	}

?>

<!DOCTYPE html>
<html>
<title>SKANOWANIE</title>
<meta charset="UTF-8">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="style18.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content="1">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

body{
  font:3.2em normal Arial,sans-serif;
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
  width:90%;
  margin: 1px;
  padding: 1px;
}

table{
  border-collapse:collapse;
  width:180%;
}

table.normal{
    border:2px solid ;
}

thead{
  top: 300px;
  background:#0171B9;
  color:white;
}

th,td{
  text-align:center;
  padding:5px 0;
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
  padding: 16px;
  color: white;
  text-decoration: none;
  font-size: 15px;
  margin-left: 15px;
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
  padding: 12px 16px;
  text-decoration: none;
  font-size: 24px;
  margin-left: 10px;
  font-family: 'Source Sans Pro',Verdana,sans-serif ;
}

.img {
  float: right;
}

.active {
  background-color: black;
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
        max-width: 30%;
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
    width: 44.66667%;
}
</style>
</head>

    <body>
      
    <div class="col-9">
      <br>
    <a1 style="margin-left:1%;font-weight: bold;">L#3 - ZESKANUJ KOD KRESKOWY ZLECENIA:</a1>
    <div class="w3-row-padding">

  
        <div class="w3-half">
    <div class="w3-section">
    <form method="POST" action="scan1.php">

    <input id="input" maxlength="11" type="number" oninput="validate(this)" autofocus="autofocus" class="w3-half" number_format="number" name="barcode">
    <input id="submit" type="submit" name="submit">
    <br>

    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script>
        function validate(field) {
   let val = field.value;
   let data = val.replace(/[^0-9]/g, "");
   field.value = data.slice(0,11);
}
$('#input').keyup(function(){
    if(this.value.length === 11){
       $('#submit').click();
    }
});
</script>
<a1>Zeskanowane zlecenia:</a1>
<?php
$query = "SELECT * FROM form WHERE (linenumber='L#3' AND statusorderdelete = 0 AND statusnewcode=0 AND id > ((SELECT MAX(id) FROM form) - 6)) OR (linenumber='L#3' AND statusorderdelete = 0 AND statuscomplete=0 AND statusnewcode=1) ORDER BY id DESC"; 

$prepared = $con->prepare($query);
$prepared->execute();
$result = $prepared->get_result();
?>
<div id="container">
<table class="normal">
  <thead>
    <tr>
      <th>Formularz</th>
      <th>Numer zlecenia</th>
      <th>Numer linii</th>
      <th>Data zlecenia</th>
      <th>Ilość palet</th>
      <th>Paleta przesypana/uszkodzona</th>
      <th>Końcówka do złomu</th>
      <th>Paleta do sortowania na bieżąco</th>
      <th>Pełna paleta do złomu</th>
      <th>Paleta sortowana/respray</th>
    </tr>
  </thead>
  <tbody>
    <tr>
<?php
if ($result->num_rows > 0) {
  $sn=1;
  while($data = $result->fetch_assoc()) {
    $palletenumbers = $data['palletebroken'] + $data['palletescrap'] + $data['palletesorted'] + $data['palletefullscrap'] + $data['palleterespray'];

 ?>
 
   <td><?php echo $data['id']; ?> </td>
   <td><?php echo $data['code']; ?> </td>
   <td><?php echo $data['linenumber']; ?> </td>
   <td><?php echo $data['scandate']; ?> </td>
   <td><?php echo $palletenumbers; ?> </td>
   <td><?php echo $data['palletebroken']; ?> </td>
   <td><?php echo $data['palletescrap']; ?> </td>
   <td><?php echo $data['palletesorted']; ?> </td>
   <td><?php echo $data['palletefullscrap']; ?> </td>
   <td><?php echo $data['palleterespray']; ?> </td>
 <tr>
 <?php
  $sn++;}
} else { 
  ?>
    <tr>
     <td colspan="8">Brak zleceń</td>
    </tr>
 <?php } ?>
 </tr>
  </tbody>
</table>

<?php
 
$date = date("d-m-Y H:i:s");  
$dateraport = date("Y-m-d H:i:s");
 

if (isset($_POST['submit'])) {
  $log = 'LOGFILE - SKANOWANIE PALET:' . "\r\n" . 
    'Numer zlecenia:' . ' ' . $_POST['barcode'] . ',' . "\r\n" . 
    'Data weryfikowania zlecenia:' . ' ' . $date . ',' . "\r\n" .
    'Data weryfikowania zlecenia:' . ' ' . $dateraport . ',' . "\r\n" .
    'IP adres:' . ' ' . $_SERVER['REMOTE_ADDR'] . ',' . "\r\n";
  $file = fopen("uploads/logfile/scanL3/" . $_POST['barcode'] . "_scanL3_" . $date . ".txt", "a+");
  fprintf( $file, "\xEF\xBB\xBF");
  fwrite($file, $log);
  fclose($file);
}
?>
 
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

window.onload = function() {
    var $t_normal = document.getElementsByClassName('normal')[10],
        tableOffset = $t_normal.offsetTop,
        $t_fixed = $t_normal.cloneNode(true);
    $t_fixed.removeChild($t_fixed.getElementsByTagName('tbody')[10]);
    $t_fixed.className = 'fixed';
    $t_normal.parentNode.insertBefore($t_fixed, $t_normal);
    function resizeFixed() {
        var i,
            $t_fixed_th = $t_fixed.getElementsByTagName('th'),
            $t_normal_th = $t_normal.getElementsByTagName('th');
        tableOffset = $t_normal.offsetTop;
        for (i = 0; i < $t_fixed_th.length; i += 1) {
            $t_fixed_th[i].style.width = ($t_normal_th[i].offsetWidth) + "px";
        }
    }
    function scroll() {
        var offset = window.pageYOffset,
            tableOffsetBottom = $t_normal.getElementsByTagName('tbody')[10].offsetHeight + tableOffset;
        if (offset < tableOffset || offset > tableOffsetBottom) {
            $t_fixed.style.display = 'none';
        } else if (offset >= tableOffset && offset <= tableOffsetBottom && $t_fixed.offsetWidth === 10) {
            $t_fixed.style.display = 'table';
        }
    }
    window.onresize = resizeFixed;
    window.onscroll = scroll;
    resizeFixed();
};
</script>
</body>
</html>