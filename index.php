<?php

    require_once "libs/markdown.php";

    $content = file_get_contents( "content.json" );
    $content = json_decode( $content, true );

    $theme_dir = "themes/".$content["theme"];
    $root_dir = __DIR__;

    require_once $theme_dir."/index.php";

?>