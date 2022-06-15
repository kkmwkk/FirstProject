<?php
$conn = mysqli_connect("database-2.cbhxovzl1tbc.ap-northeast-2.rds.amazonaws.com", "GLEE", "DNFJR1111");
mysqli_select_db($conn, "codna");
$result = mysqli_query($conn, "SELECT * FROM food");
?>


<!DOCTYPE html>
<html>

<head>
  <title>채움요정</title>
  <meta charset="utf-8" />
  <link href="style99.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=0.4, maximum-scale=0.4, user-scalable=no">
  <meta http-equiv="ScreenOrientation" content="autoRotate:disabled"> <!--<가로모드 방지> -->
  <!--폰트 아래3줄-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hi+Melody&display=swap" rel="stylesheet">
  <!--폰트 위3줄-->


</head>

<body>
  <header>
    <div class="headbox">
      <div class="container">
        <div><img src="JSP/img/logo.png" alt="채움요정" class="logo" width="300"></div>

        <h1>
          <div id="today"></div>
          <script type="text/javascript" charset="utf-8">
            Date.prototype.myCalendar = function () {
              switch (this.getMonth()) {
                case 0: this.myMonth = "1월"; break;
                case 1: this.myMonth = "2월"; break;
                case 2: this.myMonth = "3월"; break;
                case 3: this.myMonth = "4월"; break;
                case 4: this.myMonth = "5월"; break;
                case 5: this.myMonth = "6월"; break;
                case 6: this.myMonth = "7월"; break;
                case 7: this.myMonth = "8월"; break;
                case 8: this.myMonth = "9월"; break;
                case 9: this.myMonth = "10월"; break;
                case 10: this.myMonth = "11월"; break;
                case 11: this.myMonth = "12월"; break;
              }

              switch (this.getDay()) {
                case 0: this.myWeek = "일"; break;
                case 1: this.myWeek = "월"; break;
                case 2: this.myWeek = "화"; break;
                case 3: this.myWeek = "수"; break;
                case 4: this.myWeek = "목"; break;
                case 5: this.myWeek = "금"; break;
                case 6: this.myWeek = "토"; break;
              }
            };

            var d = new Date();
            d.myCalendar();
            var year = d.getFullYear() + "년";
            var month = d.myMonth;
            var week = d.myWeek;
            var day = d.getDate() + "일";

            document.getElementById("today").innerHTML = " "
              + year + month + day + "(" + week + ")";
          </script>
        </h1>
      </div>
    </div>
  </header>

  <div class="back1">
    <form action="" method="POST" enctype="multipart/form-data">
    <table cellspacing="0" cellpadding="0"> 
    
      <tr class=notice><!--첫번째 행(공지)-->
        <p>
          <?PHP
          $result = mysqli_query( $conn, "SELECT * FROM memotable" );
          while( $row = mysqli_fetch_array( $result ) ) {
            echo '<th colspan="3">'. $row[ 'memo' ] . '</th>';
          }
          ?>
        </p>
      </tr><!--첫번째 행(공지)-->
      <!-- <tr class=sign>두번째 행 -->
        <!-- <td colspan="2" class="foodname">menu</td>    두번째 행  1열 -->
        <!-- <td class="foodprice">price</td>   두번째 행  2열 -->
      <!-- </tr>두번째 행 -->
      
      <?php
      $result = mysqli_query( $conn, "SELECT * FROM food" );
      while( $row = mysqli_fetch_array( $result ) ) {
        echo '<tr class="sibal">
        <td clospan="2" class="imageKAN"><img src="data:image;base64 ,'.base64_encode($row['file']).'" width="300" height="300px" /></td>
        
        <td class="menuKAN">
        <tr class="sibal">' . $row[ 'name' ] .'</tr>

        
        
         </td>
        
        
        </tr>';
      }
    ?>
  
    
    </table>
    </form>
  </div>

  
  


  </body>     
</html>
