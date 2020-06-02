<?php
session_start();
require 'config/login.php';
$log=new Login();
if(isset($_POST['sub'])){
    $email=strip_tags($_POST['email']);
    $pass=strip_tags($_POST['pass']);

    //call function 
    $los=$log->login($email,$pass);

}

?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
</head>
<body class="login-body">

<section>
<div class="container">
    <div class="row justify-content-center">
        <div class="form-ins">
            <form method="POST">
             <img src="upload/n.png">
                <div class="form-group "> 
                   <div class="col-12">
                       <input type="email" name="email" class="form-control" placeholder="البريد الالكتروني ">
                   </div>
                </div>

                <div class="form-group "> 
                   <div class="col-12">
                       <input type="password" name="pass" class="form-control" placeholder="كلمة المرور ">
                   </div>
                </div>

                <div class="form-group "> 
                   <div class="col-12">
                       <input type="submit" name="sub" class="btn btn-info btn-block" value="تسجيل الدخول">
                   </div>
                </div>
            </form>
        </div>
</div>
</section>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>