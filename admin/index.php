<?php

$content = file_get_contents( "content.json" );
$content = json_decode( $content, true );

?>

<!DOCTYPE html>
<html>

    <head>

        <title> <?php echo $content["title"]." - Control Panel"; ?> </title>
        <link rel="stylesheet" href="/style.css">

    </head>

    <body></body>

</html>