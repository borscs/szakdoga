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
        die("<pre>The code is empty</pre>");

    $inputFile = "input.txt";
    $errorFile = "error.txt";
    $check = true;



    $file_code = fopen($mainFile, "w+");
    fwrite($file_code, $code);
    fclose($file_code);

    if ($input != null) {
        $file_in = fopen($inputFile, "w+");
        fwrite($file_in, $input);
        fclose($file_in);
    }

    shell_exec($CC . " -lm " . $mainFile . " 2>" . $errorFile);
    $error = file_get_contents($errorFile);
    $startTime = microtime(true);

    if (trim($error) == "") {
        $output = output($input, $out, $inputFile);
        echo "<textarea id='div' class=\"form-control\" 
			name=\"the man\" rows=\"10\" cols=\"50\">$output</textarea>";
    } else if (!strpos($error, "error")) {
        echo "<pre>$error</pre>";
        $output = output($input, $out, $inputFile);
        echo "<textarea id='div' class=\"form-control\" 
			name=\"output\" rows=\"10\" cols=\"50\">$output</textarea>";
    } else {
        echo "<pre>$error</pre>";
        $check = false;
    }

    $seconds = sprintf('%0.001f', microtime(true) - $startTime);

    echo "<pre>Compiled And Executed In: $seconds s</pre>";

    if ($check) {
        echo "<pre>Verdict : CE</pre>";
    } else if ($check && $seconds > 3) {
        echo "<pre>Verdict : TLE</pre>";
    } else if (trim($output) == "") {
        echo "<pre>Verdict : WA</pre>";
    } else if ($check) {
        echo "<pre>Verdict : AC</pre>";
    }
}

?>