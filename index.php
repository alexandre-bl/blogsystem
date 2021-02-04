<?php

$posts = file_get_contents( "posts.json" );
$posts = json_decode( $posts, true );

$config = file_get_contents( "config.json" );
$config = json_decode( $config, true );

$theme_dir = "themes/".$config["theme"];

require_once "themes/".$config["theme"]."/index.php";

?>