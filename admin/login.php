<!DOCTYPE html>
<html>

    <head>

        <?php

            error_reporting( 8 );

            require_once "users.php";

            $content = file_get_contents( "../content.json" );
            $content = json_decode( $content, true );
            $returning = false;

            if( isset( $_POST["user"] ) ) {

                if( array_key_exists( $_POST["user"], $users ) ) {

                    $user = strval( $_POST["user"] );

                    if( $users[$user] == $_POST["password"] ) {

                        setcookie( "user", $_POST["user"] );
                        echo "<script>location.href='/admin/';</script>";

                    } else {

                        $returning = true;

                    }

                } else {

                    $returning = true;

                }

            }

        ?>

        <link rel="stylesheet" href="<?php echo "../themes/".$content["theme"]."/universal.css" ; ?>">
        <link rel="stylesheet" href="style.css">

    </head>

    <body>

        <form id="login-box" action="/admin/login.php" method="post">

                <?php if( $returning ) { ?>
                    <div id="mssg">Wrong username or password</div>
                <?php } ?>
                
                <input type="text" id="user" name="user" placeholder="User">
                <input type="password" id="password" name="password" placeholder="Password">
                <input type="submit" id="submit" value="Login">

        </form>

    </body>

</html>