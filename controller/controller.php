<?php include_once("model/model.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>controller.php</title>
</head>

<body>
<?php
	class Controller {
		
		private $model;
		
		public function __construct() {
			$this->model = new Model();
			
		}
		
		public function invoke() {
			$productList = $this->model->getProductList();
			$DienThoai = $this->model->getDienThoai();
			$MayTinhBang = $this->model->getMayTinhBang();
			$MayTinhXachTay = $this->model->getMayTinhXachTay();
			$PhuKien = $this->model->getPhuKien();
			$TinTuc = $this->model->getTinTuc();
			$TittleDienThoai = $this->model->getTittleDienThoai();
			$VeVienThongA = $this->model->getVeVienThongA();
			$VeSanPham = $this->model->getVeSanPham();
			$VeChinhSachHoTro = $this->model->getVeChinhSachHoTro();
			$VeDichVu = $this->model->getVeDichVu();
			$DropDienThoai = $this->model->getDropDienThoai();
			$DropTablet = $this->model->getDropTablet();
			$DropLaptop = $this->model->getDropLaptop();
			$DropPhuKien = $this->model->getDropPhuKien();
			
			
			
			
			include 'view/VienThongA.php';
			
		}
		
		
		
	}
?>
</body>
</html>
