 <?php $map=$_GET['map']; include_once('include/thungay.php');?>

      <div class="col-sm-12  m-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
		  <span style="font-size: 25px;color: #333" class="mr-2 d-none d-lg-inline text-gray-600 small"><?php
                         echo $map?>
                        </span>
		  <hr>
           <form class="col-md-12 m-auto" action="index.php?action=quanlydiennuoc&view=them&map=<?php echo $map ?>" method="POST">


           <!-- Tiền điện -->
              <div class="form-row">
              <div class="form-group col-sm-3">
                    <label for="phong">Tháng</label>
                    <input type="text" class="form-control"  name="thang" required>
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Số điện tháng trước</label>
                    <input type="text" class="form-control" name="sdtt" required>
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myPassword">Số điện tháng sau</label>
                    <input type="text" class="form-control" name="sdts" required>
                 </div>

                 
               
              </div><hr>

              <!-- Tiền nước -->
              <div class="form-row">
              <div class="form-group col-sm-3">
                    <label for="phong">Tháng</label>
                    <input type="text" class="form-control"  name="thang" required>
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myEmail">Số nước tháng trước</label>
                    <input type="text" class="form-control" name="sntt" required>
                   
                 </div>
                 <div class="form-group col-sm-3">
                    <label for="myPassword">Số nước tháng sau</label>
                    <input type="text" class="form-control" name="snts" required>
                 </div>

                 
               
              </div><hr>
   
              <button type="sub" name="themdn" class="btn btn-lg btn-primary btn-block text-uppercase col-3 m-auto">Thêm</button>
           </form></div>
         </div>
       </div><?php $a=sw_get_current_weekday();
echo $a;?>
        <table class="table text-center badge-light table-hover">
                  <thead class="badge-info">
                    <tr>
                      <th>Tháng</th><th>Tiền Điện</th><th>Tiền Nước</th><th>Tổng Tiền</th><th>Tình Trạng</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php  $sql123="select * from hoadondiennuoc where MaPhong ='$map' order by Thang DESC";
                        $rs123=mysqli_query($conn,$sql123);
                   while ( $row123=mysqli_fetch_array($rs123)) {
                        
                    ?>
                      <tr>
                       <td><?php echo $row123['Thang']; ?> </td>
                       <td> <?php echo number_format($row123['TienDien']).' đ' ?> </td>
                       <td><?php echo number_format($row123['TienNuoc']).' đ' ?></td>
                       <td><?php echo number_format(($row123['TienNuoc']+$row123['TienDien'])).' đ' ?></td>
                       <td><?php if($row123['TinhTrang']==='đã thu') {
                       				echo $row123['TinhTrang'];
                       			 }else{?>
									<a href="index.php?action=quanlydiennuoc&view=them&map=<?php echo $map; ?>&mahd=<?php echo $row123['MaHD']; ?>">chưa thu</a>
                       		<?php	 } ?> </td>
                       

                    </tr>
                    
                 <?php   } ?>
                    
                  </tbody>
        </table>
<?php
	if(isset($_POST['themdn'])){
    $sodien = 3000;
    $sonuoc = 20000;

    // xử lí tiền điện
    $sdtt=$_POST['sdtt'];
    $sdts=$_POST['sdts'];
    $sdtn = $sdts - $sdtt;
    $tongtiendien = $sdtn * $sodien;

    // xử lí tiền nước
    $sntt=$_POST['sntt'];
    $snts=$_POST['snts'];
    $sntn = $snts - $sntt;
    $tongtiennuoc = $sntn * $sonuoc;




		$td=$_POST['td'];
		$tn=$_POST['tn'];
		$thang=$_POST['thang'];
		$sql="INSERT INTO `hoadondiennuoc` (`MaHD`, `MaPhong`, `TienDien`, `TienNuoc`, `Thang`) VALUES (NULL, '$map','$tongtiendien', '$tongtiennuoc', '$thang')";
		$rs=mysqli_query($conn,$sql);
		if($rs){
			$link="index.php?action=quanlydiennuoc&view=them&tb=1&map=".$map;
			header('Location:'.$link);
			
		}else{
			$link="index.php?action=quanlydiennuoc&view=them&tb=2&map=".$map;
			header('Location:'.$link);
		}
	}
	if(isset($_GET['tb'])){
		switch ($_GET['tb']) {
			case '1':
				echo '<script>alert("success!!!")</script>';
				break;
			case '2':
				echo '<script>alert("Lỗi!!!")</script>';
				break;
			default:
				# code...
				break;
		}
	}
	if(isset($_GET['mahd'])){
		$mahd=$_GET['mahd'];
		$sql="UPDATE hoadondiennuoc set TinhTrang=N'đã thu' where MaHD='$mahd'";
		$rs=mysqli_query($conn,$sql);
		if($rs){
			$link="index.php?action=quanlydiennuoc&view=them&tb=1&map=".$map;
			header('Location:'.$link);
			
		}else{
			$link="index.php?action=quanlydiennuoc&view=them&tb=2&map=".$map;
			header('Location:'.$link);
		}
	}


?>

