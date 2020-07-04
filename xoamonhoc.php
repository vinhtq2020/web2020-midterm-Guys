<?php include_once "DataProvider.php" ?>
<?php
$MaMH=$_REQUEST['MaMH'];
$qr="DELETE FROM monhoc WHERE MaMH='$MaMH'";
DataProvider::ExecuteQuery($qr);
header('location:monhoc.php');
?>