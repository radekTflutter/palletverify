<style>
.button {
        background-color: #0171B9;
        border: none;
        color: white;
        padding: 0.6rem 1.4rem;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 6px;
        outline: none;
      }
      .button:hover {
  background-color: #4CAF50;
  color: white;
} 
th{
font-family:Verdana, Geneva, Tahoma, sans-serif;
font-weight: 800;
}
</style>
<?php  

include("connect.php");
$con = mysqli_connect($host, $db_user, $db_password, $db_name);
if (mysqli_connect_errno()) {
     die("Błąd połączenia z bazą");
}
if(isset($_POST['input'])){

     $input = $_POST['input'];

     $query = "SELECT * FROM form WHERE statusorderdelete=0 AND code LIKE '%".$input."%' ORDER BY id DESC";

     $result = mysqli_query($con,$query);

     if(mysqli_num_rows($result) > 0){?>

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
                         <th>Ilość całkowita palet</th>
                         <th>Data weryfikowania zlecenia</th>
                    </tr>
               </thead>
     
               <tbody>
                    <?php

                    while($row = mysqli_fetch_assoc($result)){
                         $palletenumbers = $row['palletebroken'] + $row['palletescrap'] + $row['palletesorted'] + $row['palletefullscrap'] + $row['palleterespray'] + $row['palleteother'];
                         $id = $row['id'];
                         $code = $row['code'];
                         $scandate = $row['scandate'];
                         $linenumber = $row['linenumber'];
                         $palletebroken = $row['palletebroken'];
                         $palletescrap = $row['palletescrap'];
                         $palletesorted = $row['palletesorted'];
                         $palletefullscrap = $row['palletefullscrap'];
                         $palleterespray = $row['palleterespray'];
                         $palleteother = $row['palleteother'];
                         $palleteothercomment = $row['palleteothercomment'];
                         $palletenumbers;
                         $orderdateraport = $row['orderdateraport'];

                         ?>

                         <tr>
                              <td><a class="button" href=formorder1.php?id=<?php echo $id; ?>><?php echo $id; ?></a></td>
                              <td><?php echo $code; ?> </td>
                              <td><?php echo $scandate; ?> </td>
                              <td><?php echo $linenumber; ?> </td>
                              <td><?php echo $palletebroken; ?> </td>
                              <td><?php echo $palletescrap; ?> </td>
                              <td><?php echo $palletesorted; ?> </td>
                              <td><?php echo $palletefullscrap; ?> </td>
                              <td><?php echo $palleterespray; ?> </td>
                              <td><?php echo $palleteother; ?> </td>
                              <td><?php echo $palleteothercomment; ?> </td>
                              <td><?php echo $palletenumbers; ?> </td>
                              <td><?php echo $orderdateraport; ?> </td>
                         </tr> 

                         <?php
                    }

                    ?>
               </tbody>
          </table>

      <?php

     }else{
          echo"<h5 style='height:40px;margin-top:8%;margin-left:20%;font-size:20px;'>Brak zlecenia o tym numerze</h5>";
          ?>
          <form action="forms1.php" method="post">
          <input style="width:150px;height:40px;margin-left: 20%;" type="submit" value="WSTECZ" id="form" class="w3-button w3-theme"></input>
          <br>
        </form>
        <?php

      }
}

 ?>   