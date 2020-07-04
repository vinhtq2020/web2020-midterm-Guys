<html>
<?php
include_once('DataProvider.php');
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

<h3 class="text-center">DANH SACH KHOA</h3>
    <table class="table-bordered text-center" style="margin:0 auto;width:50%">
        <tr>
            <td>Ma khoa</td>
            <td>Ten khoa</td>
            <td>Nam thanh lap</td>
            <td></td>
        </tr>
        <?php
        
        $qr="select * from khoa";
        $result=DataProvider::ExecuteQuery($qr);
        
        while($row=mysqli_fetch_array($result)){
        ?>
        <tr style="margin:20px !important">
            <td><?php echo $row['MaKhoa'] ?></td>
        
            <td><?php echo $row['TenKhoa'] ?></td>
            <td><?php echo $row['NamThanhLap'] ?></td>
            <td><a href="suakhoa.php?MaKhoa=<?php echo $row['MaKhoa'] ?>">Sửa</a>
            <a href="xoakhoa.php?MaKhoa=<?php echo $row['MaKhoa'] ?>">Xóa</a></td>
        </tr>
        <?php
        }
        ?>
        <tr>
        <td colspan="4"><a href="themkhoa.php" class="btn btn-primary">Thêm</a></td>
        </tr>
    </table>

</body>
</html>