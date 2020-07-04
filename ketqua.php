
<?php
include_once('DataProvider.php');
?>

<div >
    <h3 class="text-center">ĐIỂM SINH VIÊN</h3>
    <table class="table table-bordered text-center" style="margin:0 auto;width:50%">
        <tr>
            <td>STT</td>
            <td>Ten sv</td>
            <td>Ten MH</td>
            <td>Diem</td>
            <td colspan="3"><a href="ThemDiem.php">Thêm</a></td>
            
        </tr>
        <?php
        
        if(isset($_REQUEST['loaisv'])){
            $loai=$_REQUEST['loaisv'];
            $lop=$_REQUEST['lop'];
            $qr="SELECT * FROM `ketqua`,sinhvien,monhoc,lop WHERE ketqua.MaSV=sinhvien.MaSV and ketqua.MaMH=monhoc.MaMH and sinhvien.MaLop=lop.MaLop and sinhvien.MaSV=$loai";
        }
        else{
            $qr="select * from sinhvien";
        }

        $result=DataProvider::ExecuteQuery($qr);

        
        

        while($row=mysqli_fetch_array($result)){
        ?>
        <tr style="margin:20px !important">
            <td><?php echo $row['MaSV'] ?></td>
        
            <td><?php echo $row['HoTen'] ?></td>
            <td><?php echo $row['TenMH'] ?></td>
            <td><?php echo $row['Diem'] ?></td>
            <td></td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>