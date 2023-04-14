<?php
   $formData = $_REQUEST;
   if($formData['fname'] == 'form1') {
     // do action for form1
      echo json_encode($formData);
   } else if($formData['fname'] == 'form2') {
     // do action for form2
      echo json_encode($formData);
   }
?>