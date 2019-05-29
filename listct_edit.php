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
                    include 'connectdb.php';
                    if(isset($_GET['submit'])){
                        $lisct_id     = $_GET['lisct_id'];
                        $lisct_nameth   = $_GET['lisct_nameth'];
                        $lisct_nameen  = $_GET['lisct_nameen'];
                        $sql = "update listct set ";
                        $sql = "lisct_id'$lisct_id',lisct_nameth='$lisct_nameth',lisct_nameen='$lisct_nameen' ";
                        mysqli_query($conn,$sql);
                        mysqli_close($conn);
                        echo "แก้ไข เรียบร้อยแล้ว<br>";
                        echo '<a href="listct_list.php">แสดงเครื่องมือทั้งหมด</a>';
                    }else{
                        $flisct_id = $_REQUEST['lisct_id'];
                        $sql =  "SELECT * FROM listct where lisct_id='$flisct_id'";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                       
                        $flisct_nameth = $row['lisct_nameth'];
                        $flisct_nameen = $row['lisct_nameen'];
                        mysqli_free_result($result);
                        mysqli_close($conn);                        
                ?>
                    <form class="form-horizontal" role="form" name="program_list_edit" action="<?php echo $_SERVER['PHP_SELF']?>">
                        
                    <div class="form-group">
                            <label for="lisct_id" class="col-md-2 col-lg-2 control-label">ลำดับ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="lisct_id" id="lisct_id" class="form-control" value="<?php echo "$flisct_id";?>">
                            </div>    
                        </div>
                        
                        <div class="form-group">
                            <label for="lisct_nameth" class="col-md-2 col-lg-2 control-label">ชื่อการ์ตูนภาษาไทย</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="lisct_nameth" id="lisct_nameth" class="form-control" value="<?php echo "$flisct_nameth";?>">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="lisct_nameen" class="col-md-2 col-lg-2 control-label">ชื่อการ์ตูนภาษาอังกฤษ</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="lisct_nameen" id="lisct_nameen" class="form-control" value="<?php echo "$flisct_nameen";?>">
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