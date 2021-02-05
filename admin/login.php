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
            <input type="text" id="user" name="user" value="User"><br>
            <input type="password" id="password" name="password" value="Password"><br>
            <input type="submit" id="submit" value="Login">
        </form>

    </body>

</html>