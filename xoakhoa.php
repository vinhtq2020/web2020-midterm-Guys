<?php include_once "DataProvider.php" ?>
<?php
$MaKhoa=$_REQUEST['MaKhoa'];
$qr="DELETE FROM khoa WHERE MaKhoa='$MaKhoa'";
DataProvider::ExecuteQuery($qr);
header('location:khoa.php');
?>