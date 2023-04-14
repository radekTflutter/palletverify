<style>
.list-group{
  margin-top: 30px;
}
.list-group-item:last-child {
  margin-top: 10px;
}
</style>


<?php
  require_once 'config.php';
 
  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $sql = 'SELECT code FROM form WHERE statusorderdelete=0 AND code LIKE :barcode';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['barcode' => '%' . $inpText . '%']);
    $result = $stmt->fetchAll();

    if ($result) {
      foreach ($result as $row) {
        echo '<a style="color:black;min-width:18%;float:right;margin-left:-35%;margin-left:-33%;margin-bottom:-10px;margin-top: 5%;" href="#" class="list-group-item list-group-item-action border-1">' . $row['code'] . '</a>';
        
      }
    } else {
      echo '<p class="list-group-item border-1">Brak zlecenia</p>';
    }
  }
?>

         