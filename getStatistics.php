<?php
include "dbFunctions.php";


$query = "SELECT * FROM statistics";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_assoc($result)){
    $show[] = $row;
}

echo json_encode($show);

?>