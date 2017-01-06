<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap Core CSS -->
    <link href="view/bootstrap-3.3.6/dist/js/bootstrap.min.js" rel="stylesheet">
    <link href="view/bootstrap-3.3.6/dist/css/bootstrap.css" rel="stylesheet">

    
    <link href="view/css/portfolio-item.css" rel="stylesheet">
	<link href="view/css/vienthonga.css" rel="stylesheet">

</head>
<body>
	<header id ="header">
    	
    <!-- Fixed navbar -->
    <nav class="navbar-fixed-top ">
      <div class="container">
        <div class="navbar-header">
        
          <a class="navbar-brand logo" href="#">

          </a>
        </div>
        <div class="navbar-collapse">
         
			<ul class="xoa-cham-list custom-nav drop" style="width: 939px !important;position: relative;left: 135px;">
            	
                	<li class="dienThoai marginRight" style="width:69px;">
                        <a href="#">
                            <i class="icon_dienThoai "></i> <span>Điện thoại</span>
                        </a>
                        
                        <ul class="drop">	
                        		
                                 <?php
                    					foreach($DropDienThoai as $dt)
									{
										echo '<div>
									
										
										<li><a href="#">'.$dt['tendropdienthoai'].'</a></li>
										
										
										
									
                       			 	
                   						 </div>';
									}
             				    ?>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                        </ul>
             
                    </li>
            
       
                
                	<li class="dienThoai marginRight">
                        <a href="#"  >
                            <i class="icon_tablet "></i> <span style="margin-left: 7px;" >Tablet</span>
                        </a>
                           
                            <ul class="drop ">	
                        		<?php
                    					foreach($DropTablet as $tb)
									{
										echo '<div>
									
										
										<li><a href="#">'.$tb['tendroptablet'].'</a></li>
										
										
										
									
                       			 	
                   						 </div>';
									}
             				    ?>
                              
							</ul>
                      	     
                            
                     </li>
              
               
                	<li class="dienThoai marginRight" >
                        <a href="#" >
                            <i class="icon_laptop "></i> <span style="margin-left:6px;">Laptop</span>
                        </a>
                            
                             <ul class="drop ">	
                        		<?php
                    					foreach($DropLaptop as $lt)
									{
										echo '<div>
									
										
										<li><a href="#">'.$lt['tendroplaptop'].'</a></li>
										
										
										
									
                       			 	
                   						 </div>';
									}
             				    ?>
                              
                       		 </ul>
                            
                            
                       </li>
               
                
                	<li class="dienThoai marginRight">
                        <a href="#"  >
                            <i class="icon_phukien "></i> <span >Phụ Kiện</span>
                        </a>
                            
                             <ul class="drop ">	
                        		<?php
                    					foreach($DropPhuKien as $pk)
									{
										echo '<div>
									
										
										<li><a href="#">'.$pk['tendropphukien'].'</a></li>
										
										
										
									
                       			 	
                   						 </div>';
									}
             				    ?>
                              
                        	</ul>
                            
                            
                       </li>
          
              
                	<li class="dienThoai marginRight">
                        <a href="#"  >
                            <i class="icon_doitra "></i> <span>đổi trả</span>
                        </a>
                            
                       </li>
             
                 
                	<li class="dienThoai marginRight" style="width:69px;">
                        <a href="#">
                            <i class="icon_khuyenmai "></i> <span>khuyến mãi</span>
                        </a>
                            
                       </li>
              
                 
                	<li class="dienThoai marginRight">
                        <a href="#" >
                            <i class="icon_tragop "></i> <span >trả góp</span>
                        </a>
                            
                       </li>
            
              
                	<li class="dienThoai marginRight">
                        <a href="#"  >
                            <i class="icon_sinhvien "></i> <span >sinh viên</span>
                        </a>
                            
        
       
                	<li class="dienThoai marginRight" style="width:69px;">
                        <a href="#">
                            <i class="icon_congnghe "></i> <span >công nghệ</span>
                        </a>
                            
                       </li>
           
                
                	<li class="dienThoai marginRight" style="width:69px;">
                        <a href="#" >
                            <i class="icon_uudaivip "></i> <span>ưu đãi vip</span>
                        </a>
                            
                       </li>
              
                	
                	
                
                    
            </ul>
            
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
			<form>
			<div class="form-group">
           
				<div class="col-xs-4 searchCol" style="position: relative; top: -15px;">
		
					<input class="form-control" type="text" placeholder="Chọn chi nhánh để xem giá và khuyến mãi"><i class = "icon_search"></i>
				</div>
               
				<div class="col-xs-4" style="position: relative; top: -15px">
					<select name="cbChiNhanh" id="cbChonChiNhanh">
  							   <option value="" selected>Chọn chi nhánh để xem giá và khuyến mãi</option>
  							   <option value="NAM">MIỀN NAM</option>
    						   <option value="TRUNG">MIỀN TRUNG</option>
   							   <option value="BAC">MIỀN BẮC</option>
 				    </select>
				</div>
			</div>
		  </form>
          
          
          
	</div> <!-- div end container-->
 
    </header>
  
    

    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
            	<div class="slider">
                	
                     <!-- Main image-->
                    <img src="view/picVTA/100000_bao-hiem-trom-cuop-760x325.jpg" alt="image">
                    <input type="radio" name="slide_switch" id="id1" checked>
                    <label for="id1" style="border:1px solid #999;width: 152px; margin-top:10px; border-radius:5px;text-align:center;">
                    <p style="margin-top:7px; font-size:12px;"> 
                    Lễ to sắm táo </br>bảo hiểm chu đáo</p>
                    </label>
                    
                    <img src="view/picVTA/100000_le-to-sam-tao-bao-hiem-chu-dao-760x325.jpg" alt="image">
                    <input type="radio" name="slide_switch" id="id2">
                    <label for="id2"  style="border:1px solid #999;width: 152px;margin-top:10px; border-radius:5px;text-align:center;">
                     <p style="margin-top:7px; font-size:12px;"> 
                    Mua hàng vi diệu </br>voucher miễn phí</p>
                    </label>
                    
                    <img src="view/picVTA/100000_mua-hang-vi-dieu-760x325.jpg" alt="image">
                    <input type="radio" name="slide_switch" id="id3">
                    <label for="id3"  style="border:1px solid #999;width: 152px;margin-top:10px; border-radius:5px;text-align:center;">
                     <p style="margin-top:7px; font-size:12px;"> 
                    Mua ngay Samsung </br>ưu đãi cực đỉnh</p>
                    </label>
                    
                    <img src="view/picVTA/100000_samsung-tai-tro-lon-10-ty-v2-760x325.jpg" alt="image">
                    <input type="radio" name="slide_switch" id="id4">
                    <label for="id4"  style="border:1px solid #999;width: 152px;margin-top:10px; border-radius:5px;text-align:center;">
                     <p style="margin-top:7px; font-size:12px;"> 
                    Lãnh lương tháng </br>xả láng mua hàng</p>
                    </label>
                    
                    <img src="view/picVTA/100000_lanh-luong-thang-760x325.jpg" alt="image">
                    <input type="radio" name="slide_switch" id="id5">
                    <label for="id5"  style="border:1px solid #999;width: 152px;margin-top:10px; border-radius:5px;text-align:center;">
                     <p style="margin-top:7px; font-size:12px;"> 
                    Tặng miẽn phí </br>bảo hiểm trộm cướp</p>
                    </label
                ></div>
          
            </div>

            <div class="col-md-4">	
            	<div class="qc1" style="margin-bottom:10px;">
                <a href="#"><img src="view/picVTA/100000_ngay-vang-visa-400x200.jpg" style="height:185px;width: 367px;
"></a>
                </div>
                <a href="#"><img src="view/picVTA/100000_dau-gia-nguoc-iphone-6s-400x200.jpg" style="height:185px;width: 367px;
"></a>
             
            </div>

        </div>
        <!-- /.row -->


	

		<!-- Sản phẩm và tin tức -->
         <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
            	<table>
                	<tr>
                    	<td>
                        <a href="#"><img src="view/picVTA/news.PNG" style=" position: relative; float: left;top: 16px;"> 
                 		<p style="border: none;font-size: 18px;text-transform: uppercase;font-weight: 700;padding: 15px 0 5px 0; float:left;">Sản phẩm mới</p></a>
                        <a href="#"><img src="view/picVTA/news1.PNG" style=" position: relative; float: left;top: 16px;left: 33px;"> 
                        <p style="border: none;font-size: 18px;position:relative;text-transform: uppercase;font-weight: 700;padding: 15px 0 5px 0; float:left;left: 33px;">Sản phẩm bán chạy</p></a>
                        </td>
                    </tr>
                </table>
                
                
                
             
          
          
			<div style="float:left; width:100%;">
             <?php
                    	foreach($productList as $sp)
						{
							echo '<div class="col-sm-3 col-xs-6" style=" border: 1px solid #999; border-radius:7px;">
									<div>
                        			<center>
										<a href=""><img class="img-responsive portfolio-item" src="'.$sp['hinh'].'" alt=""></a>
									</center>
									<div>
										<center>
										<h4><a href="#">'.$sp['tendienthoai'].'</a></h4>
										<h4 style="color:red">'.$sp['giadienthoai'].'</h4>
									 	
										</center>
									</div>
									</div>
                       			 	
                   				 </div>';
						}
                    ?>
             </div>
          
          
          
          
          
          
          
  
            </div>
             
            <div class="col-md-4"  >	
            	<div class="qc1" style="margin-bottom:10px; "  >
                 <a href="#"><img src="view/picVTA/TinTuc.PNG" style="width: 372px;" ></a>
                 
                 <div  style="float:left; width:100%; border: 1px solid #c8c9cb;position: relative; left: 5px;">
             <?php
                    	foreach($TinTuc as $tt)
						{
							echo '<div style="float:left;">
									
										
										<a href="#">'.$tt['tentintuc'].'</a></br>
										<hr size="600px;">
										
										
									
                       			 	
                   				 </div>';
						}
               ?>
             </div>
                   
                </div>
               <div class="tinTucRight" >
                            
               <!-- End tin tức bên phải -->                 
             
            </div>

        </div>
            </div>
            
            
            
            
            
            <!-- Tin tức bên phải -->
           
        
        
		<!-- END Sản phẩm và tin tức -->



















        <!-- Related Projects Row --><!-- Sản phẩm chính di động-->

        <div class="row" style="position: relative;left: 29px; width:98%">

            <div class="col-lg-12" style="height: 52px; border-radius:7px; background-color:#F3F3F3;margin-top: 48px;">
                <table>
                	<tr>
                    	<td>
                         	<img src="view/picVTA/HeadDienThoai.PNG" style=" position: relative; float: left;top: 5px;left: -15px;"> 
                          
        
                        	<div class="tittle1">
                            <a href="#" style=" font-size:14px;color:#666"><i>Apple /</i></a>
                       		<a href="#" style=" font-size:14px;color:#666"><i> SamSung /</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i> Nokia /</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i> Sony /</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i> OPPO /</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i> Asus /</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i> HTC /</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i> LG /</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i> Lenovo/</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i> Mobiistar </i></a>
                            </div>
                        
                        </td>
                    </tr>
                </table>
            </div>

       <div  style="float:left; width:100%;">
             <?php
                    	foreach($DienThoai as $sp)
						{
							echo '<div class="col-sm-3 col-xs-6" style=" border: 1px solid #999; border-radius:7px;">
									<div>
                        			<center>
										<a href=""><img class="img-responsive portfolio-item" src="'.$sp['hinh1'].'" alt=""></a>
									</center>
									<div>
										<center>
										<h4><a href="#">'.$sp['tendienthoai1'].'</a></h4>
										<h4 style="color:red">'.$sp['giadienthoai1'].'</h4>
									 	'.$sp['chitietdienthoai1'].'
										</center>
									</div>
									</div>
                       			 	
                   				 </div>';
						}
                    ?>
             </div>
        </div>
        <!-- /.row -->
<!-- END Sản phẩm chính di động-->














<!-- Sản phẩm máy tính bảng-->



  <div class="row" style="position: relative;left: 29px; width:98%">

            <div class="col-lg-12" style="height: 52px; border-radius:7px; background-color:#F3F3F3;margin-top: 48px;">
                <table>
                	<tr>
                    	<td>
                         	<img src="view/picVTA/HeadMayTinhBang.PNG" style=" position: relative; float: left;top: 5px;left: -15px;"> 
                        	<div class="tittle2">
                            <a href="#" style=" font-size:14px;color:#666"><i>Máy tính bảng Ipad /</i></a>
                       		<a href="#" style=" font-size:14px;color:#666"><i>Máy tính bảng SamSung /</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i>Máy tính bảng Asus /</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i>Máy tính bảng Lenovo /</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i>Máy tính bảng HP </i></a>
             
            </div>
                        
                        </td>
                    </tr>
                </table>
            </div>

           <div style="float:left; width:100%;">
             <?php
                    	foreach($MayTinhBang as $sp)
						{
							echo '<div class="col-sm-3 col-xs-6" style=" border: 1px solid #999; border-radius:7px;">
									<div>
                        			<center>
										<a href=""><img class="img-responsive portfolio-item" src="'.$sp['hinh3'].'" alt=""></a>
									</center>
									<div>
										<center>
										<h4><a href="#">'.$sp['maytinhbang'].'</a></h4>
										<h4 style="color:red">'.$sp['giamaytinhbang'].'</h4>
									 	'.$sp['chitietmaytinhbang'].'
										</center>
									</div>
									</div>
                       			 	
                   				 </div>';
						}
                    ?>
             </div>


        </div>









<!-- END Sản phẩm máy tính bảng-->








<!-- Sản phẩm máy tính xách tay-->

 <div class="row" style="position: relative;left: 29px; width:98%">

            <div class="col-lg-12" style="height: 52px; border-radius:7px; background-color:#F3F3F3;margin-top: 48px;">
                <table>
                	<tr>
                    	<td>
                         	<img src="view/picVTA/HeadMayTinhXachTay.PNG" style=" position: relative; float: left;top: 5px;left: -15px;"> 
                        	<div class="tittle3">
                            <a href="#" style=" font-size:14px;color:#666"><i>Laptop Apple /</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i>Laptop Acer /</i></a>
                       		<a href="#" style=" font-size:14px;color:#666"><i>Laptop Asus /</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i>Laptop Dell /</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i>Laptop Lenovo /</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i>Laptop HP </i></a>
             
                           </div>
                        
                        </td>
                    </tr>
                </table>
            </div>

          <div  style="float:left; width:100%;">
             <?php
                    	foreach($MayTinhXachTay as $sp)
						{
							echo '<div class="col-sm-3 col-xs-6" style=" border: 1px solid #999; border-radius:7px;">
									<div>
                        			<center>
										<a href=""><img class="img-responsive portfolio-item" src="'.$sp['hinh2'].'" alt=""></a>
									</center>
									<div>
										<center>
										<h4><a href="#">'.$sp['tenlaptop'].'</a></h4>
										<h4 style="color:red">'.$sp['gialaptop'].'</h4>
									 	'.$sp['chitietlaptop'].'
										</center>
									</div>
									</div>
                       			 	
                   				 </div>';
						}
                    ?>
             </div>


        </div>



<!-- END Sản phẩm máy tính xách tay-->







<!-- Linh phụ kiện-->
 <div class="row" style="position: relative;left: 29px; width:98%">

            <div class="col-lg-12" style="height: 52px; border-radius:7px; background-color:#F3F3F3;margin-top: 48px;">
                <table>
                	<tr>
                    	<td>
                         	<img src="view/picVTA/HeadLinhKien.PNG" style=" position: relative; float: left;top: 5px;left: -15px;"> 
                        	<div class="tittle4">
                            <a href="#" style=" font-size:14px;color:#666"><i>Bao Da /</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i>Ốp Lưng /</i></a>
                       		<a href="#" style=" font-size:14px;color:#666"><i>Sạc Dự Phòng /</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i>Tai Nghe /</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i>Tai Nghe Bluetooth /</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i>Đồng Hồ Thông Minh /</i></a>
             				<a href="#" style=" font-size:14px;color:#666"><i>Chuột /</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i>USB /</i></a>
                            <a href="#" style=" font-size:14px;color:#666"><i>Loa </i></a>
            </div>
                        
                        </td>
                    </tr>
                </table>
            </div>

            <div  style="float:left; width:100%;">
             <?php
                    	foreach($PhuKien as $sp)
						{
							echo '<div class="col-sm-3 col-xs-6" style=" border: 1px solid #999; border-radius:7px;">
									<div>
                        			<center>
										<a href=""><img class="img-responsive portfolio-item" src="'.$sp['hinh4'].'" alt=""></a>
									</center>
									<div>
										<center>
										<h4><a href="#">'.$sp['tenphukien'].'</a></h4>
										<h4 style="color:red">'.$sp['giaphukien'].'</h4>
									 	'.$sp['chitietphukien'].'
										</center>
									</div>
									</div>
                       			 	
                   				 </div>';
						}
                    ?>
             </div>



        </div>
<!-- END linh phụ kiện-->









        <hr>









            <div class="row">
                <div class="col-lg-4">
                    <div class="clearfix suachua">
                        <h3>Sửa chữa bảo hành</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="">
                                <a href=""><img src="view/picVTA/vcare.PNG" class="tilt2"> </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="">
                                <a href=""><img src="view/picVTA/baohanh.PNG" class="tilt2"> </a>
                            </div>
                        </div>
                    </div>
                </div>

 <div class="col-lg-8">
                    <div class="clearfix suachua">
                        <h3>Dịch vụ mạng</h3>
                    </div>
                    <!--yeh -->
                    <!--end yeh -->
                   
                           <div class="">
                                <a href=""><img src="view/picVTA/theDienThoai.PNG" class="tilt"> </a>
                                <a href=""><img src="view/picVTA/simSo.PNG" class="tilt"> </a>
								<a href=""><img src="view/picVTA/thanhtoan1.PNG" class="tilt"> </a>
                                <a href=""><img src="view/picVTA/thanhtoan2.PNG" class="tilt"> </a>
                                <a href=""><img src="view/picVTA/theCao.PNG" class="tilt"> </a>
                                 
                                 
                                 
                                 
                            </div>
                       
                           
                           </div>
                      
                 
                </div>
           










<!--trên footer-->

<div class="above-footer sidepan">
    <div class="container ">
        <ul class="clearlist ">
            <li class=" morph "><a href="" ><img src="view/picVTA/Refresh-32.png"> Đổi trả hàng trong vòng 30 ngày</a></li>
            <li class=" morph"><a href="" ><i class="icon_fgiaohang"><img src="view/picVTA/truck-32.png" ></i> Giao hàng toàn quốc</a></li>
            <li class=" morph"><a href="" ><i class="icon_fthanhtoan"><img src="view/picVTA/E-commerce_and_Shopping-43-32.png" ></i> Thanh toán khi nhận hàng</a></li>
        </ul>
    </div>
</div>

<!--END trên footer-->





        <!-- Footer -->
        <footer class="row_footer" style="background-color:#DADADA; width:100% !important;">
    <div class="footer-content" style="width:100% !important;">
        <div class="container" style="height: 800px;width:100% !important;">
            <div class="row" style="  margin-top: -22px;">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-4">
                            <h3>Về Viễn Thông A</h3>
                            <ul class="xoa-cham-list">
                            
                            
                            <div>
            				 <?php
                    			foreach($VeVienThongA as $vt)
							{
							echo '<div>
									
										 <li><a href="">'.$vt['tenvevienthonga'].'</a></br></li>
								 	
                   				 </div>';
							}
                   				 ?>
            				 </div>
                            
                         
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h3>Sản phẩm</h3>
                            <ul class="xoa-cham-list">
                            
                            
                            
                             <div>
            				 <?php
                    			foreach($VeSanPham as $sp)
							{
							echo '<div>
									
										 <li><a href="">'.$sp['tenvesanpham'].'</a></br></li>
								 	
                   				 </div>';
							}
                   				 ?>
            				 </div>
                            
                            
                            
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h3>Chính sách &amp; hỗ trợ</h3>
                            <ul class="xoa-cham-list">
                             <div>
            				 <?php
                    			foreach($VeChinhSachHoTro as $ht)
							{
							echo '<div>
									
										 <li><a href="">'.$ht['tenvechinhsachhotro'].'</a></br></li>
								 	
                   				 </div>';
							}
                   				 ?>
            				 </div>
                            
                           
                            </ul>
                        </div>
                        
                        <div class="row">
                        <div class="col-sm-4 "  style="position:relative;top:94px;left:18px">
                            <a href="" title="Giải thưởng">
                                <h3>Giải thưởng</h3>
                                <i class = "icon_cup"></i>
                                <p style="color:#999">
                                    Viễn thông A <br> đạt Top 500 Doanh nghiệp<br> lớn nhất Việt Nam
                                </p>
                            </a>
                        </div>
                        
                        
                       <div class="col-sm-4" style="position:relative;top:94px;">
                            <h3>Dịch vụ</h3>
                            <ul class="xoa-cham-list">
                            <div>
            				 <?php
                    			foreach($VeDichVu as $dv)
							{
							echo '<div>
									
										 <li><a href="">'.$dv['tenvedichvu'].'</a></br></li>
								 	
                   				 </div>';
							}
                   				 ?>
            				 </div>
                            
                            </ul>
                        </div> 
                        
                        <div class="col-sm-4" style="position:relative;top:94px;">
                            <div class="footer-ico-phone">
                                <div class="ico-phone">
                                     <i class = "icon_phone"></i>
                                </div>
                                <div class="phone">1900 54 54 46</div>
                            </div>
                            <ul class="footer-tuvan xoa-cham-list" style="position: relative; top: -46px; height: 190px;">
                                <li>
                                    <h4>Tư vấn &amp; mua hàng online</h4>
                                    <span>(nhấn phím 1)</span>
                                </li>

                                <li>
                                    <h4>Mua trả góp online</h4>
                                    <span>(nhấn phím 2)</span>
                                    <hr style="width:200px;border-color:#000;"></hr>
                                </li>
								
                                <li>
                                    <h4>Khiếu nại &amp; chăm sóc khách hàng</h4>
                                    <span>(nhấn phím 0)</span>
                                </li>
                            </ul>
                        </div>
                        
                        
                        
                    <div class="col-md-4" style="position: relative; top: -420px; left: 784px;">
                    <div class="newsletter" style="    position: relative; width: 348px;">
                        <p style="font-size:12px">Đăng ký nhận tin khuyến mãi hàng tuần từ Viễn Thông A</p>
                        <form action="">
                            <div class="input-group">
                                <input type="email" class="newsletter-form" placeholder="Địa chỉ email" id="email">
                                <span class="newsletter-button">
                                    <button class="" type="button" onclick="ga(&#39;send&#39;, &#39;event&#39;, { eventCategory: &#39;Email&#39;, eventAction: &#39;Signup&#39;, eventLabel: &#39;Footer&#39;});RegisterPromotion()">Gửi</button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <h3>Liên hệ</h3>
                    <ul class="xoa-cham-list lienhe" style=" position: relative;top: -29px;">
                        <li><a href=""> <i class = "icon_location"></i>328 - 330 Đường 3/2, Phường 12, Quận 10, TP.HCM</a></br></li>
                        <li><i class = "icon_phoneLH"></i><p style="margin-top: -21px;"> (08) 38 633 333 - Hotline: 1900 54 54 46</p></li></br>
                        <li><a href=""><i class = "icon_mail"></i><p style="margin-top: -48px;">cs@vienthonga.com</p></a></li>
                    </ul>
                    <div style="margin-bottom: 50px;">
                      	 <a href="#"><i class = "icon_face"></i></a>
                    </div>
                </div>
                        
                      
        <div class="container">
        <div class="footer-intro">
            <div class="row" style="position: relative;left: -259px;height: 0px;; width: 1328px;top: 57px;">
            <hr class="hr_footer"></hr>
                <div class="col-sm-5">
                    <ul class="xoa-cham-list">
                        <li>© 2015 CÔNG TY CỔ PHẦN SX TM XNK VIỄN THÔNG A</li>
                        <li>Số ĐKKD: 0301430045 - Ngày cấp lần đầu 11/12/1997</li>
                        <li>Nơi cấp: Phòng đăng ký kinh doanh - Sở kế hoạch và đầu tư TP.Hồ Chí Minh</li>
                        <li>Địa chỉ trụ sở: 328 - 330 Đường 3/2, Phường 12, Quận 10, TP.Hồ Chí Minh</li></br>
                        <li>Người đại diện theo pháp luật: HUỲNH VIỆT THƯƠNG</li></br>
                        <li>Số điện thoại: 08.386.33333</li></br>
                        <li> Email: <a href="mailto:cs@vienthonga.com">cs@vienthonga.com</a></li>
                    </ul>
                </div>
                <div class="col-sm-4" style="position: relative; width: 319px;">
                    <p>Thanh toán với :</p>
                   <i class = "icon_thanhtoan"></i>

                </div>
                <div class="col-sm-3" style="position:relative; left:864px;width: 241px;top: -142px;">
                    <p>Chứng nhận SGD TMĐT</p>
                    <a href=""><i class = "icon_chungnhan"></a></i>
                </div>
            </div>
        </div>
    </div>   
                        <hr class="hr_footer" style="    position: relative;  top: -194px; left: 22px;"></hr>
       
                      
                      <div class="container">
        <div class="final-footer ">

            <ul class="list-inline">
               <li><a href="" ><span> &gt; Iphone 6 plus &gt; </span></a></li>
                <li><a href="" ><span>Iphone 6 &gt;</span></a></li>
                <li><a href="" ><span> Samsung Galaxy S6 Edge &gt; </span></a></li>
                <li><a href="" ><span>Galaxy E7 &gt;</span></a></li>
                <li><a href="" ><span>Galaxy E5 &gt;</span></a></li>
                <li><a href="" ><span>Galaxy A7 &gt;</span></a></li>
                <li><a href="" ><span>Samsung Galaxy J1 &gt;</span></a></li>
                <li><a href="" ><span>Samsung Galaxy Core Prime &gt;</span></a></li>
                <li><a href="" ><span>&gt;Samsung Galaxy S6 &gt;</span></a></li>
                <li><a href="" ><span>Lumia 540 &gt;</span></a></li>
                <li><a href="" ><span>Lumia 640 3G dual Sim &gt;</span></a></li>
                <li><a href=""><span>Lumia X2 Dual Sim &gt;</span></a></li>
                <li><a href="" ><span>Lumia 535 &gt;</span></a></li>
                <li><a href="" ><span>HTC One M9 &gt;</span></a></li>
                <li><a href="" ><span>HTC One M9 Plus &gt;</span></a></li>
                <li><a href="" ><span>HTC Desire 826G &gt;</span></a></li>
                <li><a href="" ><span>HTC One &gt;</span></a></li>
                <li><a href="" ><span>&gt;Sony Xperia Z4 &gt;</span></a></li>
                <li><a href="" ><span>Sony Xperia M4 Aqua Dual &gt;</span></a></li>
                <li><a href="" ><span>Sony Xperia Z3 &gt;</span></a></li>
                <li><a href="" ><span>Sony Xperia M2 &gt;</span></a></li>
                <li><a href="" ><span>LG G Flex 2 &gt;</span></a></li>
                <li><a href="" ><span>LG G4 &gt;</span></a></li>
                <li><a href="" ><span>LG Magna &gt;</span></a></li>
                <li><a href="" ><span>LG G3 &gt;</span></a></li>
                <li><a href="" ><span>Asus Zenfone 2 &gt;</span></a></li>
                <li><a href="" ><span>&gtAsus Zenfone 5 &gt;</span></a></li>
                <li><a href="" ><span>Asus Zenfone 6 &gt;</span></a></li>
                <li><a href="" ><span>Lelovo A680 &gt;</span></a></li>
                <li><a href="" ><span>Oppo N1 Mini &gt;</span></a></li>
                <li><a href="" ><span>Oppo Mirror 3 &gt;</span></a></li>
                <li><a href="" ><span>Oppo R5 &gt;</span></a></li>
                <li><a href="" ><span>Backberry Z30 &gt;</span></a></li>
                <li><a href="" ><span>Philips W3509 &gt;</span></a></li>
                <li><a href="" ><span>Ipad Air 2 &gt;</span></a></li>
                <li><a href="" ><span>Ipad Mini &gt;</span></a></li>
                <li><a href="" ><span>&gtSamsung Galaxy Tab S &gt;</span></a></li>
                <li><a href="" ><span>Galaxy Tab 4 &gt;</span></a></li>
                <li><a href="" ><span>Tablet Galaxy Tab A &gt;</span></a></li>
                <li><a href="" ><span>Tablet Asus &gt;</span></a></li>
                <li><a href="" ><span>Lenovo Tab S8 &gt;</span></a></li>
                <li><a href=""><span>Máy tính bảng Samsung &gt;</span></a></li>
                <li><a href="" ><span>Máy tính bảng Asus &gt;</span></a></li>
                <li><a href="" ><span>Ipad &gt;</span></a></li>
                <li><a href="" ><span>&gtLaptop Apple &gt;</span></a></li>
                <li><a href=""><span>Laptop Dell &gt;</span></a></li>
                <li><a href=""><span>&gt;Laptop Asus &gt;</span></a></li>
                <li><a href=""><span>Laptop Acer &gt;</span></a></li>
                <li><a href="">Nokia Lumia 730 &gt;</a></li>
                <li><a href="">Nokia Lumia 830 &gt;</a></li>
                <li><a href="">Samsung Galaxy note 4 &gt;</a></li>
                <li><a href="">Microsoft Lumia 535 &gt;</a></li>
                <li><a href="">&gtSamsung Galaxy A5 ;</a></li>
            </ul>

        </div>

    </div>             
                      
                 
                      
                      
                      
                      
                      
                        
            </div>
        </div>
    </div>
	</div>
	</div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

  
</body>



</html>