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
<div class="d-flex flex-column bd-highlight mb-3">
    <form class="mx-auto" action="compile.php" name="f2" method="POST">
        <div class="d-flex justify-content-center">
            <div class="d-flex flex-column">
                <div class="p-2 ">
                    <label for="lang">Choose Test:</label>
                </div>
                <div class="p-2">
                    <select class="form-control" name="language">
                        <option value="test1">1. Addjon össze a program 3 szamot.</option>
                        <option value="test2">2. Adjon össze 4 számot "ez" fugvenyt</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="p-1">
                <label for="ta" >Write Your Code</label>
                <textarea class="form-control" name="code" rows="10" cols="500"></textarea>
            </div>
            <div class="ml-3 p-1">
                <label for="in">Enter Your Input</label>
                <textarea class="form-control" name="input" rows="10" cols="500"></textarea>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" class="btn btn-success" value="Run Code">
        </div>
    </form>
</div>
<?php include 'footer.php'; ?>
</body>
</html>


