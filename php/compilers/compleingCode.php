<?php
function output($input, $out, $inputFile)
{
    if (trim($input) == "") {
        $output = shell_exec($out);
    } else {
        $out = $out . " < " . $inputFile;
        $output = shell_exec($out);
    }
    return $output;
}

function CompleingCode($CC, $mainFile)
{

    $out = "timeout 5s ./a.out";
    $code = $_POST["code"];
    $input = $_POST["input"];

    if (trim($code) == "")
        die("The code is empty");

    $inputFile = "input.txt";
    $errorFile = "error.txt";
    $check = true;



    $mainToFile = fopen($mainFile, "w+");
    fwrite($mainToFile, $code);
    fclose($mainToFile);

    if ($input != null) {
        $inputToFile = fopen($inputFile, "w+");
        fwrite($inputToFile, $input);
        fclose($inputToFile);
    }

    shell_exec($CC . " -lm " . $mainFile . " 2>" . $errorFile);
    $error = file_get_contents($errorFile);
    $startTime = microtime(true);

    if (trim($error) == "") {
        $output = output($input, $out, $inputFile);
        echo "<textarea id='div' class=\"form-control\" 
		name=\"the man\" rows=\"10\" cols=\"50\">$output</textarea>";
    }  else {
        echo "<pre>$error</pre>";
        $check = false;
    }

    $seconds = sprintf('%0.5f', microtime(true) - $startTime);

    echo "<pre>Compiled And Executed In: $seconds s</pre>";

    if ($check) {
        echo "<pre>Verdict : AC</pre>";
    } else{
        echo "<pre>Verdict : CE</pre>";
    }
}

?>