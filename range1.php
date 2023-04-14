<style>

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

  font-weight: bold;
  border-bottom: double;
  
}
.thead{
  border-radius: 5px;
}
tr{
  font-stretch: normal;
  
}
.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
    border: double;
    border-left: unset;
    border-right: unset;
}
table {
    border-collapse: collapse;
    width: 100%;
    margin-left: 11.3%;
    margin-top: 5.0%;
    color: #38444c;
    font-family: monospace;
    font-size: 15px;
    text-align: middle;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 4px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
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
	box-shadow: 0px 10px 145px #173138, 0px -10px 25px #2f73a3, inset 0px -2px 0px #12302f, inset 0px 0px 0px #60808d;
	font-family: 'Arial', cursive;
	color: white;
	font-size: 20px;
	transition: 500ms;
}
</style>

<?php

include_once "connect.php";
$conn = new mysqli($host, $db_user, $db_password, $db_name);
if ($conn->connect_error) {
  die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}


if(isset($_POST["From"], $_POST["to"]))
{
    $result = '';
    $query = "SELECT * FROM form WHERE statusnewcode = 1 AND statusorderdelete = 0 AND orderdateraport BETWEEN '".$_POST["From"]."' AND '".$_POST["to"]."'";
    $sql = mysqli_query($conn, $query);
    $result .='
    <table class="table table-bordered">
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
    </tr>';
    if(mysqli_num_rows($sql) > 0)
    {
        while($row = mysqli_fetch_array($sql))
        {
            $result .='
            <tr>
            <td>'.$row["id"].'</td>
            <td>'.$row["code"].'</td>
            <td>'.$row["scandate"].'</td>
            <td>'.$row["linenumber"].'</td> 
            <td>'.$row["palletebroken"].'</td>
            <td>'.$row["palletescrap"].'</td>
            <td>'.$row["palletesorted"].'</td>
            <td>'.$row["palletefullscrap"].'</td>
            <td>'.$row["palleterespray"].'</td>
            <td>'.$row["palleteother"].'</td>
            <td>'.$row["palleteothercomment"].'</td>
            <td>'.$row["comments"].'</td>
            <td>'.$row["palletenumbers"].'</td>
            <td>'.$row["orderclosedate"].'</td>
            <td>'.$row["ordereditdate"].'</td>
            <td>'.$row["orderdateraport"].'</td>
            </tr>';
        }
    }
    else
    {
        $result .='
        <tr>
        <td colspan="5">Brak zleceń dla aktualnego zakresu daty.</td>
        </tr>';
    }
    $result .='</table>';
    echo $result;
}
?>