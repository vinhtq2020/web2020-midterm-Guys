
<?php
include_once('DataProvider.php');
?>
<div class="col-10">
    <h3 class="text-center">DANH SACH SV</h3>
    <table class="table table-bordered text-center" style="margin:0 auto;width:50%">
        <tr>
            <td>STT</td>
            <td>Ten sv</td>
            <td></td>
        </tr>
        <?php
        
        if(isset($_REQUEST['loaisv'])){
            $loai=$_REQUEST['loaisv'];
            $qr="select * from sinhvien,lop where lop.MaLop=sinhvien.MaLop and sinhvien.MaLop=$loai";
        }
        else{
            $qr="select * from sinhvien";
        }
<<<<<<< HEAD
        $result=DataProvider::ExecuteQuery($qr);
=======
        
        $result=mysqli_query($conect,$qr);
>>>>>>> 20f03d4c24965441402fb78caeb36990a0d23f1b
        while($row=mysqli_fetch_array($result)){
        ?>
        <tr style="margin:20px !important">
            <td><?php echo $row['MaSV'] ?></td>
        
            <td><?php echo $row['HoTen'] ?></td>
            <td><a href="">Thêm</a></td>
            <td><button class="btn btn-primary "  type="button">Mua</button></td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>