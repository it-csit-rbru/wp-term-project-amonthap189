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
      <div class="col-sm-4 col-md-5">
                    <h4>แก้ไขข้อมูลผู้สอน</h4>
                    <?php
                       
                        if(isset($_GET['submit'])){
                            $dat_id = $_GET['dat_id'];
                            $dat_list_id = $_GET['dat_list_id'];
                            $dat_day = $_GET['dat_day'];
                            $dat_mon = $_GET['dat_mon'];
                            $dat_year = $_GET['dat_year'];
                            $sql = "update data set ";
                            $sql .= "dat_id='$dat_id',dat_day='$dat_day',dat_mon='$dat_mon',dat_year='$dat_year',dat_list_id='$dat_list_id' ";
                            $sql .="where dat_id='$dat_id' ";
                            include 'connectdb.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "แก้ไขข้อมูลอาจารย์ เรียบร้อยแล้ว<br>";
                            header('refresh: 2; data_list.php');
                            echo '<a href="data_list.php">แสดงรายชื่ออาจารย์ทั้งหมด</a>';
                            
                        }else{
                         
                        
                    ?>
                    <form class="form-horizontal" role="form" name="data_edit" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <div class="form-group">
                            <input type="hidden" name="dat_id" id="dat_id" value="<?php echo "$fdat_id";?>">
                            <label for="dat_list_id" class="col-md-2 col-lg-2 control-label">ชื่อการ์ตูนภาษาไทย</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="dat_list_id" id="dat_list_id" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    $sql2 = "select * from data where dat_id='$dat_id'";
                                    $result2 = mysqli_query($conn,$sql2);
                                    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                    
                                    $fdat_day = $row2['dat_day'];
                                    $fdat_mon = $row2['dat_mon'];
                                    $fdat_year = $row2['dat_year'];
                                    $fdat_lisct_id = $row2['dat_lisct_id'];
                                    $sql =  "SELECT * FROM listct order by lisct_id";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['lisct_id'].'"';
                                        if($row['lisct_id']==$fdat_lisct_id){
                                            echo ' selected="selected" ';
                                        }
                                        echo ">";
                                        echo $row['lisct_nameth'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    mysqli_close($conn);
                                ?>
                                </select>
                           </div>    
                        </div>
                       
                        
                        <div class="form-group">
                            <label for="dat_day" class="col-md-2 col-lg-2 control-label">วัน</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="dat_day" id="dat_day" class="form-control" 
                                       value="<?php echo $fdat_day;?>">
                            </div>    
                        </div>    

                        <div class="form-group">
                            <label for="dat_mon" class="col-md-2 col-lg-2 control-label">เดือน</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="dat_mon" id="dat_mon" class="form-control" 
                                       value="<?php echo $fdat_mon;?>">
                            </div>    
                        </div>    

                        <div class="form-group">
                            <label for="dat_year" class="col-md-2 col-lg-2 control-label">ปี</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="dat_year" id="dat_year" class="form-control" 
                                       value="<?php echo $fdat_year;?>">
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