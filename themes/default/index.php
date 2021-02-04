<!DOCTYPE html>
<html>

    <head>

        <link rel="stylesheet" href="<?php echo $theme_dir."/style.css"; ?>">

        <title> <?php echo $content["title"]; ?> </title>

    </head>

    <body>
    
        <h1 id="page_title"> <?php echo $content["title"]; ?> </h1>

        <div id="links"> <?php
            foreach( $content["links"] as $link ) {

                $label = $link["label"];
                $url   = $link["url"];

                echo "<a href='$url'>$label</a>";

            }
        ?> </div>

        <p id="page_desc"> <?php echo $content["description"]; ?> </p>
    
        <table id="posts">
            <tr>
                <th>Post Title</th>
                <th>Post Date</th>
            </tr>
        </table>

    </body>

</html>