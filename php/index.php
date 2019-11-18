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
<body>
<div class="main">
    <div class="row">
        <div class="col-sm-12">
            <nav class="shadow navbar navbar-inverse navbar-fixed-top nbar">
                <div class="collapse navbar-collapse navbar-menubuilder">
                    <ul class="nav navbar-nav">
                        <li class="space"><a href="index.php"><i class="fa fa-code ispace"></i>Compiler</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row log">
        <div class="col-sm-10">
            <div class=""><h3 style="text-align:center;">Online Compiler</h3></div>
        </div>
    </div>

    <div class="row cspace">
        <div class="col-sm-8">
            <div class="form-group">
                <form action="compile.php" name="f2" method="POST">
                    <label for="lang">Choose Language</label>
                    <select class="form-control" name="language">
                        <option value="c">C</option>
                        <option value="cpp">C++</option>
                        <option value="cpp11">C++11</option>
                    </select>

                    <label for="ta">Write Your Code</label>
                    <textarea class="form-control" name="code" rows="10" cols="50"></textarea>
                    <label for="in">Enter Your Input</label>
                    <textarea class="form-control" name="input" rows="10" cols="50"></textarea>
                    <input type="submit" class="btn btn-success" value="Run Code">
                </form>

            </div>
        </div>
    </div>
</div>
<div class="area">
    <div class="well foot">
        <div class="row area">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-4">
                <?php
                date_default_timezone_set("Asia/Dhaka");
                $t = date("H:i:s");
                echo "<b>Server Time:  $t</b>";

                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>


