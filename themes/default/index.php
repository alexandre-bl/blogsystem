<!DOCTYPE html>
<html>

    <head>

        <link rel="stylesheet" href="<?php echo $theme_dir."/universal.css"; ?>">
        <link rel="stylesheet" href="<?php echo $theme_dir."/style.css"; ?>">

        <title> <?php
            echo $content["title"];
            if( isset( $_GET["p"] ) ) {
                echo " - ".$content["posts"][$_GET["p"]]["title"];
            }
        ?> </title>

    </head>

    <body>
    
        <?php if( !isset( $_GET["p"] ) ) { ?>

            <h1 id="page_title"> <?php echo $content["title"]; ?> </h1>

            <div id="links"> <?php

                echo "<a href='/'>Home</a>";

                foreach( $content["links"] as $link ) {

                    $label = $link["label"];
                    $url   = $link["url"];

                    echo "<a href='$url'>$label</a>";

                }
            ?> </div>

            <div id="page_desc"> <?php echo Markdown( $content["description"] ); ?> </div>
        
            <table id="posts">
                <tr>
                    <th>Post Title</th>
                    <th>Post Date</th>
                </tr>
                <?php

                    foreach( $content["posts"] as $post ) {
                        echo "<tr>";

                        $title = $post["title"];
                        $date = $post["date"];
                        $url = "/?p=".$post["file"];

                        echo "<td><a href='$url'>$title</a></td>";
                        echo "<td>$date</td>";

                        echo "</tr>";
                    }

                ?>
            </table>

        <?php } else {

            $post = $content["posts"][$_GET["p"]];

            ?>

            <h1 id="page_title"> <?php echo $post["title"]; ?> </h1>

            <div id="links"> <?php

                echo "<a href='/'>Home</a>";

                foreach( $content["links"] as $link ) {

                    $label = $link["label"];
                    $url   = $link["url"];

                    echo "<a href='$url'>$label</a>";

                }
            ?> </div>

            <div id="page_desc"> <?php
                echo Markdown( file_get_contents( "$root_dir/uploads/posts/".$_GET["p"].".md" ) );
            ?> </div>

        <?php } ?> 

    </body>

</html>