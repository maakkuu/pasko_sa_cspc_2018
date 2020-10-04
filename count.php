<?php
include_once("connect.php");
$query = "SELECT COUNT(*) as ct FROM students where timeregistered < NOW()";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
echo $row['ct'];
?>