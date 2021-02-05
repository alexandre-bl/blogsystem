<?php

require_once "users.php";

$content = file_get_contents( "../content.json" );
$content = json_decode( $content, true );
$returning = false;

if( !isset( $_POST["user"] ) ) {

    $returning = true;

} else {

    if( !isset( $users[$_POST["user"]] ) ) {

        $returning = true;

    } else {

        if( $users[$_POST["user"]] == $_POST["password"] ) {

            setcookie( "user", "alex" );
            header('Location: /admin');
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
                    <p id="mssg">Wrong username or password</p>
                <?php } ?>
                
                <input type="text" id="user" name="user" placeholder="User">
                <input type="password" id="password" name="password" placeholder="Password">
                <input type="submit" id="submit" value="Login">

        </form>

    </body>

</html>