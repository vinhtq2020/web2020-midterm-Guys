<html>
<?php
include_once('DataProvider.php');
$mamh=$_GET['MaMH'];
?>
<?php
if(isset($_REQUEST['btnsua'])){
    $tenkhoa=$_POST['ten'];
    $namthanhlap=$_POST['tc'];
    $qr="UPDATE monhoc SET TenMH='$tenkhoa', SoTC='$namthanhlap' where MaMH=$mamh;";
    DataProvider::ExecuteQuery($qr);
    header("location:monhoc.php");
}
?>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/e9a3bfa470.js" crossorigin="anonymous"></script>
</head>
<style>
    table tr{
        padding: 50px ;
    }
</style>
<body>
<?php include_once('nav.php'); ?>

<form method="POST">
<h3 class="text-center">SUA KHOA</h3>
    <table class="table-bordered text-center" style="margin:0 auto;width:50%">
        <tr>
            <td>Ma khoa</td>
            <td>Ten khoa</td>
            <td>Nam thanh lap</td>
        </tr>
        <?php
        
        $qr="select * from monhoc where MaMH=$mamh";
        $result=DataProvider::ExecuteQuery($qr);
        
        while($row=mysqli_fetch_array($result)){
        ?>
        <tr style="margin:20px !important">
            <td><?php echo $row['MaMH'] ?></td>
        
            <td><input name="ten" value="<?php echo $row['TenMH'] ?>"></td>
            <td><input name="tc" value="<?php echo $row['SoTC'] ?>"></td>
        </tr>
        <?php
        }
        ?>
        <tr>
        <td colspan="3"><button name="btnsua" class="btn btn-primary">Sua</button></td>
        </tr>
    </table>

</form>
</body>
</html>