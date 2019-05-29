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
   
  <body>

      <?php include 'header.php';?>
      <?php include 'menu.php';?>
      <br>
      <br>
      <div class="col-sm-5 col-md-7">
                    <h4>แก้ไขรายชื่อการ์ตูน</h4>
                    <?php
                        $cgr_id = $_REQUEST['cgr_id'];
                        if(isset($_GET['submit'])){
                            $cgr_id = $_GET['cgr_id'];
                            $cgr_jp = $_GET['cgr_jp'];
                            $cgr_en = $_GET['cgr_en'];
                            $cgr_th = $_GET['cgr_th'];
                            $sql = "update category set ";
                            $sql .= "cgr_id='$cgr_id',cgr_jp='$cgr_jp','cgr_en','$cgr_en','cgr_th','$cgr_th' ";
                            $sql .="where cgr_id='$cgr_id' ";
                            include 'connectdb.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "แก้ไขรายชื่ออันดับการ์ตูน เรียบร้อยแล้ว<br>";
                            echo '<a href="category_list.php">แสดงรายชื่ออาจารย์ทั้งหมด</a>';
                        }else{
                            include 'connectdb.php';
                            $sql2 = "select * from category where cgr_id='$cgr_id'";
                            $result2 = mysqli_query($conn,$sql2);
                            $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                            $fcgr_id = $row2['cgr_id'];
                            $fcgr_jp = $row2['cgr_jp'];
                            $fcgr_en = $row2['cgr_en'];
                            $fcgr_th = $row2['cgr_th'];
                            mysqli_close($conn);
                    ?>
                    <form class="form-horizontal" role="form" name="category_edit" action="<?php echo $_SERVER['PHP_SELF']?>">
                        
                       
                        
                        <div class="form-group">
                            <label for="cgr_id" class="col-md-2 col-lg-2 control-label">อันดับการ์ตูน</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="cgr_id" id="cgr_id" class="form-control" 
                                       value="<?php echo $fcgr_id;?>">
                            </div>    
                        </div> 

                        <div class="form-group">
                            <label for="cgr_jp" class="col-md-2 col-lg-2 control-label">ชื่อการ์ตูนภาษาไทย</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="cgr_jp" id="cgr_jp" class="form-control" 
                                       value="<?php echo $fcgr_jp;?>">
                            </div>    
                        </div>    

                        <div class="form-group">
                            <label for="cgr_en" class="col-md-2 col-lg-2 control-label">ชื่อการ์ตูนภาษาอังกฤษ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="cgr_en" id="cgr_en" class="form-control" 
                                       value="<?php echo $fcgr_en;?>">
                            </div>    
                        </div>   
                        
                        <div class="form-group">
                            <label for="cgr_th" class="col-md-2 col-lg-2 control-label">ชื่อการ์ตูนภาษาอังกฤษ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="cgr_th" id="cgr_th" class="form-control" 
                                       value="<?php echo $fcgr_th;?>">
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







<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>