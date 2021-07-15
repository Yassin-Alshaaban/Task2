<html>
<head>
</head>
<body>
<style>
#Result {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#Result td, #Result th {
  border: 1px solid #ddd;
  padding: 8px;
}

#Result tr:nth-child(even){background-color: #f2f2f2;}

#Result tr:hover {background-color: #ddd;}

#Result th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<center>
  <?php
  // معلومات الإتصال بقاعدة البيانات
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "myform";
  
  // إنشاء الإتصال
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // إختبار الإتصال
  if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  }
  
  $result = mysqli_query($conn,"select * from directions");
  ?>

  <form method="post">

  <table id="Result">
    <tr>
    <th>id</th>
    <th>value</th>
    <th>direction</th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($result)){
         echo "<tr>";
                echo "<td>" .$row['id'].        "</td>";
                echo "<td>" .$row['value'].     "</td>";
                echo "<td>" .$row['direction']. "</td>";
        echo "</tr>";
}

?>
  </table>
  </form>
</center>
</body>

</html>