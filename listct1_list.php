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
                    <a href="listct1_add.php" class="btn btn-link">เพิ่มข้อมูลวันที่ตีพิมพ์</a>
                    <div class="container">
                    <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <table class="table table-hover table-success">
                            <thead>
                                <tr>
                                    <th scope="col">ลำดับที่</th>
                                    <th scope="col">ชื่อการ์ตูนอังกฤษ</th>
                                    <th scope="col">ชื่อการ์ตูนไทย</th>
                                    
                                    <th scope="col">ชื่ออาจาร์</th>
                                    <th scope="col">ชื่อประเภทการ์ตูนญี่ปุ่น</th>
                                    <th scope="col">ชื่อประเภทการ์ตูนอันกฤษ</th>
                                    <th scope="col">ชื่อประเภทการ์ตูนไทย</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                    <?php
                        include 'connectdb.php';                        
                        $sql =  'SELECT * FROM lisct1_datall order by lisct1_id';
                        $result = mysqli_query($conn,$sql);
                        while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                            echo '<tr>';
                            echo '<td>' . $row['lisct1_id'] . '</td>';
                            echo '<td>' . $row['lisct1_nameen'] .'</td>';
                            echo '<th>' . $row['lisct_nameth'] .'</td>';
                            echo '<th>' . $row['ttl_name'] .' '. $row['lct1_name'] .'</td>';
                            echo '<th>' . $row['cgr_jp'] .'</td>';
                            echo '<th>' . $row['cgr_en'] .'</td>';
                            echo '<th>' . $row['cgr_th'] .'</td>';
                         

                           
                            echo '<td>';
                            ?>
                                <a href="listct1_edit.php?lisct1_id=<?php echo $row['lisct1_id'];?>" class="btn btn-secondary">แก้ไข</a>
                                <a href="JavaScript:if(confirm('ยืนยันการลบ')==true)
                                   {window.location='listct1_delete.php?lisct1_id=<?php echo $row["lisct1_id"];?>'}" class="btn btn-info">ลบ</a>
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