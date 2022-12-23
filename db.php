<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="main.css">
<title>METANIT.COM</title>
</head>
<body>
<h2>Список пользователей</h2>
<?php
header('content-type: text/html; charset=utf-8');
$conn = new mysqli("localhost", "root", "789456", "intmag");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
mysqli_query($conn, "SET NAMES utf8");

$sql = "SELECT * FROM clients";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<table border='1' class='phone'><tr><th>Id</th><th>Имя</th><th>Телефон</th><th>Адрес</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["id_cl"] . "</td>";
            echo "<td>" . $row["FIO"] . "</td>";
            echo "<td>" . $row["telefon"] . "</td>";
			echo "<td>" . $row["address"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
</body>
</html>