<html>

    <body>


        <?php

            $trueurl = "?login=true";
            $fullpathurl = $url.$_SERVER['REQUEST_URI'];
            $usernames= array('admin',"test");
            $passwords= array("pwd", "test");


            
            if ($_REQUEST['username'] == $usernames[0] && $_REQUEST['password'] == $passwords[0]) {
                
                echo "<h1>Logged in as admin user! Redirection...</h1>";
                sleep(2);
                header("Location: ".$_REQUEST['returnURL'].$trueurl);
                

                
            }
            else if ($_REQUEST['username'] == $usernames[1] && $_REQUEST['password'] == $passwords[1]) {
                echo "<h1>Logged in as test user! Redirection...</h1>";
                sleep(2);
                header("Location: ".$_REQUEST['returnURL'].$trueurl);
            }


        ?>

        <h1>You must be logged in to purchase.</h1>
        <form action="login.php?returnURL=<?php echo $_GET['returnURL']?>" method="post">

            Username: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" value="Sign in">

        </form>


    </body>

</html>
