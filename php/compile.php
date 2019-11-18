<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<div class="main">
    <div class="row">
        <div class="col-sm-12">
            <nav class="navbar navbar-inverse navbar-fixed-top nbar">
                <ul class="nav navbar-nav">
                    <li class="space"><a href="index.php"><i class="fa fa-code ispace"></i>Compiler</a></li>
                </ul>

            </nav>
        </div>
    </div>


    <div class="row log">
        <div class="col-sm-10">
            <div class=""><h3 style="text-align:center;">Output</h3></div>
        </div>
    </div>


    <div class="row cspace">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-8">


            <?php
            $languageID = $_POST["language"];
            error_reporting(0);
            if ($_FILES["file"]["name"] != "") {
                include "compilers/make.php";
            } else {
                switch ($languageID) {
                    case "c":{
                        include("compilers/c.php");
                        break;
                    }
                    case "cpp":{
                        include("compilers/cpp.php");
                        break;
                    }
                    case "cpp11":{
                        include("compilers/cpp11.php");
                        break;
                    }
                }
            }
            ?>
        </div>
    </div>
</div>
</div>
</body>
</html>
