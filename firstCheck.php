<?php 
// executing file and getting the output 
// http://php.net/manual/en/function.exec.php

exec("sudo python firstCheck.py " ,$output);
// the output is encoded in json 
echo json_encode($output); 
