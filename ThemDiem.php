<html>
<?php
include_once('DataProvider.php');
?>
<?php
    if(isset($_REQUEST['btnthem'])){
        $mon1=$_REQUEST['txtmon'];
        $masv1=$
        $diem1=$_REQUEST['txtdiem'];

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
<form action="" method="POST" >
<h3 class="text-center">THÊM ĐIỂM</h3>
    <table class="table-bordered text-center" style="margin:0 auto;width:50%">
    <tr>
            <td>Mã Lớp</td>
            <td>
                <select name="chonmamon" id="chonmamon">
                    <?php
                        $qr=DataProvider::ExecuteQuery("SELECT*FROM monhoc");
                        while($row_lop=mysqli_fetch_array($qr)){

                        
                    ?>
                        <option  value="<?php echo $row_lop['MaLop'] ?>"><?php echo $row_lop['TenMH'] ?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        <tr>
            <td>Mã SV</td>
            <td>
                <select name="chonmamon" id="chonmamon">
                    <?php
                        $qr=DataProvider::ExecuteQuery("SELECT*FROM sinhvien");
                        while($row_lopsv=mysqli_fetch_array($qr)){

                        
                    ?>
                        <option  value="<?php echo $row_lop['MaLop'] ?>"><?php echo $row_lopsv['HoTen'] ?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Điểm</td>
            <td><input class="form-control" name="txtdiem" type="number"></td>
        </tr>
        
        <tr>
            <td colspan="2"><button class="btn btn-primary"  name="btnthem" type="submit">Sửa</button></td>
        </tr>
    </table>
</form>