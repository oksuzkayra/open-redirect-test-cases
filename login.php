<html>

    <body>


        <?php
            $usernames= array('admin',"test");
            $passwords= array("pwd", "test");


            if ($_POST['username'] == $usernames[0] && $_POST['password'] == $passwords[0]) {
                
                echo "<h1>Logged in as admin user! Redirection...</h1>";
                header("Location: ".$_GET['redirecturl']);
                

                
            }
            else if ($_POST['username'] == $usernames[1] && $_POST['password'] == $passwords[1]) {
                echo "<h1>Logged in as test user! Redirection...</h1>";
                header("Location: ".$_GET['redirecturl']);
            }
            else {
                echo "<h1>Invalid error!</h1>";
            }

        ?>


    </body>

</html>
