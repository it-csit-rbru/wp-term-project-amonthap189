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
                    <h4>แสดงประเภทการ์ตูนชื่อการ์ตูน</h4>
                    <a href="category_add.php" class="btn btn-link">เพิ่มข้อประเภท</a>
                    <div class="container">
                    <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <table class="table table-hover table-success">
                            <thead>
                                <tr>
                                    <th>ประเภทที่</th>
                                    <th>ชื่อญี่ปุ่น</th>
                                    <th>ชื่ออังกฤษ</th>
                                    <th>ชื่อไทย</th>
                                </tr>
                            </thead>
                            <tbody>
                    <?php
                        include 'connectdb.php';                        
                        $sql =  'SELECT * FROM category order by cgr_id';
                        $result = mysqli_query($conn,$sql);
                        while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                            echo '<tr>';
                            echo '<td>' . $row['cgr_id'] . '</td>';
                            echo '<td>' . $row['cgr_jp'] .'</td>';
                            echo '<th>' . $row['cgr_en'] .'</td>';
                            echo '<th>' . $row['cgr_th'] .'</td>';
                            echo '<td>';
                            ?>
                                <a href="category_edit.php?cgr_id=<?php echo $row['cgr_id'];?>" class="btn btn-secondary">แก้ไข</a>
                                <a href="JavaScript:if(confirm('ยืนยันการลบ')==true)
                                   {window.location='category_delete.php?cgr_id=<?php echo $row["cgr_id"];?>'}" class="btn btn-info">ลบ</a>
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