<?php
session_start();
require '../config/admin.php';
$admin =new Admin();
$res=$admin->getaboit();
if(isset($_POST['sub'])){
    $vis=strip_tags($_POST['vis']);
    $msg=strip_tags($_POST['msg']);
    $gol=strip_tags($_POST['gol']);

    $admin->updatabout($gol,$msg,$vis);
}

?>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
    <body dir="rtl">
        <header>
        <div class="container">
                <div class="row justify-content-center">
                    <a href="index.php" class="btn btn-info" >الصفحة الرئيسية </a>
                </div>
            </div>
        </header>
      <!--start sectiom for form  --> <section>
          <div class="col-12">
              <div class="col-8">
                  <form method="POST" enctype="multipart/form-data">

                      <div class="form-group">
                          <div class="col-7">
                            <textarea class="form-control" name="vis" rows=6 placeholder="الرؤية"></textarea>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-7">
                          <textarea class="form-control" name="msg" rows=6 placeholder="الرسالة"></textarea>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-7">
                          <textarea class="form-control" name="gol" rows=6 placeholder="الاهداف"></textarea>
                          </div>
                      </div>

                      

                      <div class="form-group">
                          <div class="col-7">
                              <input type="submit" name="sub" class="btn btn-info btn-block" value="حفظ" >
                          </div>
                      </div>

                  </form>
              </div>
          </div>
      </section>
        <section>
            <div class="conatiner">
                <div class="col-9">
                    <table class="table">
                        <thead>
                            <tr>
                            <td></td>
                            <td>الروية</td> 
                            <td>الرسالة  </td> 
                            <td>الاهداف </td> 
                            
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 
                             if($res->rowCount()>0){
                                 foreach($res as $r){
                                     echo '
                                      <tr>
                                       <td></td>
                                       <td>'.$r['vis'].'</td>
                                       <td>'.$r['msg'].'</td>
                                       <td>'.$r['gols'].'</td>
                                       
                                      </tr>
                                     ';
                                 }
                             }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </body>
</html>