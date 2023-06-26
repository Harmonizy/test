<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table  class="table table-striped" border="1" cellpadding="0"  cellspacing="0" align="center">
                <thead>
                <div class="container">
          <table id="example" class="table table-hover table-bordered table-dark" cellspacing="0" width="100%">
            <thead>
              <tr class="table-active">
                <th width="5%">ลำดับ</th>
                <th width="30%">ชื่อหนังสือ</th>
                <th width="20%">ชื่อผู้จัดทำ</th>
                <th width="20%">หมวดหมู่</th>
                <th width="5%">สถานะ</th>
                    </tr>
                </thead>
                <?php
                echo '<font color="red">';   
                echo 'คำค้น = ';
                echo $_GET['q'];
                echo '</font>';
                echo '<br/>';             
                $sql = "SELECT * FROM tb_book
                    WHERE book_name LIKE '%$q%' OR book_user LIKE '%$q%' OR book_group LIKE '%$q%'
                 ORDER BY book_name DESC";
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_array($result)) {
                                    
                ?>
                <tr>
                    <td><?php echo $row['book_id'];?></td>
                    <td><?php echo $row['book_name'];?></td>
                    <td><?php echo $row['book_user'];?></td>
                    <td><?php echo $row['book_group'];?></td>
                    <td><?php echo $row['book_status'];?></td>                    
                </tr>
            <?php } ?>
            </table>
        <?php mysqli_close($con);?>
    </div>
</div>
</div>