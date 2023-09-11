  <?php 
   
    if(isset($_POST['sv_capnhaptt'])){  
        $masv=$_POST['masv'] ;
        $ns=$_POST['ns'];
        $dc=$_POST['dc'];
        $sdt=$_POST['sdt'];
        $pass=$_POST['pass'];
        $sex=$_POST['sex'];
        
        if(isset($_POST['sv_capnhaptt'])){
          $sql="UPDATE `sinhvien` SET GioiTinh='$sex',NgaySinh='$ns',DiaChi='$dc',SDT=$sdt, MatKhau=$pass where MaSV=$masv";
          $rs=mysqli_query($conn,$sql);
          if($rs){
            header('location:../index.php?action=capnhapthongtin&tb=ok');

          }else{
            header('location: ../index.php?action=capnhapthongtin&tb=loi');
           }
        }
      }
  ?>