<?php	
 	session_start();
	ob_start();
	include_once('../config/database.php');
	if(isset($_GET['action'])){		// get :ghi du lieu ra man hinh
	$action = $_GET['action'];
		switch ($action) {
			case 'capnhapthongtin':
			    include_once('capnhapthongtin.php');
				break;
			case 'dangkyphong1':
			    include_once('dangkyphong.php');
				break;
			case 'dangkychuyenphong':
			    include_once('dangkychuyenphong.php');
				break;
			case 'traphong':
			    include_once('traphong.php');
				break;
			default:
				
				break;
		}
	}
		
	