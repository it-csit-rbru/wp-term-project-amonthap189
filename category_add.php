<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Anima list</title>
  </head>
      <?php include 'header.php';?>
      <?php include 'menu.php';?>
      <br>
      <br> 
      <div class="col-sm-4 col-md-5">
                    <h4>เพิ่มข้อมูลผู้สอน</h4>
                    <?php
                        if(isset($_GET['submit'])){
                            $cgr_id = $_GET['cgr_id'];
                            $cgr_jp = $_GET['cgr_jp'];
                            $cgr_en = $_GET['cgr_en'];
                            $cgr_th = $_GET['cgr_th'];
                            $sql = "insert into category";
                            $sql .= " values ($cgr_id,'$cgr_jp','$cgr_en','$cgr_th')";
                            include 'connectdb.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "เพิ่มอาจารย์ เรียบร้อยแล้ว<br>";
                            header('refresh: 2; category_list.php');
                            
                            
                        }else{
                            
                    ?>
                    <form class="form-horizontal" role="form" name="category_add" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        
                        <div class="form-group">
                            <label for="cgr_id" class="col-md-2 col-lg-2 control-label">ประเภทที่</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="cgr_id" id="cgr_id" class="form-control">
                            </div> 
                        </div> 

                        <div class="form-group">
                            <label for="cgr_jp" class="col-md-2 col-lg-2 control-label">ชื่อญี่ปุ่น</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="cgr_jp" id="cgr_jp" class="form-control">
                            </div> 
                        </div> 

                        <div class="form-group">
                            <label for="cgr_en" class="col-md-2 col-lg-2 control-label">ชื่ออังกฤษ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="cgr_en" id="cgr_en" class="form-control">
                            </div> 
                        </div> 

                        <div class="form-group">
                            <label for="cgr_th" class="col-md-2 col-lg-2 control-label">ชื่อไทย</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="cgr_th" id="cgr_th" class="form-control">
                            </div> 
                        </div> 

                        <div class="form-group">
                            <div class="col-md-10 col-lg-10">
                                <input type="submit" name="submit" value="ตกลง" class="btn btn-default">
                            </div>    
                        </div> 
                    </form>
                    <?php
                        }
                    ?>
                </div>    
            </div>
        </div>











  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>