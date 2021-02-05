<?php

require_once "users.php";

$content = file_get_contents( "../content.json" );
$content = json_decode( $content, true );
$returning = false;

if( isset( $_POST["user"] ) ) {

    print_r( $_POST );
    print_r( $users );

    print_r( $users[$_POST["user"]] );

    if( !isset( $users[$_POST["user"]] ) ) {

        $returning = true;

        echo "test2";

    } else {

        echo "test3";

        if( $users[$_POST["user"]] == $_POST["password"] ) {

            setcookie( "user", "alex" );
            header('Location: /admin/', true, 303);
            die();

        } else {

            $returning = true;

        }

    }

}

?>

<!DOCTYPE html>
<html>

    <head>

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