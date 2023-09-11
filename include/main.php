 <div class="container">
        <div class="row">
            <div class=" nenbac" style="margin-left: -20px;">
                    <nav id="menu">      
                        <ul>
                            <h3 style="margin-top:20px;"> DANH MỤC </h3> 
                            <?php if (isset($_SESSION['sv_login'])):?>
                                    <li><a href="index.php?action=thongtin">Thông tin cá nhân</a></li>
                                    <?php endif?> 
                                    <li><a href="index.php?action=capnhapthongtin">Cập nhật thông tin</a></li>
                                    <li><a href="index.php?action=dkphong">Đăng ký phòng</a></li>
                                    <li><a href="index.php?action=chuyenphong">Đăng kí chuyển phòng</a></li>
                                    <?php if(isset($row['MaPhong'])) ?><li><a href="index.php?action=traphong">Đăng ký trả phòng</a></li>
                                   
                                    <li><a href="index.php?action=phongdango">Phòng hiện tại</a></li>
                                    <li><a href="index.php?action=xemthongbao">Xem thông báo</a></li>
                                    <?php if (isset($_SESSION['sv_login'])):?>
                                    <li><a onclick="return confirm('Bạn có muốn đăng xuất không?')" href="index.php?action=logout">Đăng xuất</a></li>
                                    <?php endif?> 
                        </ul>        
                      </nav>
            </div>
            <div class="col-8">
                <?php include_once('include/content.php'); ?>
            </div>
            <div class="col-2 nenbac">
               <div >   
                    <img style="margin-top:20px;" src="images/logo-utt-border.png" width="160" 
                         alt="Activities Board">
                    <center><h2 style="margin-top:20px;"><a href="https://utt.edu.vn/utt/tin-tuc-n3.html" class="no_underline">
                        Tin tức UTT</center>
                    </a></h2>
                    <p class="news_item">Ký Túc Xá sẽ mở cửa phục vụ sinh viên ....</p>
                </div>

            </div>
        </div>        
    </div> 
    <br>