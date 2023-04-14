<?php
$date = date("d-m-Y H:i:s");
require_once "connect.php";
	$con = mysqli_connect($host, $db_user, $db_password, $db_name);
	if (mysqli_connect_errno()) {
		die("Błąd połączenia z bazą");
	}


  $action=$_POST["action"];
  if($action=="Update"){
    $id=mysqli_real_escape_string($con,$_POST["id"]);
    $broken=mysqli_real_escape_string($con,$_POST["palletebroken"]);
    $scrap=mysqli_real_escape_string($con,$_POST["palletescrap"]);
    $sorted=mysqli_real_escape_string($con,$_POST["palletesorted"]);
    $fullscrap=mysqli_real_escape_string($con,$_POST["palletefullscrap"]);
    $respray=mysqli_real_escape_string($con,$_POST["palleterespray"]);
    $other=mysqli_real_escape_string($con,$_POST["palleteother"]);
    $othercomment=mysqli_real_escape_string($con,$_POST["palleteothercomment"]);
    $comment=mysqli_real_escape_string($con,$_POST["comments"]);
    $sql="UPDATE form SET palletebroken='{$broken}', palletescrap='{$scrap}', palletesorted='{$sorted}', palletefullscrap='{$fullscrap}', palleterespray='{$respray}',  palleteother='{$other}',  palleteothercomment='{$othercomment}', comments='{$comment}', ordereditdate = '$date' WHERE id='{$id}'";
    if($con->query($sql)){
      echo " 
        <tr uid='{$id}'>
          <td>{$broken}</td>
          <td>{$scrap}</td>
          <td>{$sorted}</td>
          <td>{$fullscrap}</td>
          <td>{$respray}</td>
          <td>{$other}</td>
          <td>{$othercomment}</td>
          <td>{$comment}</td>
        </tr>"; 
        
    }else{
      echo false;
    }
  }else if($action=="Delete"){
    $id=$_POST["uid"];
    $sql="UPDATE form SET statusorderdelete=1 WHERE id='{$id}'";
    if($con->query($sql)){
      echo true;
    }else{
      echo false;
    }
  }
?>