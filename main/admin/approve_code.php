<?php 
  include('admin_header.php');

  ?>

  <?php

  $pay_date = $_POST["pay_date"];
  $pur_date = $_POST["pur_date"];

  if((strcmp($pur_date,$pay_date) > 0) && $pay_date != '')
    echo "<script>alert('Date Error!!!');window.location.replace(\"approve.php\");</script>";
  else{


  $bill_no = $_POST["bill_no"];
  $type = $_POST["type"];
  $details = $_POST["details"];
  $quantity = $_POST["quantity"];
  $unit_price = $_POST["unit_price"];
  $faculty = $_POST["faculty"];
  $department = $_POST["department"];

  $sql = "UPDATE `assets_data` SET `approved` = '1', `date_of_payment` = '$pay_date' WHERE `date_of_purchase` = '$pur_date' AND `bill_no` = '$bill_no' AND `type` = '$type' AND `quantity` = '$quantity' AND `unit_price` = '$unit_price' AND `faculty` = '$faculty' AND `department` = '$department' ";
  $result = $conn->query($sql);

  //echo $sql;

  echo "<script>alert('Success!!!');window.location.replace(\"approve.php\");</script>";

}
?>