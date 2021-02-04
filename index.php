<?php

    $content = file_get_contents( "posts.json" );
    $content = json_decode( $content, true );

    $theme_dir = "themes/".$content["theme"];

    require_once $theme_dir."/index.php";

    echo "test";

?>