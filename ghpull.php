<?php 
 error_reporting(E_ALL);
 ini_set('display_errors', 1);

while(ob_get_level())ob_end_clean(); // remove output buffers
ob_implicit_flush(true);             // output stuff directly

echo shell_exec('"C:\Program Files\Git\bin\git.exe" pull 2>&1');
?>
