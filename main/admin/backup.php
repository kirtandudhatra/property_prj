<?php

include('admin_header.php');

$sql = "SELECT * INTO OUTFILE 'bcptable.sql' FROM `user`,`assets_data`";
$conn->query($sql);

echo "<script>alert('Success-pp!!');window.location.replace(\"index.php\");</script>";
?>