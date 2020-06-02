<?php
session_start();
require '../config/admin.php';
$admin =new Admin();
$res=$admin->getWork();
$msg="";
if(isset($_POST['sub'])){
    $start=$_POST['start'];
    $end=$_POST['end'];
    $froms=$_POST['from'];
    $tos=$_POST['to'];
    $msg=$admin->updateWork($start,$froms,$end,$tos);

echo $msg;
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
                  <form method="POST">

                      <div class="form-group">
                          <div class="col-7">
                              <input type="text" name="start" class="form-control" placeholder="من" >
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-7">
                          <input type="text" name="end" class="form-control"  placeholder="الى">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-7">
                          <input type="text" name="from" class="form-control"  placeholder="يبداء">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-7">
                          <input type="text" name="to" class="form-control"  placeholder="ينتهي ">
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
                            <td>من</td> 
                            <td>الى </td> 
                            <td>يبداء  </td> 
                            <td>ينتهي  </td> 
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 
                             if($res->rowCount()>0){
                                 foreach($res as $r){
                                     echo '
                                      <tr>
                                       <td></td>
                                       <td>'.$r['start'].'</td>
                                       <td>'.$r['end'].'</td>
                                       <td>'.$r['froms'].'</td>
                                       <td>'.$r['tos'].'</td>
                                      
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