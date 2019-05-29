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
                    <h4>เพิ่มวันที่ตีพิมพ์ของรายชื่อการ์ตูน</h4>
                    <?php
                        if(isset($_GET['submit'])){
                            $da_id = $_GET['dat_id'];
                            $dat_day = $_GET['dat_day'];
                            $dat_mon = $_GET['dat_mon'];
                            $dat_year = $_GET['dat_year'];
                            $dat_lisct_id = $_GET['dat_lisct_id'];
                            $sql = "insert into data";
                            $sql .= " values ('null','$dat_day','$dat_mon','$dat_year','$dat_lisct_id')";
                            include 'connectdb.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "เพิ่มวันที่ตีพิมพ์ของรายชื่อการ์ตูนเรียบรอยแล้ว<br>";
                            header('refresh: 2; data_list.php');
                            
                            
                        }else{
                            
                    ?>
                    <form class="form-horizontal" role="form" name="data_add" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <div class="form-group">
                            <label for="dat_id" class="col-md-2 col-lg-2 control-label">อันดับ</label>
                            <div class="col-md-6 col-lg-10">
                                <input type="text" name="dat_id" id="dat_id" class="form-control"  >    
                        </div>   
                        </div>
                        
                        <div class="form-group">
                            <label for="dat_day" class="col-md-2 col-lg-2 control-label">วันที่</label>
                            <div class="col-md-6 col-lg-10">
                                <input type="text" name="dat_day" id="dat_day" class="form-control"  >    
                        </div>    
                        </div>   

                        <div class="form-group">
                            <label for="dat_mon" class="col-md-2 col-lg-2 control-label">เดือน</label>
                            <div class="col-md-6 col-lg-10">
                                <input type="text" name="dat_mon" id="dat_mon" class="form-control" >
                        </div>     
                        </div>   

                        <div class="form-group">
                            <label for="dat_year" class="col-md-2 col-lg-2 control-label">ปี</label>
                            <div class="col-md-6 col-lg-10">
                                <input type="text" name="dat_year" id="dat_year" class="form-control" >
                        </div>     
                        </div>   
                        <div class="form-group">
                        
                            <label for="dat_lisct_id" class="col-md-2 col-lg-2 control-label">ชื่อการ์ตูนภาษาไทย</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="dat_lisct_id" id="dat_lisct_id" class="form-control"> <!--56ถึง69สร้างแถปตวเลือกคำนำหน้า-->
                                <?php
                                    include 'connectdb.php';
                                    $sql =  'SELECT * FROM listct order by lisct_id';
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) { 
                                        echo '<option value=';              
                                        echo '"' . $row['lisct_id'] . '">';
                                        echo $row['lisct_nameth'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    echo '</table>';
                                    mysqli_close($conn);
                                ?>
                                </select>
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
         <br>
         <br>                   










  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>