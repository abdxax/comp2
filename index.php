<?php
require "config/vist.php";
$vis=new Vist();
$timework=$vis->getWork();
$timework=$vis->getWork();
$start='';
$ends='';
$tos='';
$forms='';
foreach($timework as $tim){
	$forms=$tim['froms'];
	$tos=$tim['tos'];
	$start=$tim['start'];
	$ends=$tim['end'];
}
$conts=$vis->getConta();
$phone_con="";
$email_con="";
$arti='';
$link='';

foreach($conts as $con){
	$phone_con=$con['phone'];
	$email_con=$con['email'];
	$arti=$con['title_ar'];
	$link=$con['link'];
}

if(isset($_POST['cmd_hSend'])){
$name=strip_tags($_POST['fullname']);
$email=strip_tags($_POST['Email']);
$msg=strip_tags($_POST['fMessage']);
$vis->addConatct($name,$email,$msg);
}

if(isset($_POST['cmd_hSend'])){
	$name=strip_tags($_POST['fullname']);
	$phone=strip_tags($_POST['phone']);
	$email=strip_tags($_POST['Email']);
	$text=strip_tags($_POST['fMessage']);
	$vis->addMessg($name,$phone,$email,$text);
}

$msg="";
if(isset($_GET['msg'])){

}
?>
<!DOCTYPE html>
<!-- saved from url=(0019)http://www.arat.sa/ -->
<html xmlns="http://www.w3.org/1999/xhtml" class=" js no-touch cssanimations csstransitions">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>
	الرئيسية
</title>
			<!--BOOTSTRAP CSS-->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			<link href="./الرئيسية_files/bootstrap.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./الرئيسية_files/font-awesome.css" rel="stylesheet">
			<script src="https://use.fontawesome.com/d11ec116c1.js"></script>
			

			<!--fontawseme CSS-->
			<link href="./الرئيسية_files/slick.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./الرئيسية_files/jquery.bxslider.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./الرئيسية_files/prettyphoto.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./الرئيسية_files/demo-page.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./الرئيسية_files/hover.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./الرئيسية_files/component.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./الرئيسية_files/jQuery-plugin-progressbar.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./الرئيسية_files/chosen.min.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./الرئيسية_files/animate.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./الرئيسية_files/slick-theme.css" rel="stylesheet">
			<!--THEME TYPO CSS-->
			<link href="./الرئيسية_files/typography.css" rel="stylesheet">
			<!--THEME TYPO CSS-->
			<link href="./الرئيسية_files/shotcode.css" rel="stylesheet">
			<!--THEME TYPO CSS-->
			<link rel="stylesheet" href="./الرئيسية_files/style.css">
			<!--svg-icon CSS-->
			<link rel="stylesheet" href="./الرئيسية_files/svg-icon.css">
			<!--COLOR CSS-->
			<link rel="stylesheet" href="./الرئيسية_files/color.css">
			<!--COLOR CSS-->
			<link rel="stylesheet" href="./الرئيسية_files/responsive.css">
    <style>
        /*.button_bootom {
    position: fixed;
    bottom: 0;
    left : 10px;
    z-index: 1;
    max-width: 310px;
    width: 100%;
    display: block;
}

        .button_bootom_bg {
    background: url(images/Chat.png) no-repeat;
    padding: 5px 0 2px 99px;
    margin: 0 5px 2px 0;
    height: 95px;
}*/
.carousel-item{
	margin-top:30px;

	height:310px
}



			.widget_wrap{
	background-image: url("upload/fod.jpeg");

}

.xcol{
	background-color: #fff;
}
.navbar-nav li a:hover{
	color: #5fc55a;
}
			
	

    </style>

</head>
<body>
    
    <form method="post"  id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTE0MjM3NDgyMTJkZDaMkDhvY5ObIe7HLJdK5OhsVSnT1hZntTtOqmMDkN8e">
</div>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAV7qRUSN+uG54+6wQa5kMPHLsMZ2ThfoebSscaHy0Zq5PgN4CWQOIY+e08/39aiE9vzfPAwis0s62LYqXxPogwFEIYOGlFdJo4Fp62RhPAFKTyyzzQEnHNXzXYnlS4HL/TQgpu3I3ZeERjMZgTz724+">
</div>
    	<!--WRAPER START-->
		<header>
		<nav class="navbar navbar-expand-lg navbar-light xcol">
  <a class="navbar-brand" href="#"><img src="./jobs_files/top-logo2.png" alt="kodeforest"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav  mx-auto text-center">
	<li><a href="saller.php">طلب تسعيرة </a></li>
	<li><a href="jobs.php">انضم الينا </a></li>
                                
                                
								<li><a href="Products _ Page.php">المنتجات</a></li>
							<li><a href="service.php">الخدمات</a></li>
					 
								<li><a href="Objective.php">من نحن </a>
								
							</li>
							   <li><a href="index.php">الرئيسية</a></li>

    </ul>
	<div class="mx-auto text-right">
	<a href="en/index.php">English </a>
	</div>
   
  </div>
</nav>
		</header>
			<div class="wraper">
				
				
				<!--KODE BANNER WRAP START-->

				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="upload/job.png" alt="First slide" height="25px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="upload/n.png" alt="Second slide" height="250px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="upload/price.png" alt="Third slide" height="250px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


				<!--KODE BANNER2 WRAP END-->
								
				<!--KODE MOSQUE2 WRAP START-->
			
				<!--KODE MOSQUE2 WRAP END-->
				 	
                				<div class="kode_pillars_wrap pillare_2">
					<!--CONTAINER START-->
					<div class="container">
						<!--SECTION HDG START-->
						<div class="section_hdg hdg_2 hdg_3 hdg_4">
							<a href="http://www.arat.sa/#"><img src="./الرئيسية_files/hdg-img.png" alt=""></a>
							<h3>قائمة الخدمات</h3>
							
						</div>
						<!--SECTION HDG END-->
						<div class="kode_pillars_row">
							<div class="panel panel-default">
								<div class="panel-heading">
									<ul class="nav nav-tabs kode_pillars_item">
									<?php 
								 $servs=$vis->getService();
								 $arr=[];
								 $count=0;
								 foreach($servs as $srv){
									if($count<5){
										$arr[$count]=$srv['name'];
									}
									$count++;
								 }
								?>
										<li><a class="left_bottom hvr-ripple-out" href="http://www.arat.sa/#tab" data-toggle="tab"><span></span><h6><?php echo $arr[0];?></h6></a></li>
										<li><a class="left_center hvr-ripple-out" href="http://www.arat.sa/#tab1" data-toggle="tab"><span></i></span><h6><?php echo $arr[1];?></h6></a></li>
										<li><a class="center hvr-ripple-out" href="http://www.arat.sa/#tab2" data-toggle="tab"><span></span><h6><?php echo $arr[2];?></h6></a></li>
										<li><a class="right_center hvr-ripple-out" href="http://www.arat.sa/#tab3" data-toggle="tab"><span></span><h6><?php echo $arr[3];?></h6></a></li>
										<li><a class="right_bottom hvr-ripple-out" href="http://www.arat.sa/#tab4" data-toggle="tab"><span></span><h6><?php echo $arr[4];?></h6></a></li>
										
									</ul>
								</div>

								<div class="panel-body">
									<div class="tab-content">
										<div class="tab-pane fade in active" id="tab">
											<div class="kode_pillars_text">
												<figure>
													<img src="./الرئيسية_files/piller1.png" alt="">
												</figure>
											</div>
										</div>
										<div class="tab-pane fade in" id="tab1">
											<div class="kode_pillars_text">
												<figure>
													<img src="./الرئيسية_files/piller1.png" alt="">
												</figure>
											</div>
										</div>
										<div class="tab-pane fade in" id="tab2">
											<div class="kode_pillars_text">
												<figure>
													<img src="./الرئيسية_files/piller1.png" alt="">
												</figure>
											</div>
										</div>
										<div class="tab-pane fade in" id="tab3">
											<div class="kode_pillars_text">
												<figure>
													<img src="./الرئيسية_files/piller1.png" alt="">
												</figure>
											</div>
										</div>
									</div>
								</div>

								

							</div>
						</div>
					</div>
					<!--CONTAINER END-->
				</div>
				<!--KODE PILLARS WRAP START-->
				
				<!--KODE PILLARS WRAP END-->
				 
				

				
				
				<!--KODE GALLERY WRAP START-->
				<div class="kode_gallery_wrap" dir="rtl">
					<!--CONTAINER START-->
					
					<!--CONTAINER END-->
				</div>
				<!--KODE GALLERY WRAP END-->	
				
				<!--KODE EVENT WRAP START-->
		 
				<!--KODE EVENT WRAP END-->
				
				<!--KODE NEWSLETTER WRAP START-->
				<div class="kode_newsletter_wrap">
					<!--CONTAINER START-->	
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								
							</div>
							<div class="col-md-6">
								<div class="kode_newsletter_form">
									<div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--CONTAINER END-->
				</div>
				<!--KODE NEWSLETTER WRAP END-->
				
				<footer>
                    
   <style>
        .button_bootom {
    position: fixed;
    bottom: 0;
    left : 10px;
    z-index: 1;
    max-width: 310px;
    width: 100%;
    display: block;
}

        .button_bootom_bg {
    background: url(images/Chat.png) no-repeat;
    padding: 5px 0 2px 99px;
    margin: 0 5px 2px 0;
    height: 95px;
}

    </style>
<!--WIDGET WRAP START-->
<div class="button_bootom">
<a href="javascript:void(0)" onclick="window.open(&#39;Chat.aspx&#39;,&#39;_blank&#39;,&#39;width=450, height=600,scrollbars=1&#39;); return false;" class="chat_link">
<div class="button_bootom_bg">

<script type="text/javascript">


    if (!$.cookie("buttonTrans1")) var trans0 = 'Need Help?', trans1 = 'Live Chat 24/7';


    if ($.cookie("buttonTrans1")) var myvar = JSON.parse($.cookie("buttonTrans1")), trans0 = myvar[3]["Need Help?"], trans1 = myvar[4]["Live Chat 24/7"];

    document.getElementById('button_bootom_t').innerHTML = trans0;

    document.getElementById('button_bootom_tlive').innerHTML = trans1;

                        </script>
</div>
</a></div>
					<div class="widget_wrap widget_2 them_overlay " >
						<!--CONTAINER START-->
						<div class="container">
							<div class="row">
								<div class="col-md-4">
									<div class="widget_logo logo_2 text-right" dir="rtl">
										<a href="http://www.arat.sa/#"><img src="./الرئيسية_files/footer-logo1.png" alt=""></a>
										<p>الرؤى الثاقبة.</p>
										<ul class="widget_call_info">
											<li><a href=<?php echo $link;?>><i class="fa fa-map-marker"></i> <?php echo $arti;?></a></li>
											<li><a href="http://www.arat.sa/#"><i class="fa fa-phone"></i> <?php echo $email_con;?></a></li>
											<li><a href="http://www.arat.sa/#"><i class="fa fa-envelope"></i> <?php echo $phone_con; ?></a></li>
										</ul>
										<ul class="widget_social_icon">
											<li><a class="hvr-ripple-out" href="http://www.arat.sa/#"><i class="fa fa-facebook"></i></a></li>
											<li><a class="hvr-ripple-out" href="http://www.arat.sa/#"><i class="fa fa-twitter"></i></a></li>
											<li><a class="hvr-ripple-out" href="http://www.arat.sa/#"><i class="fa fa-tumblr"></i></a></li>
											<li><a class="hvr-ripple-out" href="http://www.arat.sa/#"><i class="fa fa-vimeo"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-4">
									<div class="widget_event event_2 text-right" dir="rtl">
										<h4 class="widget_title">نموذج المراسلة</h4>
										<div class="comment-form">
											<div class="kode-left-comment-sec">
												<div class="kf_commet_field">
													<form method="POST">
                                                    <input name="fullname" type="text" id="footer_fullname" placeholder="الاسـم ثلاثي">

												</div>
												<div class="kf_commet_field">
													
                                                    <input name="phone" type="text" id="footer_Email" placeholder="الجوال ">
												</div>
												<div class="kf_commet_field">
													
                                                    <input name="Email" type="text" id="footer_Email" placeholder="البريد الالكتروني">
												</div>
											</div>
											<div class="kode_textarea">
                                                <textarea name="fMessage" rows="2" cols="20" id="footer_Message" placeholder="موضوع الرسالة" style="height:100px;"></textarea>
											</div>
											
                                            <input type="submit" name="cmd_hSend" value="أرســـال" id="footer_cmd_hSend" class="medium_btn theme_color_bg">
											</form>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="widget_event event_2 text-right" dir="rtl">
										<h4 class="widget_title">أوقات الدوام</h4>
										<ul class="kode_calender_detail">
											<li>
												<div class="kode_calender_list">
												 
													<div class="kode_event_text">
														<h6><a href="http://www.arat.sa/#"><?php echo "من يوم ".$start." الى يوم ".$ends."";?></a> </h6>
													</div>
												</div>
											</li>
											<li>
												<div class="kode_calender_list">
													 
													<div class="kode_event_text">
														<h6><a href="http://www.arat.sa/#"><?php echo 'من الساعه '.$forms.' الى الساعه '.$tos.'';?></span>  </a> </h6>
														
													</div>
												</div>
											</li>
                                             
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!--CONTAINER END-->
					</div>
					<!--WIDGET WRAP END-->
					
					<!--WIDGET COPYRIGHT START-->
					<div class="widget_copyright">
						<!--CONTAINER START-->
						<div class="container">
							<div class="copyright_text">
								<p>حقوق المحتوى محفوظة  © 2020. لشركة الرؤى الثاقبة <a href="http://www.arat.sa/#"> arat.sa</a></p>
								<a id="child-topbtn" class="top_btn hvr-bob" href="http://www.arat.sa/#"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
							</div>
						</div>
						<!--CONTAINER END-->
					</div>
					<!--WIDGET COPYRIGHT END-->
				</footer>
			</div>
			<!--WRAPER END-->
			<!--JavaScript-->
			<script src="./الرئيسية_files/jquery.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./الرئيسية_files/bootstrap.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./الرئيسية_files/slick.min.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./الرئيسية_files/jquery.bxslider.min.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./الرئيسية_files/jQuery-plugin-progressbar.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./الرئيسية_files/chosen.jquery.min.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./الرئيسية_files/musicplayer.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./الرئيسية_files/jquery.prettyphoto.js.تنزيل"></script>
			<!--js/jquery.downCount.js start-->
			<script src="./الرئيسية_files/modernizr.custom.js.تنزيل"></script>
			<!--js/jquery.downCount.js start-->
			<script src="./الرئيسية_files/jquery.dlmenu.js.تنزيل"></script>
			<!--js/jquery.downCount.js start-->
			<script src="./الرئيسية_files/jquery.downCount.js.تنزيل"></script>
			<!--js/jquery.downCount.js start-->
			<script src="./الرئيسية_files/wow.min.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./الرئيسية_files/waypoints-min.js.تنزيل"></script>
			<!--CUSTOM JavaScript-->
			<script src="./الرئيسية_files/custom.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./الرئيسية_files/search-script.js.تنزيل"></script>

         <script>

             function initJimag() {
                 var imgDefer = document.getElementsByTagName('img');
                 for (var i = 0; i < imgDefer.length; i++) {
                     if (imgDefer[i].getAttribute('dar-src')) {
                         imgDefer[i].setAttribute('src', imgDefer[i].getAttribute('dar-src'));
                     }
                 }
             }
             window.onload = initJimag;
        </script> 
    </form>

<!-- bootstap js -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
$('.carousel').carousel({
  interval: 2000
})
</script>
</body>
</html>