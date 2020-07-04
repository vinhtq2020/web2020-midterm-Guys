
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

        $result=DataProvider::ExecuteQuery($qr);

        
        

        while($row=mysqli_fetch_array($result)){
        ?>
        <tr style="margin:20px !important">
            <td><?php echo $row['MaSV'] ?></td>
        
            <td><?php echo $row['HoTen'] ?></td>
            <td><a href="sinhvien.php?MaSV=<?php echo $row['MaSV'] ?>">Thêm</a></td>
            <td><button class="btn btn-primary "  type="button">Xem</button></td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>