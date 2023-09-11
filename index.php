<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
	<link rel="stylesheet" href="css.css">
	<script src="jquery/jquery.js"></script>
	<script src="bootstrap4/js/bootstrap.js"> </script>

	<style>
		/* contact */
		#contact {
			background-color: #252429;
		}

		.contact__link {
			display: flex;
		}

		.contact__location {
			/* height: 350px; */
		}

		.contact__list {
			list-style: none;
			color: #bbb;
			margin-left: 60px;
		}

		.contact__item {
			display: flex;
			font-size: 1rem;
			padding: 12px 0;
		}

		.contact__item:first-child {
			margin-top: 50px;
		}

		.contact__section {
			flex: 1;
			margin-right: 20px;
			display: flex;
			align-items: center;
		}

		.contact__data {
			display: flex;
			align-items: center;
			line-height: 2.4rem;
			width: 300px;
			color: #bbb;
			text-decoration: none;
			cursor: pointer;
		}

		.contact__data i {
			margin-right: 8px;
		}

		.contact__data:hover {
			color: var(--primary-color);
		}

		.contact__location {
			position: relative;
		}

		.location-title {
			margin: 10px 0;
		}

		.location-title a {
			color: #bbb;
			font-size: 1rem;
			font-weight: 100;
			text-decoration: none;
		}

		.location-title span {
			position: absolute;
			top: 16px;
			right: -25%;
			color: var(--primary-color);
			font-size: 1rem;
			font-weight: 600;
		}

		.location-title:hover a {
			color: var(--primary-color);
		}

		.contact__location iframe {
			margin: 40px 0 18px 0;
		}

		/* footer */

		#footer {}

		.footer__title {
			padding: 18px 0;
			background-color: black;
			font-size: 1.5rem;
			font-weight: 100;
			text-align: center;
			color: rgba(255, 255, 255, 0.501);
		}

		.footer__clear {
			height: 30px;
		}
	</style>
</head>

<body>
	<?php session_start();
	ob_start();
	include_once('config/database.php');
	include_once('include/header.php');
	include_once('include/main.php');
	?>

	<div class="" id="contact">

		<div class="grid wide container">

			<div class="row">

				<div class="col c-5 contact__link">
					<ul class="contact__list">
						<li class="contact__item">
							<span class="contact__section">Địa chỉ:</span>
							<span class="contact__data">
								<i class="ti-location-pin"></i>
								Số 54 Triều Khúc Thanh Xuân Hà Nội
							</span>
						</li>
						<li class="contact__item">
							<span class="contact__section">Email:</span>
							<a href="mailto:sinhvien@utt.edu.vn" class="contact__data">
								<i class="ti-email"></i>
								sinhvien@utt.edu.vn
							</a>
						</li>
						<li class="contact__item">
							<span class="contact__section">Số điện thoại:</span>
							<a href="tel:0886223506" class="contact__data">
								<i class="ti-mobile"></i>
								0886223506
							</a>
						</li>
					</ul>
				</div>

				<div class="col c-5 contact__link">
					<ul class="contact__list">
						<li class="contact__item">
							<span class="contact__section">Website:</span>
							<a href="https://www.utt.edu.vn/" class="contact__data">
								<i class="ti-world"></i>
								https://www.utt.edu.vn/
							</a>
						</li>
						<li class="contact__item">
							<span class="contact__section">Facebook:</span>
							<a href="https://www.facebook.com/utt.vn" class="contact__data">
								<i class="ti-facebook"></i>
								Đại học Công nghệ Giao thông Vận tải
							</a>
						</li>
						<li class="contact__item">
							<span class="contact__section">Instagram:</span>
							<a href="https://www.instagram.com/explore/locations/276551764/ai-hoc-cong-nghe-giao-thong-van-tai/" class="contact__data">
								<i class="ti-instagram"></i>
								Đại học Công nghệ Giao thông Vận tải
							</a>
						</li>
					</ul>
				</div>

				<div class="col c-2 contact__location">
					<h3 class="location-title">
						<!-- <a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+C%C3%B4ng+ngh%E1%BB%87+Giao+th%C3%B4ng+V%E1%BA%ADn+t%E1%BA%A3i/@20.984792,105.7966433,17z/data=!3m1!4b1!4m5!3m4!1s0x3135acc6bdc7f95f:0x58ffc66343a45247!8m2!3d20.984792!4d105.798832?hl=vi">Chỉ đường</a> -->

					</h3>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.1956757379703!2d105.79664331485365!3d20.984791986022252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc6bdc7f95f%3A0x58ffc66343a45247!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgR2lhbyB0aMO0bmcgVuG6rW4gdOG6o2k!5e0!3m2!1svi!2s!4v1666150517763!5m2!1svi!2s" width="450" height="225" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>

			</div>

		</div>

	</div>

	<div id="footer">
		<h2 class="footer__title">Copyright © 2022 Đại học Công nghệ Giao thông vận tải</h2>
		

		</div>
	</div>
</body>

</html>