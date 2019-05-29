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
      <div class="container">
                    <h4>แสดงวันที่ตีพิมพ์ของรายชื่อการ์ตูน</h4>
                    <a href="data_add.php" class="btn btn-link">เพิ่มข้อมูลวันที่ตีพิมพ์</a>
                    <h6>**หมายเหตุ** วันที่และเดือนบางหัวข้ออาจไม่สามารถหาวันที่และเดือน ที่ตีพิมพ์ครั้งแรกได้จริง</h6>
                    <div class="container">
                    <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <table class="table table-hover table-success">
                            <thead>
                                <tr>
                                    <th>ลำดับที่</th>
                                    <th>วันที่</th>
                                    <th>เดือน</th>
                                    <th>ปี</th>
                                    <th>ชื่อการ์ตูนไทย</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                    <?php
                        include 'connectdb.php';                        
                        $sql =  'SELECT * FROM data_detail order by dat_id';
                        $result = mysqli_query($conn,$sql);
                        while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                            echo '<tr>';
                            echo '<td>' . $row['dat_id'] . '</td>';
                            echo '<td>' . $row['dat_day'] .'</td>';
                            echo '<th>' . $row['dat_mon'] .'</td>';
                            echo '<th>' . $row['dat_year'] .'</td>';
                            echo '<th>' . $row['lisct_nameth'] .'</td>';
                         

                           
                            echo '<td>';
                            ?>
                                <a href="data_edit.php?lisct_id=<?php echo $row['dat_id'];?>" class="btn btn-secondary">แก้ไข</a>
                                <a href="JavaScript:if(confirm('ยืนยันการลบ')==true)
                                   {window.location='data_delete.php?lisct_id=<?php echo $row["dat_id"];?>'}" class="btn btn-info">ลบ</a>
                            <?php
                                    echo '</td>';                            
                            echo '</tr>';
                        }
                        mysqli_free_result($result);
                        echo '</table>';
                        mysqli_close($conn);
                    ?>
                            </tbody>
                        </table>    
                </div>    
              </div>
            </div>
          </div>
          <br>
          <br>
          <br>
          <br>
   
    

            

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>