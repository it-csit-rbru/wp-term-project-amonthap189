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
      <div class="col-sm-5 col-md-6 ">
                    <h4>เพิ่มอันดับการ์ตูน</h4>
                    <?php
                        if(isset($_GET['submit'])){
                            $lisct_id = $_GET['lisct_id'];
                            $lisct_nameth = $_GET['lisct_nameth'];
                            $lisct_nameen = $_GET['lisct_nameen'];
                            
                            $sql = "insert into listct";
                            $sql .= " values ('$lisct_id','$lisct_nameth','$lisct_nameen')";
                            include 'connectdb.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "เพิ่มอันดับการ์ตูนเรียบรอยแล้ว<br>";
                            header('refresh: 2; listct_list.php');
                            
                            
                        }else{
                            
                    ?>
                    <form class="form-horizontal" role="form" name="listct_add" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <div class="form-group">
                            <label for="lisct_id" class="col-md-2 col-lg-2 control-label">อันดับการ์ตูน</label>
                            <div class="col-md-6 col-lg-10">
                            <input type="text" name="lisct_id" id="lisct_id" class="form-control" >
                           </div>    
                        </div>
                        
                        <div class="form-group">
                            <label for="lisct_nameth" class="col-md-2 col-lg-2 control-label">ชื่อการ์ตูนภาษาไทย</label>
                            <div class="col-md-6 col-lg-10">
                                <input type="text" name="lisct_nameth" id="lisct_nameth" class="form-control"  >    
                        </div>    
                        </div>   
                        <div class="form-group">
                            <label for="lisct_nameen" class="col-md-2 col-lg-2 control-label">ชื่อการ์ตูนภาษาอังกฤษ</label>
                            <div class="col-md-6 col-lg-10">
                                <input type="text" name="lisct_nameen" id="lisct_nameen" class="form-control" >
                                       
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