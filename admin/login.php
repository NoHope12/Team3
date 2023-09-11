<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="/shoponi/view/bootstrap4/css/bootstrap.css">
   <script src="/shoponi/jquery/jquery.js"></script>
   <script src="/shoponi/view/bootstrap4/js/bootstrap.js"> </script>
  <title></title>
  <style>
    *{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    h2{
      font-size: 32px;
      color: orange;
      margin-bottom: 16px;
    }
    .form-group{
      width: 400px;
    }
    .group-input{
      outline-color: coral;
      outline-width: 2px;
      border: none;
      border-radius: 3px;
      font-size: 16px;
      padding: 12px 4px;
      display: block;
      width: 240px;
      margin-top: 15px;
      /* margin-top: 35px; */
    }
    .sub{
      margin: 12px 0;
    }
    .sub a{
      color :coral;
      font-size: 16px;
      text-decoration: none;
    }
    .button{
      margin-top: 24px;
      padding: 10px 32px;
      font-size: 16px;
      border-radius: 4px;
      border: none;
      background-color:coral ;
      color: #fff;
    }
    .button:hover{
      opacity: 0.9;
    }
    .cover{
      width: 450px;
      padding: 60px 0;
      border-radius: 10px;
      border: 1px solid #ccc;
      background-color: rgba(0, 0, 0, 0.01);
    }

  </style>
</head>
<body>

  <div class="login">
    </div>
    <div class="login2">
      <center>
    <div class="container" style="margin-top: 140px;"> 
 <div class="row-fluid cover"> 
  <div class="col-md-offset-4 col-md-4 nenbac" id="box" > 
   <!-- <hr>  -->
   <form class="form-horizontal" action="" method="post" id="login_form"> 
    <!-- <fieldset>  -->
    <h2>Đăng nhập</h2> 
     <div class="form-group"> 
      <div class="col-md-12"> 
       <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> 
        <input class="group-input" name="email" placeholder="Mã Nhân viên" class="form-control" type="text" required autofocus> 
       </div> 
      </div> 
     </div> 
     <div class="form-group"> 
      <div class="col-md-12"> 
       <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> 
        <input class="group-input" name="pass" placeholder="Password" class="form-control" type="password" required> 
       </div> 
      </div> 
     </div> 
     <div class="form-group"> 
      <div class="col-md-12"> 
       <button class="button" type="submit" name="login" class="btn btn-md btn-danger pull-right">Đăng nhập </button> 
      </div> 
     </div> 
    <!-- </fieldset>  -->
   </form> 
  </div> 
 </div>
</div>
  </center>
</div>
<?php
 include_once('../config/database.php');
  @session_start();
   // check đăng nhập
  if (isset($_SESSION['nv_admin'])) {
     header('location:index.php');
  }
  if(isset($_POST['login'])){
    $email=$_POST['email'];
    $matkhau=$_POST['pass'];
    $sql_dangnhap="select * from NhanVien where  MaNV ='$email' and MatKhau='$matkhau'";
    $run_dangnhap=mysqli_query($conn,$sql_dangnhap);
    $dangnhap=mysqli_fetch_array($run_dangnhap);
    $count_dangnhap=mysqli_num_rows($run_dangnhap);
    if($count_dangnhap==0){
      echo '<script>alert("Sai tài khoản hoặc mật khẩu ! Xin mời nhập lại .")</script>';
    }else{
      $_SESSION['nv_admin']=$dangnhap;
      
                      
      header('location:index.php');
      
    }
                
  }
?>
</body>
</html>