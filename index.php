<?php

$posts = file_get_contents( "posts.json" );
$posts = json_decode( $posts, true );

print_r( $posts );

require_once "themes/default.php";

?>