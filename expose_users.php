<?php require "config.php"?>

<?php
$sql = "SELECT * FROM users";
$result = $link->query($sql);
// $row = $result->fetch_assoc();
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = array(
        "id" => $row['id'],
        "name" => $row['name'],
        "firstname" => $row['firstname'],
        "lastname" => $row['lastname'],
    );
}
$jsonData = json_encode($data);

echo $jsonData;
?>