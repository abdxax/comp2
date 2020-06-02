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
if(isset($_FILES['file'])){
	$file_name=$_FILES['file']['name'];
$file_type=$_FILES['file']['type'];
$file_size=$_FILES['file']['size'];
$file_tem=$_FILES['file']['tmp_name'];

if($file_size>0){
	$arr=['pdf','png','jpge'];
	$exp=explode('.',$file_name);
	$strexp=strtolower($exp[1]);
 if($file_size<=900000){
	 if(in_array($strexp,$arr)){
        $name=strip_tags($_POST['arname']);
	 $ennames=strip_tags($_POST['enname']);
	 $phone=strip_tags($_POST['phone']);
	 $emai=strip_tags($_POST['email']);
	 $majer=strip_tags($_POST['maj']);
	 
     $path="upload/";

     if(move_uploaded_file($file_tem,$path.$file_name)){
         $path2="upload/".$file_name;
       $msg=  $vis-> addCV($name,$ennames,$emai,$phone,$majer,$path2);
       echo $msg;
     }

	 }
	 else{
		 echo "file type ";
	 }
     
    
 }
 else{
    echo "size big";
}
}
else{
      echo "size small";
}
}
//
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

$$conts=$vis->getConta();
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
<!-- saved from url=(0028)http://www.arat.sa/jobs.aspx -->
<html xmlns="http://www.w3.org/1999/xhtml" class=" js no-touch cssanimations csstransitions"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>
	about us 
</title>
		<!--BOOTSTRAP CSS-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			<link href="./jobs_files/bootstrap.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./jobs_files/font-awesome.css" rel="stylesheet">
			<script src="https://use.fontawesome.com/d11ec116c1.js"></script>
			<!--fontawseme CSS-->
			<link href="./jobs_files/slick.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./jobs_files/prettyphoto.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./jobs_files/chosen.min.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./jobs_files/slick-theme.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./jobs_files/component.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./jobs_files/demo-page.css" rel="stylesheet">
			<!--fontawseme CSS-->
			<link href="./jobs_files/hover.css" rel="stylesheet">
			<!--THEME TYPO CSS-->
			<link href="./jobs_files/typography.css" rel="stylesheet">
			<!--THEME TYPO CSS-->
			<link href="./jobs_files/shotcode.css" rel="stylesheet">
			<!--THEME TYPO CSS-->
			<link rel="stylesheet" href="./jobs_files/style.css">
			<!--svg-icon CSS-->
			<link rel="stylesheet" href="./jobs_files/svg-icon.css">
			<!--COLOR CSS-->
			<link rel="stylesheet" href="./jobs_files/color.css">
			<!--COLOR CSS-->
			<link rel="stylesheet" href="./jobs_files/responsive.css">
			
			 <style>
			 .side-back{
				background-image: url("../upload/rfhy.jpg");
				
			 }
			 .kode_cause_wrap.them_overlay:before{
	
	opacity:0;
	width:50%;
}


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
    <form method="POST"  id="form1" enctype="multipart/form-data">
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJNjA0Nzk1NjQ5ZGT6zVW6+Nkr23weQSnGG00wPNekoQwMyqhNl9NSZyDjZQ==">
</div>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CB8B973B">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdABZLG34tSKwZjiOm7DUaFt397hv76BH8vu7iM4tkb8en1WsXuBX6KwpkP5i5T/PF3HNS1t+2VMc64miEaU+8B6+eESCFkFW/RuhzY1oLb/NUVB2nXP6dhZn6mKtmTGNHd3O6o9+dY+MuEYa058QqQf9VDZICi+bwK0IwQkHqOK+uYtJ7MMEdH/Yc6VhSor0WHCutNxXNzPIK/I7L2ZbeA5Lq4f87zyfCAVVx7tAOXdXE0FIfVQEOdaPPhpuZoXYv7tXW1asjrrXKVmOoTX4G/CvGqKR67WoG21FJ9iVSD2ctBYH8OY7gsx96U2p1EaK+70CbT1/6/0edCoZGKnlmbQk28/Nj+6kdV5Jv4pzoNsHk5lfWg1Gosr+sjKHWm4an7+cuwxnZOF+h5tKxxofLRmrk+A3gJZA4hj57Tz/f1qIT2/N88DCKzSzrYtipfE+iDAUQhg4aUV0mjgWnrZGE8AUp+H5YVR4MH4q4qzvjRTO0qDFokYdvZAUAj7UNJgNSghI=">
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
							<h2> Employment application form </h2>
							
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
							<a href=""><img src="" alt=""></a>
							
							
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
							<h4 style="text-align :right ">Employment application form </h4>
							<!--kode AUTHOR WRAP COMMENTS FORM START -->
							<div method="post" class="kode_comment" dir="rtl">
                                   
								<div class="row">
                                    
                                 
                                  
								
                                      
                                   
                              
                                     	
                                                 
                                     </div>
                                    <h4 style="text-align :right ">Persnal Information </h4>
									<div class="col-md-6">
										<div class="kf_commet_field">
                                            <input name="arname" type="text" id="TextBox1" placeholder="Arabic Name">
											 
										</div>
									</div>
									<div class="col-md-6">
										<div class="kf_commet_field">
                                            <input name="enname" type="text" id="TextBox2" placeholder="English Name">
											
										</div>
									</div>
									<div class="col-md-6">
										<div class="kf_commet_field">
                                            <input name="email" type="text" id="TextBox6" placeholder="Email">
										</div>
									</div>
									
									
									<div class="col-md-6">
										
									</div>
									<div class="col-md-6">
										<div class="kf_commet_field">
                                            <input name="phone" type="text" id="TextBox8" placeholder="Phone">
										</div>
									
								</div>
								<div class="col-md-6">
										<div class="kf_commet_field">
                                            <input name="maj" type="text" id="TextBox7" placeholder="Major">
										</div>
									</div>

								<div class="col-md-6">
										<div class="kf_commet_field">
                                            <input name="file" type="file" id="TextBox7" placeholder="المرفق">
										</div>
									</div>
                             
                                   <div class="row">
                                       <div class="col-md-10">
                                        
									   I agree that the above information is correct 
                                           </div>
                                       <div class="col-md-2">
                                           <p class="form-submit"><button class="medium_btn theme_color_bg btn_hover2">Send</button></p>
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
			<script src="./jobs_files/jquery.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./jobs_files/bootstrap.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./jobs_files/slick.min.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./jobs_files/jquery.bxslider.min.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./jobs_files/chosen.jquery.min.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./jobs_files/jquery.prettyphoto.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./jobs_files/waypoints-min.js.تنزيل"></script>
			<!--js/jquery.downCount.js start-->
			<script src="./jobs_files/modernizr.custom.js.تنزيل"></script>
			<!--js/jquery.downCount.js start-->
			<script src="./jobs_files/jquery.dlmenu.js.تنزيل"></script>
			<!--CUSTOM JavaScript-->
			<script src="./jobs_files/custom.js.تنزيل"></script>
			<!--BOOTSTRAP JavaScript-->
			<script src="./jobs_files/search-script.js.تنزيل"></script>
    </form>

<!-- bootstrap js -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>