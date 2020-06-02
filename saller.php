<?php
require "config/vist.php";
$vis=new Vist();
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
$proc=$vis-> getProudect();
$msg="";

//$vis=new Vist();
$timework=$vis->getWork();

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

if(isset($_POST['sub'])){
    $name=strip_tags($_POST['name']);
    $phone=strip_tags($_POST['phone']);
    $email=strip_tags($_POST['email']);
    $prod=strip_tags($_POST['prod']);
    $country=strip_tags($_POST['country']);
    $mun=strip_tags($_POST['mun']);
    $msg=$vis->insertorder($name,$phone,$email,$prod,$country,$mun);
    echo $msg;

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
?>
<!DOCTYPE html>
<!-- saved from url=(0035)http://www.arat.sa/ConsultingA.aspx -->
<html xmlns="http://www.w3.org/1999/xhtml" class=" js no-touch cssanimations csstransitions"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>
	about us 
</title>
		<!--BOOTSTRAP CSS-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			<link href="./saller_files/bootstrap.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<script src="https://use.fontawesome.com/d11ec116c1.js"></script>
			<link href="./saller_files/font-awesome.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./saller_files/slick.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./saller_files/prettyphoto.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./saller_files/chosen.min.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./saller_files/slick-theme.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./saller_files/component.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./saller_files/demo-page.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./saller_files/hover.css" rel="stylesheet">
			<!--THEME TYPO CSS-->
			<link href="./saller_files/typography.css" rel="stylesheet">
			<!--THEME TYPO CSS-->
			<link href="./saller_files/shotcode.css" rel="stylesheet">
			<!--THEME TYPO CSS-->
			<link rel="stylesheet" href="saller_files/style.css">
			<!--svg-icon CSS-->
			<link rel="stylesheet" href="./saller_files/svg-icon.css">
			<!--COLOR CSS-->
			<link rel="stylesheet" href="./saller_files/color.css">
			<!--COLOR CSS-->
			<link rel="stylesheet" href="./saller_files/responsive.css">
		 
			<style>
			 .side-back{
				background-image: url("upload/872847.jpg");
				
			 }
			 .kode_cause_wrap.them_overlay:before{
	
	opacity:0;
	width:50%;
}


			.widget_wrap{
	background-image: url("upload/fod.jpeg");

}
..xcol{
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
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTEyMzY0MzE3MzhkZNr9dQpCHEYr0LzbEHLN9LHbPM5fOSO2AGjsiGdQXiou">
</div>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="88F7108C">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdABVmVDfU1Kej1llIfvTeGwWA7hv76BH8vu7iM4tkb8en1WsXuBX6KwpkP5i5T/PF3HMRIIWQVb9G6HNjWgtv81RUHadc/p2FmfqYq2ZMY0d3c7qj351j4y4RhrTnxCpB/1UNkgKL5vArQjBCQeo4r65i0nswwR0f9hzpWFKivRYcK603Fc3M8gr8jsvZlt4Dkurh/zvPJ8IBVXHu0A5d1cTQUh9VAQ51o8+Gm5mhdi/u1dbVqyOutcpWY6hNfgb8K8aopHrtagbbUUn2JVIPZy0Fgfw5juCzH3pTanURor7vQJtPX/r/R50KhkYqeWZtCTbz82P7qR1Xkm/inOg2weTmV9aDUaiyv6yModabhqfv5y7DGdk4X6Hm0rHGh8tGauT4DeAlkDiGPntPP9/WohPb83zwMIrNLOti2Kl8T6IMBRCGDhpRXSaOBaetkYTwBSleZN3/pZLdDRJJH3OdPZkdQd+o/uTd7NVCpbidUmuDPA==">
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
				
				<!--KODE SAB BANNER WRAP START-->
				<div class="kode_sab_banner_wrap them_overlay">
					<!--CONTAINER START-->
					<div class="container">
						<div class="sab_banner_text">
							<h2>طلب التسعير </h2>
							
						</div>
					</div>
					<!--CONTAINER END-->
				</div>
				<!--KODE SAB BANNER WRAP END-->
				
				<!--KODE BLOG MADIUM WRAP START-->
				<!--KODE MOSQUES WRAP STRAT-->
		
				<!--KODE MOSQUES WRAP END-->
							<div class="kode_cause_wrap them_overlay side-back">
					<!--KODE CAUSE DES START-->
					<div class="kode_cause_des">
						<!--SECTION HDG START-->
						<div class="section_hdg hdg_2">
							<a href="http://www.arat.sa/ConsultingA.aspx#"><img src="./saller_files/hdg-img-2.png" alt=""></a>
							<h3></h3>
							
						</div>
						<!--SECTION HDG END-->
						<div class="kode_cause_text">
							
                            		 <div dir="rtl" style="float:right">
<h3><span style="font-size:20px;"></span></h3>

<div><br>
<span style="font-size:20px;"></span></div>
</div>
  
                            	 
						</div>
					</div>
					<!--KODE CAUSE DES END-->
					
					<!--KODE DONATE DES START-->
					<div class="kode_donate_des" style="background-color :#fff">
					 
						<!--KODE DONATION ROW START-->
						<div class="kode_donation_row" style="background-color :#fff">
							<h4 style="text-align :right ">نموذج طلب تسعيرة</h4>
							<!--kode AUTHOR WRAP COMMENTS FORM START -->
							<div method="post" class="kode_comment" dir="rtl">
                                   
								<div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="الاسم"> 
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="رقم التواصل "> 
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="البريد الالكتروني "> 
                                </div>
                                <div class="form-group" >
                                   <select name="prod" class="form-control">
                                       <?php  
                                        foreach($proc as $pro){
                                            echo '<option value='.$pro['id'].'>'.$pro['name'].'</option>';
                                        }
                                       ?>
                                   </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="country" placeholder="الدولة"> 
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="mun" placeholder="الميناء "> 
                                </div>
										
								</div>
                             
                                   <div class="row">
                                       <div class="col-md-10">
                                        
                                             أوافق على أن المعلومات المذكورة أعلاه صحيحه 
                                           </div>
                                       <div class="col-md-2">
                                           <p class="form-submit"><input type="submit" name="sub" class="medium_btn theme_color_bg btn_hover2" value="أرسال "></p>
                                           </div>
                                       </div>
							</div>
							<!--kode AUTHOR WRAP COMMENTS FORM END -->	
						</div>
						<!--KODE DONATION ROW END-->
					</div>
					<!--KODE DONATE DES END-->
				</div>
			 
				
			  
				
			 <div class="kode_newsletter_wrap">
					<!--CONTAINER START-->	
					<div class="container">
						<div class="row">
					&nbsp;
						</div>
					</div>
					<!--CONTAINER END-->
				</div>
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
					<div class="widget_wrap widget_2 them_overlay">
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
								<p>حقوق المحتوى محفوظة  © 2020. لشركة الرؤى الثاقبة <a href="http://www.arat.sa/ConsultingA.aspx#"> arat.sa</a></p>
								<a id="child-topbtn" class="top_btn hvr-bob" href="http://www.arat.sa/ConsultingA.aspx#"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
							</div>
						</div>
						<!--CONTAINER END-->
					</div>
					<!--WIDGET COPYRIGHT END-->
				</footer>
			</div>
					<!--WRAPER END-->
			<!--JavaScript-->
			<script src="./saller_files/jquery.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./saller_files/bootstrap.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./saller_files/slick.min.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./saller_files/jquery.bxslider.min.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./saller_files/chosen.jquery.min.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./saller_files/jquery.prettyphoto.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./saller_files/waypoints-min.js.تنزيل"></script>
			<!--js/jquery.downCount.js start-->
			<script src="./saller_files/modernizr.custom.js.تنزيل"></script>
			<!--js/jquery.downCount.js start-->
			<script src="./saller_files/jquery.dlmenu.js.تنزيل"></script>
			<!--CUSTOM JavaScript-->
			<script src="./saller_files/custom.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./saller_files/search-script.js.تنزيل"></script>

    </form>

<!-- bootstrap js -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>