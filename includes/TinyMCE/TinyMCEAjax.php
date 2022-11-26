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
echo $generator->getContent( $_REQUEST["words"], 'html' );