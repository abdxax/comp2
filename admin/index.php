<?php
session_start();
require '../config/admin.php';
$admin =new Admin();
if(!$admin->isAdmin( $_SESSION['email'],$_SESSION['pass'])){
 header("location:../login.php");
}
else{

}

?>

<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
    <body dir="rtl">
        <header></header>
        <section>
            <div class="container">
                <div class="row">
                <div class="col-12">
                 <img src="../upload/n.png">
                </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3 crd">
                            <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center"><img src="../upload/job.png" width="180px" height="200px"></h5>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <p class="card-text"></p>
    
    <a href="jobs.php" class="btn btn-info btn-block">طلبات التوظيف  </a>
  </div>
</div>
                            </div>

                            <div class="col-3 crd">
                            <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center"><img src="../upload/product.png" width="180px" height="200px"> </h5>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <p class="card-text"></p>
    <a href="proud.php" class="btn btn-info btn-block">المنتجات  </a>
  </div>
</div>
                            </div>

                            <div class="col-3 crd">
                                
                            <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center"><img src="../upload/service.png" width="180px" height="200px"></h5>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <p class="card-text"></p>
    <a href="serv.php" class="btn btn-info btn-block">الخدمات </a>
  </div>
</div>

                            </div>

                            <div class="col-3 crd">
                                
                            <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center"><img src="../upload/contact.png" width="180px" height="200px"></h5>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <p class="card-text"></p>
    <a href="contact.php" class="btn btn-info btn-block">التواصل  </a>
  </div>
</div>

                            </div>

                            <div class="col-3 crd">
                                
                            <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center"><img src="../upload/price.png" width="180px" height="200px"></h5>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <p class="card-text"></p>
    <a href="sallerc.php" class="btn btn-info btn-block">طلبات التسعير  </a>
  </div>
</div>

                            </div>

                            <div class="col-3 crd">
                                
                            <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center"><img src="../upload/logout.png" width="180px" height="200px"></h5>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <p class="card-text"></p>
    <a href="logout.php" class="btn btn-info btn-block">تسجيل خروج   </a>
  </div>
</div>

                            </div>

                            <div class="col-3 crd">
                                
                            <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center"><img src="../upload/about4.png" width="180px" height="200px"></h5>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <p class="card-text"></p>
    <a href="conta.php" class="btn btn-info btn-block">من نحن </a>
  </div>
</div>

                            </div>


                            <div class="col-3 crd">
                            <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center"><img src="../upload/work.jpg" width="180px" height="200px"> </h5>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <p class="card-text"></p>
    <a href="workTime.php" class="btn btn-info btn-block">اوقات الدوام   </a>
  </div>
</div>
                            </div>
                        </div>        
                    </div>
                </div>
            </div>
        </section>
        
    </body>
</html>