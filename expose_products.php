<?php require "config.php"?>

<?php
$sql = "SELECT * FROM products";
$result = $link->query($sql);
// $row = $result->fetch_assoc();
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = array(
        "id" => $row['id'],
        "name" => $row['name'],
        "price" => $row['price']
    );
}
$jsonData = json_encode($data);

echo $jsonData;
?>