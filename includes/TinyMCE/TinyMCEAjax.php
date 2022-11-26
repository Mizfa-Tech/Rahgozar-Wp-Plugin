<?php

require_once 'TinyMCEIpsum.php';


/*
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
|
|
|
*/

$generator = new \rahgozar\inc\TinyMCE\TinyMCEIpsum();
echo $generator->get_content( $_REQUEST['words'] );