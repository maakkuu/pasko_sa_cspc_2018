<?php
    include_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="temp\temp\reg.css">
    <link rel="stylesheet" href="animate\animate.css    ">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>PASKO SA CSPC 2018</title>
</head>

<body class="container">
    <!-- <div class="row">
        <div class="col-sm-12 text-center">
            <h1 style="font-size:10px;font-family:Dosis;">ATTENDANCE</h1>
        </div>
    </div> -->
    <ol>
        <?php
            $query = 'SELECT * FROM students where timeRegistered is not NULL order By Name';
            $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
            while($row = mysqli_fetch_assoc($result)){
                echo "<li>".ucfirst($row['name'])."</li>";
            }
        ?>
    </ol>
</body>
<script src="index.js"></script>
<script src="jquery-1.11.1.min.js"></script>
<script src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
<style>
@keyframes random1{
    0%{
        /* color:white; */
        background-color:black;
    }
    10%{
        /* color:#FFDB44; */
        background-color:#E75DA8;

    }
    20%{
        color:#E2E7E7;
        background-color:#4DACE4;

    }
    30%{
        /* color:#FFE484; */
        background-color:#E83E98;

    }
    40%{
        color:#FFE484;
        background-color:#E83E98;

    }
    50%{
        /* color:#FFE484; */
        background-color:#EF1912;

    }
    60%{
        /* color:#FFE484; */
        background-color:#FFFFFF;

    }
    70%{
        /* color:#FEFEFC; */
        background-color:#950641;

    }
    80%{
        /* color:#4201FF; */
        background-color:#4F1B1D;

    }
    90%{
        /* color:#86A2B9; */
        background-color:#827D81;

    }
    100%{
        /* color:#A49AD6; */
        background-color:#389583;

    }
}
body{
    animation-name:random;
    animation-iteration-count:infinite;
    animation-duration:10s;
}
</style>
<script>
</script>

</html>