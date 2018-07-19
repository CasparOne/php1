<?php
ob_start();
echo 'Hello!';
$contents = ob_get_contents();

ob_end_clean();
var_dump($contents);