<?php

require_once "users.php";

$content = file_get_contents( "../content.json" );
$content = json_decode( $content, true );

?>

<!DOCTYPE html>
<html>

    <head>

        <link rel="stylesheet" href="<?php echo "../themes/".$content["theme"]."/universal.css" ; ?>">
        <link rel="stylesheet" href="style.css">

    </head>

    <body>

        <form id="login-box">
            <label for="user">User:</label><br>
            <input type="text" id="user" name="user"><br>
            <label for="password">Password:</label><br>
            <input type="text" id="password" name="password">
        </form>

    </body>

</html>