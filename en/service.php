<?php
require "config/vist.php";

$vis=new Vist();
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

$conts=$vis->getConta();
$phone_con="";
$email_con="";
$arti='';
$link='';

foreach($conts as $con){
	$phone_con=$con['phone'];
	$email_con=$con['email'];
	$arti=$con['title_en'];
	$link=$con['link'];
}

?>
<!DOCTYPE html>
<!-- saved from url=(0031)http://www.arat.sa/service.aspx -->
<html xmlns="http://www.w3.org/1999/xhtml" class=" js no-touch cssanimations csstransitions"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>
	blugs PAGE
</title>
			<!--BOOTSTRAP CSS-->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			<link href="./service_files/bootstrap.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./service_files/font-awesome.css" rel="stylesheet">
			<script src="https://use.fontawesome.com/d11ec116c1.js"></script>
			<!--fontawseme CSS-->
			<link href="./service_files/chosen.min.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./service_files/demo-page.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./service_files/hover.css" rel="stylesheet">
			<!--THEME TYPO CSS-->
			<link href="./service_files/typography.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./service_files/component.css" rel="stylesheet">
			<!--THEME TYPO CSS-->
			<link href="./service_files/shotcode.css" rel="stylesheet">
			<!--THEME TYPO CSS-->
			<link rel="stylesheet" href="./service_files/style.css">
			<!--svg-icon CSS-->
			<link rel="stylesheet" href="./service_files/svg-icon.css">
			<!--COLOR CSS-->
			<link rel="stylesheet" href="./service_files/color.css">
			<!--COLOR CSS-->
			<link rel="stylesheet" href="./service_files/responsive.css">
			<style>
			.widget_wrap{
	background-image: url("../upload/fod.jpeg");

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
    <form method="post" action="http://www.arat.sa/service.aspx" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTE3MTA5OTg1NTRkZKtiwwRvYoQ2Mlr/ik40TczS5rmxXyzmzn4vvQH4tRA5">
</div>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="F20EDA95">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAXlVVQgSYbUEvhaKaGXzPoOLsMZ2ThfoebSscaHy0Zq5PgN4CWQOIY+e08/39aiE9vzfPAwis0s62LYqXxPogwFEIYOGlFdJo4Fp62RhPAFKfZBGI8UTyZ5TDf7qguuCbLtGZM8gIX9oIuKG/QbmPED">
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
	<li><a href="saller.php">Quotations </a></li>
	<li><a href="jobs.php">Join us </a></li>
                                
                                
								<li><a href="Products _ Page.php">PRODUCTS</a></li>
							<li><a href="service.php">Services</a></li>
						 
								<li><a href="Objective.php">About us  </a>
								
							</li>
							   <li><a href="index.php">Home</a></li>

    </ul>
	<div class="mx-auto text-right">
	<a href="../index.php">عربي </a>
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
							<h2>Services</h2>
							
						</div>
					</div>
					<!--CONTAINER END-->
				</div>
				<!--KODE SAB BANNER WRAP END-->
				
				<!--KODE BLOG MADIUM WRAP START-->
		<div class="kode_blog_madium_wrap">
					<!--CONTAINER START-->
					<div class="container">
						<div class="row">
                            <?php
                            $serv=$vis-> getService();
                            foreach($serv as $sar){
                                echo ' <div class="col-md-4">
                                <div class="kode_service_des">
                                <figure>	
                                <img src="../'.$sar['path'].'" alt="" width="220px" height="220px">
                                </figure>
                                <div class="kode_service_text">
                                    <h3 dir="rtl"><a href=""><a href="detlserv.php?id='.$sar['id'].'">'.$sar['name_er'].'</a></h3>	<p></p>
                                    </div>
                                    </div>
                                    	</div>
                                ';
                            }

                            ?>
						<!--  <div class="col-md-4"><div class="kode_service_des"><figure>	<img src="./service_files/IS_610_067007.jpg" dar-src="EraCms/eracms/SiteData/images/Services/IS_610_067007.jpg" alt=""></figure><div class="kode_service_text">	<span><i class="fa fa-server"></i></span>	<h3 dir="rtl"><a href="http://www.arat.sa/ViewService.aspx?IDP=1">توريد الحجر البركاني</a></h3>	<p><i class="fa fa-bookmark"></i></p></div></div>	</div>
<div class="col-md-4"><div class="kode_service_des"><figure>	<img src="./service_files/IS_610_983588.jpg" dar-src="EraCms/eracms/SiteData/images/Services/IS_610_983588.jpg" alt=""></figure><div class="kode_service_text">	<span><i class="fa fa-server"></i></span>	<h3 dir="rtl"><a href="http://www.arat.sa/ViewService.aspx?IDP=6">الخدمة 2</a></h3>	<p><i class="fa fa-bookmark"></i>انتاج افلام </p></div></div>	</div>
<div class="col-md-4"><div class="kode_service_des"><figure>	<img src="./service_files/IS_610_036586.jpg" dar-src="EraCms/eracms/SiteData/images/Services/IS_610_036586.jpg" alt=""></figure><div class="kode_service_text">	<span><i class="fa fa-server"></i></span>	<h3 dir="rtl"><a href="http://www.arat.sa/ViewService.aspx?IDP=7">الخدمة 3</a></h3>	<p><i class="fa fa-bookmark"></i>انتاج برامج </p></div></div>	</div>-->


							 
		 
							 
						</div>
					</div>
					<!--CONTAINER END-->
				</div>
				<!--KODE BLOG MADIUM WRAP END-->
						 ﻿
				<!--KODE NEWSLETTER WRAP START-->
		 ﻿				<div class="kode_newsletter_wrap">
					<!--CONTAINER START-->	
					<div class="container">
						<div class="row">
							<div class="col-md-6">
                                
							</div>
							<div class="col-md-6">
									<div class="kode_newsletter_form">
									
									<div class="kode_newsletter_text">
										
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
													 <div class="widget_logo logo_2 text-left" >
														 <a href="http://www.arat.sa/#"><img src="./الرئيسية_files/footer-logo1.png" alt=""></a>
														 <p>الرؤى الثاقبة.</p>
														 <ul class="widget_call_info">
														 <li><a href=<?php echo $link;?>><i class="fa fa-map-marker"></i> <?php echo $arti;?></a></li>
				 Small and Large Facilities  </a></li>
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
													 <div class="widget_event event_2 text-left" >
														 <h4 class="widget_title"> contact us </h4>
														 <div class="comment-form">
															 <div class="kode-left-comment-sec">
																 <div class="kf_commet_field">
																	 <form method="POST">
																	 <input name="fullname" type="text" id="footer_fullname" placeholder="Name">
				 
																 </div>
																 <div class="kf_commet_field">
																	 
																	 <input name="phone" type="text" id="footer_Email" placeholder="phone">
																 </div>
																 <div class="kf_commet_field">
																	 
																	 <input name="Email" type="text" id="footer_Email" placeholder="Email">
																 </div>
															 </div>
															 <div class="kode_textarea">
																 <textarea name="fMessage" rows="2" cols="20" id="footer_Message" placeholder="Message" style="height:100px;"></textarea>
															 </div>
															 
															 <input type="submit" name="cmd_hSend" value="Send" id="footer_cmd_hSend" class="medium_btn theme_color_bg">
															 </form>
														 </div>
													 </div>
												 </div>
												 <div class="col-md-4">
													 <div class="widget_event event_2 text-left" >
														 <h4 class="widget_title">Work tiem</h4>
														 <ul class="kode_calender_detail">
															 <li>
																 <div class="kode_calender_list">
																  
																	 <div class="kode_event_text">
																		 <h6><a href="http://www.arat.sa/#">Start From <?php echo $start; ?> To <?php echo $ends; ?> </a> </h6>
																	 </div>
																 </div>
															 </li>
															 <li>
																 <div class="kode_calender_list">
																	  
																	 <div class="kode_event_text">
																		 <h6><a href="http://www.arat.sa/#">From - <span><?php echo $forms;?></span> To <span><?php echo $tos;?></span>  </a> </h6>
																		 
																	 </div>
																 </div>
															 </li>
															  <li>
																 <div class="kode_calender_list">
																	  
																	 <div class="kode_event_text">
																		 <!--<h6><a href="http://www.arat.sa/#">الجمعة - مغلق  </a> </h6>-->
																	  
																	 </div>
																 </div>
															 </li>
															  <li>
																 <div class="kode_calender_list">
																	  
																	 <div class="kode_event_text">
																		 <!--<h6><a href="http://www.arat.sa/#">السبت  من الساعة- <span>4 : 0 مساءً</span> حتى الساعة <span>9:30 مساءً</span>  </a> </h6>-->
																	  
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
			<script src="./service_files/jquery.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./service_files/bootstrap.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./service_files/jquery.bxslider.min.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./service_files/chosen.jquery.min.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./service_files/jquery.prettyphoto.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./service_files/waypoints-min.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./service_files/modernizr.custom.js.تنزيل"></script>
			<!--js/jquery.downCount.js start-->
			<script src="./service_files/jquery.dlmenu.js.تنزيل"></script>
			<!--CUSTOM JavaScript-->
			<script src="./service_files/custom.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./service_files/search-script.js.تنزيل"></script>

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

<!-- bootstrap js -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>