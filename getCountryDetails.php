<?php
include "dbFunctions.php";

$id = $_GET['id'];
$query = "SELECT * FROM statistics WHERE id ='$id'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_assoc($result)){
    $show[] = $row;
}

echo json_encode($show);

?>