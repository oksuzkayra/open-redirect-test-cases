<html>
<body>

    <?php
            $url = "http://127.0.0.1:9090";
            $trueurl = $url."?login=true";
            $fullpathurl = $url.$_SERVER['REQUEST_URI'];

    ?>
    <img src="laptop.jpg" alt="laptop"><br>
    <a href="login.php?returnURL=<?php echo $url;?>">
        <button>Satın Al</button>
    </a>

    <?php
        $login= $_GET['login'];

        if ($login== "true") {
            echo "<h1>Purchased!</h1>";
        }
    ?>
</script>
</body>
</html>