<?php include_once "DataProvider.php" ?>
<?php
$MaSV=$_REQUEST['MaSV'];
$qr="DELETE FROM sinhvien WHERE MaSV='$MaSV'";
DataProvider::ExecuteQuery($qr);
header('location:locsinhvien.php');
?>