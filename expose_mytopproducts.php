<?php require "config.php"?>

<?php
$sql = "SELECT * FROM products order by views desc limit 5";
$result = $link->query($sql);
// $row = $result->fetch_assoc();
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = array(
        "name" => $row['name'],
        "price" => $row['price'],
        "views" => $row['views']

    );
}
$jsonData = json_encode($data);

echo $jsonData;
?>