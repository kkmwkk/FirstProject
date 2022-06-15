<?php
$conn = mysqli_connect("database-2.cbhxovzl1tbc.ap-northeast-2.rds.amazonaws.com", "GLEE", "DNFJR1111");
mysqli_select_db($conn, "codna");
$result = mysqli_query($conn, "SELECT * FROM food");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>replit</title>
    <link href="100.css" rel="stylesheet" type="text/css" />
  </head>
<body>

<?PHP
          $result = mysqli_query( $conn, "SELECT * FROM food" );
          while( $row = mysqli_fetch_array( $result ) ) {




          

    echo '<div class="back">
    <div class="main">

      <div class="boxsize">
       <img src="data:image;base64 ,'.base64_encode($row['file']).'" width="300" height="300px" />
      </div>

        <div class="boxsize2">
          
          <div class="textstyle1">
            <h3>'. $row[ 'name' ] . '</h3>
          </div>

          <div class="textstyle2">
          '. $row[ 'menu' ] . '
          </div>

          <div class="textstyle3">
          '. $row[ 'price' ] . '
          </div>

        </div>
    </div>
</div>';

}
?>

</body>
</html>
