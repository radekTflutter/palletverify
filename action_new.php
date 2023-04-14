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
        echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['code'] . '</a>';
        
      }
    } else {
      echo '<p style="color:black;" class="list-group-item border-1">Brak zlecenia</p>';
    }
  }
?>
         