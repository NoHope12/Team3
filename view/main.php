<h1> Trang Ký Túc Xá - Đại Học Công Nghệ Giao Thông Vận Tải </h1>
<?php if (isset($_SESSION['sv_login'])) {
		$vs=$_SESSION['sv_login'];
		echo "<h6>Xin chào sinh viên : ".$vs['HoTen']."</h6>";
} ?>