<!DOCTYPE html>
<html>

<head>
  <title>음식</title>
  <meta charset="utf-8" />
  <link href="style.css" rel="stylesheet">
  <!--폰트 아래3줄-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Yanone+Kaffeesatz:wght@600&display=swap"
    rel="stylesheet">
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

            document.getElementById("today").innerHTML = "Today : "
              + year + month + day + "(" + week + ")";
          </script>
        </h1>
  </header>

  
</body>

<?php

$conn = mysqli_connect("database-2.cbhxovzl1tbc.ap-northeast-2.rds.amazonaws.com", "GLEE", "DNFJR1111", "codna");

$sql = "SELECT name,price FROM food";
$result = mysqli_query($conn, $sql);


echo "<style>td { border:1px solid #ccc; padding:100px; }</style>";
echo "<table><tbody>";

if (mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) {
 

echo "<tr>";
echo "<td>". $row["name"]."</td><td> " . $row["price"]. "</td>";
echo "</tr>";
}

}else{
echo "테이블에 데이터가 없습니다.";
}

echo "</tbody></table>";
mysqli_close($conn); // 디비 접속 닫기

?>
  </div>
</body>
<footer>
  <div class="footbox">
  <a href="index.PHP"> <img src ="JSP/img/foodicon.png" width="75"  class="foodicon" ></a>
    <a href="index2.PHP"> <img src ="JSP/img/cafeicon.png" width="75"  class="cafeicon" ></a>
  </div>
</footer>

</html>