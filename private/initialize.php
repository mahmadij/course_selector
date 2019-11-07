<?php
//assign file paths to php constants
define("PRIVATE_PATH", str_replace("\\","/",dirname(__FILE__)));
// define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("COMMON_PATH", PROJECT_PATH . '/private/common');
$public_end = strpos($_SERVER['SCRIPT_NAME'],'/public')+7;
$doc_root = substr($_SERVER['SCRIPT_NAME'],0,$public_end);
define("WWW_ROOT",$doc_root);
require_once('functions.php');
?>