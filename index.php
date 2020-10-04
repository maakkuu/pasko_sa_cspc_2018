<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="temp\temp\reg.css">
    <link rel="stylesheet" href="animate\animate.css    ">
    <title>PASKO SA CSPC</title>
</head>

<body class="container">
    <canvas id="canvas"></canvas>
    <div class="row">
        <div class="col-md-12 row1">
            <div class="text-center">
                <form action="" id="attendForm" autocomplete="off">
                    <!-- <h3>PASKO SA CSPC 2018</h3> -->
                    <h5>ATTENDANCE</h5>
                    <!-- <h5 id="count" style="font-family:Dosis;margin-top:-10px">103</h5> -->
                    <input type="number" name="id" class="id_number form-control input-m" placeholder="ID NUMBER">
                    <button type="submit" class="btn btn-lg sub-btn">SUBMIT</button>
                </form>
            </div>

        </div>
    </div>
    <div style="margin-top:14% " class="modal animated" data-animate-css-hide="zoomOut " data-animate-css-show="fadeInDown"
        id="alreadyPrompt" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-hidden="true"
        style="display: none; margin-top: 0px;">
        <div class="modal-dialog modal-lg " style="width:100%">
            <div class="modal-content prompt">
                <div class="col-sm-12 text-center" style="z-index:1">
                    <h1 class="prompt animated tada " style="text-align:center;font-family:'Dosis';font-size:80px;color:red;">YOU'RE
                        ALREADY ON THE LIST</h1>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div style="margin-top:14% " class="modal animated" data-animate-css-hide="zoomOut " data-animate-css-show="fadeInDown"
        id="notFoundPrompt" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-hidden="true"
        style="display: none; margin-top: 0px;">
        <div class="modal-dialog modal-lg " style="width:100%">
            <div class="modal-content prompt">
                <div class="col-sm-12 text-center" style="z-index:1">
                    <h1 class="prompt animated tada " style="text-align:center;font-family:'Dosis';font-size:80px;color:red;">RECORD NOT FOUND!!</h1>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="addStudentModal" class="modal animated bounceIn" data-animate-css-hide="slideOutUp" data-animate-css-show="flipInY"
        tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-hidden="true" style="display: none; margin-top: 0px;">
        <div class="modal-dialog modal-m">
            <div class="modal-content">
                <div class="modal-header " style="background-color: #;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h4 class="modal-title" style="color: #fff;"><span class="fa fa-users fa-m"></span>ADD STUDENT
                        SCHOOL</h4>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" id="addStudent">
                        <div class="form-group">
                            <label class="control-label">ID NUMBER</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></span>
                                <input type="number" class="form-control" name="id" placeholder="ENTER ID NUMBER">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">NAME</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="name" placeholder="ENTER STUDENT NAME">
                            </div>
                        </div>
                        

                        <div id="success" class="alert alert-error alert-dismissable" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4>Successfully Added! <i class="fa fa-check fa-fw"></i></h4>
                        </div>
                        <div class="alert alert-success  alert-dismissable add_success"style="display: none;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Successfully Added!</strong>
                        </div>
                        
                        <div id="already" class="alert alert-danger  alert-dismissable add_error" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>RECORD ALREADY EXIST!</strong>
                        </div>

                </div>
                <div class="modal-footer" style="background-color: #f0f0f0;">
                    <button type="submit" class="btn btn-success">ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top:14% " class="modal animated" data-animate-css-hide="zoomOut " data-animate-css-show="fadeInDown"
        id="errorPrompt" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-hidden="true"
        style="display: none; margin-top: 0px;">
        <div class="modal-dialog modal-lg " style="width:100%">
            <div class="modal-content prompt">
                <div class="col-sm-12 text-center" style="z-index:1">
                    <h1 class="prompt animated tada " style="text-align:center;font-family:'Dosis';font-size:80px;color:red;">ERROR</h1>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div style="margin-top:14% " class="modal animated" data-animate-css-hide="zoomOut " data-animate-css-show="fadeInDown"
        id="attendPrompt" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-hidden="true"
        style="display: none; margin-top: 0px;">
        <div class="modal-dialog modal-lg " style="width:100%">
            <div class="modal-content prompt">
                <div class="col-sm-2">
                    <img class="animated fadeOut pull-left" src="fireworks.gif" alt="" style="margin-left:50px;margin-top:-170px;z-index:-1;animation-duration: 3.5s;">
                </div>
                <div class="col-sm-8 text-center promptName" style="z-index:1;display:block;">
                    <h1 class="prompt animated bounceIn slower delay-1s" style="text-align:center;font-family:'Dosis';font-size:60px;color:#e78019fa;">WELCOME
                        AND ENJOY YOUR NIGHT!!</h1>
                    <h4 id="attendName" class="animated bounceIn  delay-3s" style="font-family:'Dosis';color:red;font-size:40px;">Sumpay,
                        Mark Anthony Bernales</h4>
                </div>
                <div class="col-sm-2">
                    <img class="animated fadeOut" src="fireworks.gif" alt="" style="margin-left:-310px;margin-top:-170px;z-index:-1;animation-duration: 3.5s;">
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-style">
<!--#e8e5e5-->
					<div class="pull-right">
							<strong><span class="fa fa-laptop fa-fw"></span><span class="fa fa-code fa-fw"></span>Junior Philippine Computer Society • CSPC Chapter</strong>
					</div>
			<!-- Default to the left -->
					<strong>Copyright  &copy; 2018 | #PASKO_SA_CSPC</strong> 
					
</footer>
</body>
<script src="index.js"></script>
<script src="jquery-1.11.1.min.js"></script>
<script src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
<style>
    footer{
        botttom:0px;
        position:absolute;
    }
    .row1 {
        margin-top: 20%;
        margin-left: 10px;
    }

    @keyframes textShadowChange {
    from{
        text-shadow: 0px 0px 100px black;
    }
    to{
        text-shadow: 0px 0px 50px #fcf8e3;
    }

} 
    .id_number {
        /* transition-timing-function: ease-in; */
        /* transition-delay: 1s; */
        border: red 5px solid;
        width: 400px;
        margin: auto;
        height: 90px;
        text-align: center;
        font-size: 50px;
        color: green;
        border: 15px solid pink;
        /* border-image: repeating-linear-gradient( 45deg,  #e6004c,  #e6004c 5%, white 5%, white 10%) 10;
    -webkit-animation-name: borderChange;
    -webkit-animation-duration:1s;
    -webkit-animation-timing-function: ease-in;
    -webkit-animation-iteration-count:infinite; */
        /* border-image: repeating-linear-gradient( 45deg, purple, purple 1%, pink 1%, pink 8%) 10; */
        /* color: purple; */
    }

    h3 {
        /* font-family: */
        font-family: "Black And White Picture";
        /* font-weight:bold; */
        font-size: 120px;
        margin-top: -100px;
        color: gray;
        margin-bottom: 90px;
    }

    h5 {
        /* font-family: */
        font-family: "Black And White Picture";

        /* font-weight:bold; */
        font-size: 50px;
        margin-top: 30px;
        color: white;
        margin-bottom: 10px;
    }

    .sub-btn {
        margin-top: 10px;
        color: #e6004c;
        width: 200px;
        border-radius: 1px;
        font-family: "Dosis";
        background-color: #DDDDDD;
        -webkit-transition: ease-in;
        -webkit-transition-duration: .5s;
    }

    .sub-btn:hover {
        background-color: #e6004c;
        color: #DDDDDD;
        width: 220px;;

    }

    * {
        box-sizing: border-box;
    }

    body {
        background: url("registration.jpg");
        /* background-size:100px 100px; */
        background-size: cover;
        background-position: top;
        /* background- */
    }
    #attendName{
        animation:ease;
        animation-name:textShadowChange;
        animation-duration: .5s;
        animation-iteration-count:infinite
    }
</style>
<script>
    $(function () {
        setColor1();
    });
    $(".id_number").on("keyup", function () {
        console.log("GG");
    });

    function setColor1() {
        $(".id_number").css('border-image',
            'repeating-linear-gradient( 45deg,  #e6004c,  #e6004c 5%, #319263 5%, #319263 10%) 10');
        setTimeout(function () {
            setColor2();
        }, 1000);
    }

    function setColor2() {
        $(".id_number").css('border-image',
            'repeating-linear-gradient( 45deg,#319263,  #319263 5%,#e6004c 5%,#e6004c 10%) 10');
        setTimeout(function () {
            setColor1();
        }, 1000);
    }
    $(function () {
        // updateCount();
        $("#attendForm").on("submit", function (ev) {
            ev.preventDefault();
            console.log("SUBMIT");
            $.ajax({
                url: "attend.php",
                type: "GET",
                data: $("#attendForm").serialize(),
                success: function (data) {
                    console.log(data);
                    var ad = new Audio("welcome.MP3");
                    if (data != "error" && data != "not_found" && data != "already") {
                        ad.play();
                        // alert(data);
                        $("#attendName").html(data);
                        $("#attendPrompt").modal();
                        for(var i = 0 ; i < 10; i++){
                            $("#attendName").css("text-shadow","0px 0px 100px red");
                        }
                        setTimeout(function () {
                            $(".promptName").addClass("fadeOut");
                            $("#attendPrompt").modal("hide");
                            $(".promptName").removeClass("fadeOut");
                            
                            $("#attendForm").trigger("reset");
                            
                            $("#attendForm input").focus();
                            // setTimeout(function(){
                            // updateCount();

                            // },2000)
                        }, 3000);

                    } else if (data == "already"){
                        var aud = new Audio("audio/wrong.mp3");
                        aud.play();
                        $("#alreadyPrompt").modal(); setTimeout(function () {
                            $("#alreadyPrompt").modal("hide");
                            $("#attendForm").trigger("reset");
                            
                            $("#attendForm input").focus();
                        }, 3000);
                    }else if(data =="not_found"){
                        var aud = new Audio("audio/wrong.mp3");
                        aud.play();
                        $("#notFoundPrompt").modal(); setTimeout(function () {
                            $("#notFoundPrompt").modal("hide");
                            $("#attendForm").trigger("reset");
                            
                            $("#attendForm input").focus();
                        }, 3000);
                    }else if (data == "error"){
                        var aud = new Audio("audio/wrong.mp3");
                        aud.play();
                        $("#errorPrompt").modal(); setTimeout(function () {
                            $("#errorPrompt").modal("hide");
                            // $("#attendForm").trigger("reset");
                            
                            $("#attendForm input").focus();
                        }, 3000);
                    }
                },
                error: function () {
                    alert("error");
                }
            });
        });
        $("#addStudent").on("submit",function(ev){
            ev.preventDefault();
            $.ajax({
                url:"addStudent.php",
                type:"POST",
                data:$("#addStudent").serialize(),
                success:function(data){
                    alert(data);
                },error:function(){
                    alert("AJAX ERROR");
                }
            });
        });
    });
    
$(document).bind('keydown', function(e){
    
        if( e.key == 'Insert' && e.ctrlKey){
            $("#addStudentModal").modal("show");
        }
        
    });
    // function updateCount(){
    //     // setTimeout(function(){
    //         $.ajax({
    //             url:"count.php",
    //             type:"GET",
    //             success:function(data){
    //                 if($("#count").html()!=data){
                        
    //                     $("#count").html(data);
    //                     $("#count").addClass("animated");
    //                     $("#count").addClass("pulse");
    //                     $("#count").html(data);
    //                     // $("#count").removeClass("animated");
    //                     // $("#count").removeClass("pulse");
    //                     // setTimeout(function(){
    //                     //     updateCount();
    //                     // },1000);
    //                 }
    //             }
    //         });
    //     // },2000);
    // }
</script>

</html>