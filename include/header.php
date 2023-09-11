<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<style>
    .fontHeader:hover{
        text-decoration: underline;
        transition: 1s;
        background: #F26522;
        color: #2d1faf;
    }
    .iconFb:hover{
        opacity: 50%;
        transition: 1s;
    }
    .iconTw:hover{
        opacity: 50%;
        transition: 1s;
    }
    .menu {
        text-align: center;
    }
    .fontHeader {
    display: inline-block;
    line-height: 50px;
    height: 50px;
    width: 210px;

    color: white;
    }
    nav.menu li {
    display: inline-block;
    line-height: 50px;
    height: 50px;
    width: 210px;
    position: relative;
    }
    nav.menu a.ad {
    background: #131313;
    color: #fff;
    }

</style>

<div>
      <div class="container">
        <div class="row" style="">
                <div class="col-md-4">
                   <a href="index.php"> <img style="width: 44%;" class="logo" src="images/logo-utt-border.png" alt=""></a>
                </div>
                <div class="col-md-5 cantop" style="margin-top:40px; margin-left: -200px;">
                        <h5 style="font-size: 2rem; color: #ff9900;"> KÝ TÚC XÁ - ĐẠI HỌC CÔNG NGHỆ GIAO THÔNG VẬN TẢI</h5>
                </div>

                <!-- search -->
                <div class="search">
                    <input class="" type="text" placeholder="Tìm kiếm ..." style="margin-top: 55px; padding: 10px; border: 1px solid black; width:205px">
                    <button class="searchBtn" type="submit" style="background-color: #ff9900; margin-left: -38px; border: 1px solid black;">
                   <i class="fa-solid fa-magnifying-glass" style=""></i>
                   </button>
                </div>

                <!-- icon -->
                <div>
               <a class="iconFb" style="text-decoration: none;" href="https://www.facebook.com/UTT.Confessions">
            <img src="https://cdn.tgdd.vn/2020/03/GameApp/Facebook-200x200.jpg"  style="margin-top: 65px;margin-left: 15px;  width: 30px; border-radius: 30px; " alt="">
            </a>
            <a class="iconTw" href="">
                <img src="https://cdn-icons-png.flaticon.com/512/124/124021.png"  style="margin-top: 65px;margin-left: 5px;  width: 30px; border-radius: 30px" alt="">
            </a>
                </div>

                <!-- Tên tài khoản đăng nhập thành công -->
                <div style="margin-top: 5px;">
                <?php if (isset($_SESSION['sv_login'])):?>
                    <p><i class="fa-solid fa-user"></i> 
                    
                    <?php $vs=$_SESSION['sv_login'];
                     echo $vs['HoTen'];
                      ?>
                </p>
               <a onclick="return confirm('Bạn có muốn đăng xuất không?')" href="index.php?action=logout"> <p style="margin-top: -15px;"><i class="fa-sharp fa-solid fa-right-from-bracket"></i> Đăng xuất</p></a>
               <?php endif?> 
                </div>
                </div> 
            
        </div>
        <div style="" class="row">
            <div style="width: 100%; " class="">
                <nav  class="menu">
                    <ul style=" background-color: #ff9900;">
                        <li><a class="fontHeader" style="
                    font-weight: 600; background: #F26522;"  href="index.php">Trang chủ</a></li>
                                            <li><a class="fontHeader" style="
                    font-weight: 600;" href="https://utt.edu.vn/">Website trường</a></li>
                                            <li><a class="fontHeader" style="
                    font-weight: 600;" href="https://www.facebook.com/UTT.Confessions">Liên hệ</a></li>
                     <?php if (!isset($_SESSION['sv_login'])):?>
                         <li><a class="fontHeader" style="
                    font-weight: 600;" href="admin/login.php">Cán bộ đào tạo</a></li>
                    <?php endif?> 
                     <?php if (!isset($_SESSION['sv_login'])):?>
                                            <li><a class="fontHeader" style="
                    font-weight: 600;" href="index.php?action=login">Sinh viên</a></li>
                    <?php endif?> 
                    <?php if (isset($_SESSION['sv_login'])):?>
                                            <li><a class="fontHeader" style="
                    font-weight: 600;" href="index.php?action=thongtin">Thông tin</a></li>
                    <?php endif?> 
                    </ul>
                </nav>
            </div>          
        </div>
        <div style="margin-top: -16px">
            <img src="https://www.utt.edu.vn/uploads/images/slide/162729403816218746271620782958UTT_Banner-1.jpg" style="width: 100%; height: 500px; background-repeat: no-repeat; background-position: center;"  alt="">
        </div> 
    
</div> <br> <br>

 
