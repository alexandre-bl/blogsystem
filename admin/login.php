<?php

require_once "users.php";

$content = file_get_contents( "content.json" );
$content = json_decode( $content, true );

?>

<!DOCTYPE html>
<html>

    <head>

        <link rel="stylesheet" href="<?php echo "../themes/".$content["theme"]."/universal.css" ; ?>">
        <link rel="stylesheet" href="style.css">

    </head>

    <body>
    </body>

</html>