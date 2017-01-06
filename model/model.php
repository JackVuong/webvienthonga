<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>ĐỒ ÁN WEB - VIỄN THÔNG A</title>
</head>

<body>
<?php
	class Model {
	
		public function __construct() {

		}
		public function connectDatabase() {
			$db_server = mysqli_connect("localhost", "root","","vienthonga");
			if (!$db_server) die("Unable to connect to MySQL: " . mysql_error() . "<br/>");
			mysqli_query($db_server,"SET NAMES 'UTF8'");
			return $db_server;
		}



		public function getProductList() {
			$link = $this->connectDatabase();
			$result = mysqli_query($link,"SELECT * FROM dienthoai");
			if ($result) {
				while($row = mysqli_fetch_assoc($result))
					$productList[] = $row;
				return $productList;
			}
			else {
				echo "<strong>Database access failed.</strong><br/>";
				return NULL;
			}
		}
		
		public function getDienThoai() {
			$link = $this->connectDatabase();
			$result = mysqli_query($link,"SELECT * FROM dienthoaichinh");
			if ($result) {
				while($row = mysqli_fetch_assoc($result))
					$productList[] = $row;
				return $productList;
			}
			else {
				echo "<strong>Database access failed.</strong><br/>";
				return NULL;
			}
		}
		
		public function getMayTinhBang() {
			$link = $this->connectDatabase();
			$result = mysqli_query($link,"SELECT * FROM maytinhbang");
			if ($result) {
				while($row = mysqli_fetch_assoc($result))
					$productList[] = $row;
				return $productList;
			}
			else {
				echo "<strong>Database access failed.</strong><br/>";
				return NULL;
			}
		}
		
		public function getMayTinhXachTay() {
			$link = $this->connectDatabase();
			$result = mysqli_query($link,"SELECT * FROM laptop");
			if ($result) {
				while($row = mysqli_fetch_assoc($result))
					$productList[] = $row;
				return $productList;
			}
			else {
				echo "<strong>Database access failed.</strong><br/>";
				return NULL;
			}
		}
		public function getPhuKien() {
			$link = $this->connectDatabase();
			$result = mysqli_query($link,"SELECT * FROM phukien");
			if ($result) {
				while($row = mysqli_fetch_assoc($result))
					$productList[] = $row;
				return $productList;
			}
			else {
				echo "<strong>Database access failed.</strong><br/>";
				return NULL;
			}
		}
		
		public function getTinTuc() {
			$link = $this->connectDatabase();
			$result = mysqli_query($link,"SELECT * FROM tintuc");
			if ($result) {
				while($row = mysqli_fetch_assoc($result))
					$productList[] = $row;
				return $productList;
			}
			else {
				echo "<strong>Database access failed.</strong><br/>";
				return NULL;
			}
		}
		public function getTittleDienThoai() {
			$link = $this->connectDatabase();
			$result = mysqli_query($link,"SELECT * FROM tittledienthoai");
			if ($result) {
				while($row = mysqli_fetch_assoc($result))
					$productList[] = $row;
				return $productList;
			}
			else {
				echo "<strong>Database access failed.</strong><br/>";
				return NULL;
			}
		}
		public function getVeVienThongA() {
			$link = $this->connectDatabase();
			$result = mysqli_query($link,"SELECT * FROM vevienthonga");
			if ($result) {
				while($row = mysqli_fetch_assoc($result))
					$productList[] = $row;
				return $productList;
			}
			else {
				echo "<strong>Database access failed.</strong><br/>";
				return NULL;
			}
		}
		public function getVeSanPham() {
			$link = $this->connectDatabase();
			$result = mysqli_query($link,"SELECT * FROM vesanpham");
			if ($result) {
				while($row = mysqli_fetch_assoc($result))
					$productList[] = $row;
				return $productList;
			}
			else {
				echo "<strong>Database access failed.</strong><br/>";
				return NULL;
			}
		}
		public function getVeChinhSachHoTro() {
			$link = $this->connectDatabase();
			$result = mysqli_query($link,"SELECT * FROM vechinhsachhotro");
			if ($result) {
				while($row = mysqli_fetch_assoc($result))
					$productList[] = $row;
				return $productList;
			}
			else {
				echo "<strong>Database access failed.</strong><br/>";
				return NULL;
			}
		}
		public function getVeDichVu() {
			$link = $this->connectDatabase();
			$result = mysqli_query($link,"SELECT * FROM vedichvu");
			if ($result) {
				while($row = mysqli_fetch_assoc($result))
					$productList[] = $row;
				return $productList;
			}
			else {
				echo "<strong>Database access failed.</strong><br/>";
				return NULL;
			}
		}
		
		public function getDropDienThoai() {
			$link = $this->connectDatabase();
			$result = mysqli_query($link,"SELECT * FROM dropdienthoai");
			if ($result) {
				while($row = mysqli_fetch_assoc($result))
					$productList[] = $row;
				return $productList;
			}
			else {
				echo "<strong>Database access failed.</strong><br/>";
				return NULL;
			}
		}
		public function getDropTablet() {
			$link = $this->connectDatabase();
			$result = mysqli_query($link,"SELECT * FROM droptablet");
			if ($result) {
				while($row = mysqli_fetch_assoc($result))
					$productList[] = $row;
				return $productList;
			}
			else {
				echo "<strong>Database access failed.</strong><br/>";
				return NULL;
			}
		}
		public function getDropLaptop() {
			$link = $this->connectDatabase();
			$result = mysqli_query($link,"SELECT * FROM droplaptop");
			if ($result) {
				while($row = mysqli_fetch_assoc($result))
					$productList[] = $row;
				return $productList;
			}
			else {
				echo "<strong>Database access failed.</strong><br/>";
				return NULL;
			}
		}
		public function getDropPhuKien() {
			$link = $this->connectDatabase();
			$result = mysqli_query($link,"SELECT * FROM dropphukien");
			if ($result) {
				while($row = mysqli_fetch_assoc($result))
					$productList[] = $row;
				return $productList;
			}
			else {
				echo "<strong>Database access failed.</strong><br/>";
				return NULL;
			}
		}
		
		
		
		
		
		
		
	}
	
	
	
	
?>
</body>
</html>
