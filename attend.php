<?php
include_once("connect.php");
$id = mysqli_real_escape_string($conn,$_GET['id']."");
$query = "SELECT * FROM students where id =".$id."";
$result1 = mysqli_query($conn,$query) or die("error");//$query."|".mysqli_error($conn));
$response = "";
$row = mysqli_fetch_assoc($result1);
if(mysqli_num_rows($result1) == 1){
    // die("NOT YET");
    if($row['timeRegistered'] == NULL){
        $query = "UPDATE students set timeRegistered=NOW() where id=".$id;
        mysqli_query($conn,$query) or die("error");//$query."|".mysqli_error($query));
        // $response = 
        $response = $row['name'];
    }else{
        $response = "already";
    }

}else{
    $response = "not_found";
}
echo $response;
?>