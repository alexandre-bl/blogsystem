<?php

$posts = file_get_contents( "posts.json" );
$posts = json_decode( $posts, true );

$config = file_get_contents( "config.json" );
$config = json_decode( $config, true );

require_once "themes/".$config["theme"]."/index.php";

?>