<!DOCTYPE html>
<html>

    <head>

        <link rel="stylesheet" href="<?php echo $theme_dir."/style.css"; ?>">

        <title> <?php echo $content["title"]; ?> </title>

    </head>

    <body>
    
        <h1 id="page_title"> <?php echo $content["title"]; ?> </h1>

        <ul id="links"> <?php
        
            foreach( $content["links"] as $link ) {

                $label = $link["label"];
                $url   = $link["url"];

                echo "<li><a href='$url'>$label</a></li>";

            }

        ?> </ul>

        <p id="page_desc"> <?php echo $content["description"]; ?> </p>
    
    </body>

</html>