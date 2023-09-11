 <?php 
if (isset($_SESSION['sv_login'])) {
    $sv=$_SESSION['sv_login'];
    $masv=$sv['MaSV'];
    // check xem đã trả phòng cũ chưa
    
   
    //check xem đã thanh toán hết tiền điện nước chưa để trả phòng
    
//?>
    <div class="cart">
      <div class="col-sm-12  mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
          <h5 class="card-title text-center">Trả Phòng KÝ TÚC XÁ</h5><hr>
            <form class="col-md-12 m-auto" action="xuly/main.php?action=traphong" method="POST">
              <div class="form-row">
                 <div class="form-group col-sm-4">
                    <label for="masv">Mã sinh viên</label>
                    <label class="form-control" > <?php echo $sv['MaSV']; ?></label>
                    <input hidden name="masv" value="<?php echo $sv['MaSV'] ?>">
                 </div>
                 <div class="form-group col-sm-4">
                    <label for="hoten">Họ và tên</label>
                    <label class="form-control" ><?php echo $sv['HoTen']; ?> </label>
                 </div>
                 <?php
       $sql2="select * from chitietdangky where MaSV=$masv and NgayTraPhong is null";
       $rs2=mysqli_query($conn,$sql2);
    if ($row2=mysqli_fetch_array($rs2)) {
      ?>
                  <div class="form-group col-sm-4">
                    <label for="phong">Phòng Đang Ở</label>
                    <label class="form-control"><?php echo $row2['MaPhong']; ?></label>
                 </div>
                 <?php   }
              
              else{
                
             
                  
              }?>
               </div>
             
               <div class="form-group">
                
                 <label> <span style="color: red;font-size: 25px;">*</span>Lưu ý : Bạn sẽ không được nhận lại tiền dư khi trả phòng trước thời hạn. Nhân viên ký túc xá sẽ kiểm tra lại tài sản trước khi cho bạn trả phòng. Hệ thống sẽ gửi thông báo sau !</label>
              </div>
        <hr>
        <?php
        $sql123="SELECT * FROM `hoadondiennuoc` WHERE TinhTrang = 'chưa thu'";
    $rs123=mysqli_query($conn,$sql123);
    if ( !$row123=mysqli_fetch_array($rs123)) {
      ?>
              <button type="submit" name="trap" class="btn btn-lg btn-primary btn-block text-uppercase ">Trả Phòng</button>

              <?php   }
              
              else{
                echo "Trước khi trả phòng bạn phải thanh toán hết tiền điện và tiền nước!! Vui lòng thanh toán và thực hiện lại";
              }?>

           </form></div>
         </div>
       </div>
     </div>
<?php } ?>