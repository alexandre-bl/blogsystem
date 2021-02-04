<?php

require_once "config.php";

$mysql = new mysqli($server, $user, $password);

$mysql->query( "
    CREATE TABLE IF NOT EXISTS posts ( title TEXT, content TEXT, date INT )
" );

$posts = $mysql->query("SELECT * from posts");

print_r( $posts );

require_once "themes/".$theme.".php";

$mysql->close();

?>