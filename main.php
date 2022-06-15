
// RDS 접속 
<?php
$conn = mysqli_connect("database-2.cbhxovzl1tbc.ap-northeast-2.rds.amazonaws.com", "GLEE", "1111");
mysqli_select_db($conn, "codna");
$result = mysqli_query($conn, "SELECT * FROM food");
?>


<!DOCTYPE html>
<html>

<head>
  
  <title>테스트공간쓰/style.css</title>
  <meta charset="utf-8" />
  <link href="style.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=0.4, maximum-scale=0.4, user-scalable=no">
  <meta http-equiv="ScreenOrientation" content="autoRotate:disabled"> <!--<가로모드 방지> -->
 


</head>

<body>
  <header>
    <div class="headbox">
      <div class="container">
        <div><img src="JSP/img/logo.png" onClick="window.location.reload()" alt="채움요정" class="logo" width="300"></div>
        
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

  
    <table class="table1"> 
       <tr class="notice">   <!--첫번째 행(공지)-->
          <?PHP
          $result = mysqli_query( $conn, "SELECT * FROM memotable" );
          while( $row = mysqli_fetch_array( $result ) ) {
            echo '<th colspan="3">'. $row[ 'memo' ] . '</th>';
          }
          ?>
      </tr>   <!--첫번째 행(공지) -->
      </table>

      
     <!-- <div id="sibal">
        </div> -->

       <table class="table2" border="">
      <?php
      $result = mysqli_query( $conn, "SELECT * FROM food" );
      while( $row = mysqli_fetch_array ( $result ) ) {
        echo '<div class="back">
    <div class="main">

      <div class="boxsize">
       <img src="data:image;base64 ,'.base64_encode($row['file']).'" width="400" height="350px" />
      </div>

        <div class="boxsize2">
          
          <div class="textstyle1">
            <h3>'. $row[ 'name' ] . '</h3>
          </div>

          <div class="textstyle2">
          '. $row[ 'menu' ] . 'ㅤ
          </div>

          <div class="textstyle3">
          ₩'. $row[ 'price' ] . '
          </div>

        </div>
    </div>
</div>';

          

              }
      ?>
       </table>
  

  
  


  </body>     
</html>
