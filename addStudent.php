<?php
include_once("connect.php");
if(isset($_POST)){
$id = mysqli_real_escape_string($conn,$_POST['id']);
$name = mysqli_real_escape_string($conn,$_POST['name']);
$query = "SELECT * from students where id=".$id;
$result1 = mysqli_query($conn,$query) or die(mysqli_error($conn));
// $rows = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result1)==1){
    die("already");
}else{
    $query = "INSERT INTO students(id,name,dept) VALUE('".$id."','".$name."','temp')";
    $result = mysqli_query($conn,$query) or die("error");
}
echo "success";
}
?>