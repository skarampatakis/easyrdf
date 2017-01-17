<?php

set_include_path(get_include_path() . PATH_SEPARATOR . '../lib/');
    require_once "EasyRdf.php";
    require_once "html_tag_helpers.php";

    
$uri = "http://example/A.12";

$shorten = EasyRdf_Namespace::shorten($uri, true);
var_dump($uri);
var_dump($shorten);
var_dump(EasyRdf_Namespace::get('ns0'));
?>

    