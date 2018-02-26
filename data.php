<?php
include 'DBconnector.php';
$result = mysqli_query($conn, "SELECT * FROM myalbums.album");
$to_encode = array();
$conn->close();
while($row = mysqli_fetch_assoc($result)) {
    $to_encode[] = $row;
};
$json = json_encode($to_encode);
echo $json;
var_dump($json);
exit();
?>