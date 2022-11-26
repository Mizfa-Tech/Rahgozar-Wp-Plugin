<?php

require_once 'TinyMCEIpsum.php';


/*
|--------------------------------------------------------------------------
| Display rahgozar ipsum
|--------------------------------------------------------------------------
|
| Adding ipsum rahgozar text to the content of the editor.
|
*/

$generator = new \rahgozar\inc\TinyMCE\TinyMCEIpsum();
echo $generator->get_content( $_REQUEST['words'] );