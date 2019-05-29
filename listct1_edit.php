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
                            $lisct1_nameen = $_GET['lisct1_nameen'];
                            $lisct_nameth = $_GET['lisct_nameth'];
                            $ttl_name = $_GET['ttl_name'];
                            $lct1_name = $_GET['lct1_name'];
                            $cgr_jp = $_GET['cgr_jp'];
                            $cgr_en = $_GET['cgr_en'];
                            $cgr_th = $_GET['cgr_th'];
                            $sql = "update listct1_detall set ";
                            $sql .= "lisct1_nameen='$lisct1_nameen',lisct_nameth='$lisct_nameth',ttl_name='$ttl_name',lct1_name='$lct1_name'
                            ,cgr_jp='$cgr_jp',cgr_en='$cgr_en',cgr_th='$cgr_th' ";
                            $sql .="where lisct1_id='$lisct1_id' ";
                            include 'connectdb.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "แก้ไขข้อมูลอาจารย์ เรียบร้อยแล้ว<br>";
                            header('refresh: 2; listct1_list.php');
                            echo '<a href="listct1_list.php">แสดงรายชื่ออาจารย์ทั้งหมด</a>';
                            
                        }else{
                    ?>
                    <form class="form-horizontal" role="form" name="listct1_edit" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <div class="form-group">
                            <input type="hidden" name="listct1_id" id="listct1_id" value="<?php echo "$listct1_id";?>">
                            <label for="listct1_id" class="col-md-2 col-lg-2 control-label">ชื่อการ์ตูนอังกฤษ</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="listct1_id" id="listct1_id" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    $sql2 = "select * from listct1 where lisct1_id='$listc1_id'";
                                    $result2 = mysqli_query($conn,$sql2);
                                    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                    $flisct1_nameen = $row2['lisct1_nameen'];
                                    $flisct_nameth = $row2['lisct_nameth'];
                                    $fttl_name = $row2['ttl_name'];
                                    $flct1_name = $row2['lct1_name'];
                                    $fcgr_jp = $row2['cgr_jp'];
                                    $fcgr_en = $row2['cgr_en'];
                                    $fcgr_th = $row2['cgr_th'];
                                    $sql =  "SELECT * FROM listct1 order by lisct1_id";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['lisct1_id'].'"';
                                        if($row['lisct1_id']==$flisct1_nameen){
                                            echo ' selected="selected" ';
                                        }
                                        echo ">";
                                        echo $row['lisct1_nameen'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    mysqli_close($conn);
                                ?>
                                </select>
                           </div>    
                        </div>
                        <div class="form-group">
                            <label for="lisct_nameth" class="col-md-2 col-lg-2 control-label">ชื่อการ์ตูนไทย</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="lisct_nameth" id="lisct_nameth" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    $sql2 = "select * from listct where lisct_id='$lisct_id'";
                                    $result2 = mysqli_query($conn,$sql2);
                                    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                    $flisct1_nameen = $row2['lisct1_nameen'];
                                    $flisct_nameth = $row2['lisct_nameth'];
                                    $fttl_name = $row2['ttl_name'];
                                    $flct1_name = $row2['lct1_name'];
                                    $fcgr_jp = $row2['cgr_jp'];
                                    $fcgr_en = $row2['cgr_en'];
                                    $fcgr_th = $row2['cgr_th'];
                                    $sql =  "SELECT * FROM listct order by lisct_id";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['lisct_id'].'"';
                                        if($row['lisct_id']==$flisct_nameth){
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
                            <label for="lisct1_nameen" class="col-md-2 col-lg-2 control-label">คำนำหน้าชื่อ</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="lisct1_nameen" id="lisct1_nameen" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    $sql2 = "select * from listct1 where lisct1_id='$lisct1_id'";
                                    $result2 = mysqli_query($conn,$sql2);
                                    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                    $flisct1_nameen = $row2['lisct1_nameen'];
                                    $flisct_nameth = $row2['lisct_nameth'];
                                    $fttl_name = $row2['ttl_name'];
                                    $flct1_name = $row2['lct1_name'];
                                    $fcgr_jp = $row2['cgr_jp'];
                                    $fcgr_en = $row2['cgr_en'];
                                    $fcgr_th = $row2['cgr_th'];
                                    $sql =  "SELECT * FROM title order by ttl_id";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['ttl_id'].'"';
                                        if($row['ttl_id']==$fttl_name){
                                            echo ' selected="selected" ';
                                        }
                                        echo ">";
                                        echo $row['ttl_name'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    mysqli_close($conn);
                                ?>
                                </select>
                           </div>    
                        </div>
                        
                        <div class="form-group">
                            <label for="lct1_name" class="col-md-2 col-lg-2 control-label">ชื่ออาจาร์</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="lct1_name" id="lct1_nameth" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    $sql2 = "select * from listct1 where lisct1_id='$lisct1_id'";
                                    $result2 = mysqli_query($conn,$sql2);
                                    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                    $flisct1_nameen = $row2['lisct1_nameen'];
                                    $flisct_nameth = $row2['lisct_nameth'];
                                    $fttl_name = $row2['ttl_name'];
                                    $flct1_name = $row2['lct1_name'];
                                    $fcgr_jp = $row2['cgr_jp'];
                                    $fcgr_en = $row2['cgr_en'];
                                    $fcgr_th = $row2['cgr_th'];
                                    $sql =  "SELECT * FROM lecturer order by lct1_id";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['lct1_id'].'"';
                                        if($row['lct1_id']==$flct1_name){
                                            echo ' selected="selected" ';
                                        }
                                        echo ">";
                                        echo $row['lct1_name'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    mysqli_close($conn);
                                ?>
                                </select>
                           </div>    
                        </div>
                        <div class="form-group">
                            <label for="cgr_jp" class="col-md-2 col-lg-2 control-label">ชื่อประเภทการ์ตูนญี่ปุ่น</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="cgr_jp" id="cgr_jp" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    $sql2 = "select * from listct1 where lisct1_id='$lisct1_id'";
                                    $result2 = mysqli_query($conn,$sql2);
                                    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                    $flisct1_nameen = $row2['lisct1_nameen'];
                                    $flisct_nameth = $row2['lisct_nameth'];
                                    $fttl_name = $row2['ttl_name'];
                                    $flct1_name = $row2['lct1_name'];
                                    $fcgr_jp = $row2['cgr_jp'];
                                    $fcgr_en = $row2['cgr_en'];
                                    $fcgr_th = $row2['cgr_th'];
                                    $sql =  "SELECT * FROM category order by cgr_id";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['cgr_id'].'"';
                                        if($row['cgr_id']==$fcgr_jp){
                                            echo ' selected="selected" ';
                                        }
                                        echo ">";
                                        echo $row['cgr_jp'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    mysqli_close($conn);
                                ?>
                                </select>
                           </div>    
                        </div>

                        <div class="form-group">
                            <label for="cgr_en" class="col-md-2 col-lg-2 control-label">ชื่อประเภทการ์ตูนอันกฤษ</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="cgr_en" id="cgr_en" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    $sql2 = "select * from listct1 where lisct1_id='$lisct1_id'";
                                    $result2 = mysqli_query($conn,$sql2);
                                    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                    $flisct1_nameen = $row2['lisct1_nameen'];
                                    $flisct_nameth = $row2['lisct_nameth'];
                                    $fttl_name = $row2['ttl_name'];
                                    $flct1_name = $row2['lct1_name'];
                                    $fcgr_jp = $row2['cgr_jp'];
                                    $fcgr_en = $row2['cgr_en'];
                                    $fcgr_th = $row2['cgr_th'];
                                    $sql =  "SELECT * FROM category order by cgr_id";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['cgr_id'].'"';
                                        if($row['cgr_id']==$fcgr_en){
                                            echo ' selected="selected" ';
                                        }
                                        echo ">";
                                        echo $row['cgr_en'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    mysqli_close($conn);
                                ?>
                                </select>
                           </div>    
                        </div>

                        <div class="form-group">
                            <label for="cgr_th" class="col-md-2 col-lg-2 control-label">ชื่อประเภทการ์ตูนไทย</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="cgr_th" id="cgr_th" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    $sql2 = "select * from listct1 where lisct1_id='$lisct1_id'";
                                    $result2 = mysqli_query($conn,$sql2);
                                    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
                                    $flisct1_nameen = $row2['lisct1_nameen'];
                                    $flisct_nameth = $row2['lisct_nameth'];
                                    $fttl_name = $row2['ttl_name'];
                                    $flct1_name = $row2['lct1_name'];
                                    $fcgr_jp = $row2['cgr_jp'];
                                    $fcgr_en = $row2['cgr_en'];
                                    $fcgr_th = $row2['cgr_th'];
                                    $sql =  "SELECT * FROM category order by cgr_id";
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['cgr_id'].'"';
                                        if($row['cgr_id']==$fcgr_th){
                                            echo ' selected="selected" ';
                                        }
                                        echo ">";
                                        echo $row['cgr_th'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
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







<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>