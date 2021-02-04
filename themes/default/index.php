<!DOCTYPE html>
<html>

    <head>

        <link rel="stylesheet" href="<?php echo $theme_dir."/style.css"; ?>">

        <title> <?php echo $content["title"]; ?> </title>

    </head>

    <body>
    
        <?php if( empty( $_GET["p"] ) ) { ?>

            <h1 id="page_title"> <?php echo $content["title"]; ?> </h1>

            <div id="links"> <?php

                echo "<a href='/'>Home</a>";

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
                <?php

                    foreach( $content["posts"] as $post ) {
                        echo "<tr>";

                        $title = $post["title"];
                        $date = $post["date"];
                        $url = "/?p=".$post["file"];

                        echo "<td>$title</td>";
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

            <p id="page_desc"> <?php echo file_get_contents( "uploads/posts/".$_GET["p"].".md" ); ?> </p>

        <?php } ?> 

    </body>

</html>