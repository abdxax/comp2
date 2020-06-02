<?php
session_start();
require '../config/admin.php';
$admin =new Admin();
$res=$admin->getpro();
if(isset($_FILES['srfile'])){
    print_r($_FILES['srfile']);
$file_name=$_FILES['srfile']['name'];
$file_type=$_FILES['srfile']['type'];
$file_size=$_FILES['srfile']['size'];
$file_tem=$_FILES['srfile']['tmp_name'];

if($file_size>0){
 if($file_size<=900000){
     $name=strip_tags($_POST['proname']);
     $price=strip_tags($_POST['price']);
     $from=strip_tags($_POST['from']);
     $tos=strip_tags($_POST['to']);
     $pr=strip_tags($_POST['prc']);

     $path="../upload/";

     if(move_uploaded_file($file_tem,$path.$file_name)){
         $path2="upload/".$file_name;
        $admin-> AddNewpro($name,$price,$path2,$from,$tos,$pr);
        //$msg;
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

if(isset($_GET['id_del'])){
    $ids=strip_tags($_GET['id_del']);
    $admin->deletepro($ids);
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
      <!--start sectiom for form  --> <section class="">
          <div class="col-12 ">
              <?php 
   if(isset($_GET['msg'])){
       echo '<div class="alert alert-success text-center"> <p>تم اضافة المنتج بنجاح </p></div>';
   }

?>
              <div class="col-8 ">
                  <form method="POST" enctype="multipart/form-data">

                      <div class="form-group">
                          <div class="col-7">
                              <input type="text" name="proname" class="form-control" placeholder="اسم المنتج" >
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-7">
                          <input type="text" name="price" class="form-control" placeholder="السعر" >
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-7">
                          <input type="text" name="from" class="form-control"  placeholder="من">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-7">
                          <input type="text" name="prc" class="form-control"  placeholder="النسبة">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-7">
                          <input type="text" name="to" class="form-control"  placeholder="الى ">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-7">
                              <input type="file" name="srfile" class="form-control" >
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
                            <td>المنتج</td> 
                            <td>السعر </td> 
                            <td>من </td> 
                            <td>الى </td> 
                            </tr> 
                        </thead>
                        <tbody>
                            <?php 
                             if($res->rowCount()>0){
                                 foreach($res as $r){
                                     echo '
                                      <tr>
                                       <td></td>
                                       <td>'.$r['name'].'</td>
                                       <td>'.$r['parec'].'</td>
                                       <td>'.$r['froms'].'</td>
                                       <td>'.$r['tos'].'</td>
                                       <td><a href="proud.php?id_del='.$r['id'].'">حذف </a></td>
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