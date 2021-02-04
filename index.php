<?php

$content = file_get_contents( "posts.json" );
$content = json_decode( $content, true );

$theme_dir = "themes/".$content["theme"];

require_once "themes/".$content["theme"]."/index.php";

?>