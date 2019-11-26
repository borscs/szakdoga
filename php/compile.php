<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'includes.php'; ?>
</head>
<body>
<?php include 'head.php'; ?>
    <div class="d-flex justify-content-center mt-5 mb-5">
        <div class="col-sm-10">
          <h3 style="text-align:center;">Output</h3>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            <?php
            $languageID = $_POST["language"];
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
            ?>
            </div>
        </div>
</body>
<?php include 'footer.php'; ?>
</html>
