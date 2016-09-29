<?php
    session_start();
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <title>WP Starter</title>
    <!-- Roboto Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i&subset=cyrillic">
    <!-- Normalize CSS minified -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
    <!-- Milligram CSS minified -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.1.0/milligram.min.css">
    <!-- WP Starter CSS -->
    <link rel="stylesheet" href="styles/main.css">
</head>
<body class="body">
    <div class="site bcolor-hippieblue">
        <div class="header">
            <h1 class="text-center color-white">WP Starter</h1>
        </div>
        <div class="container content">
            <?php
                if (isset($_POST['language'])) {
                    require_once 'step-01.php';
                } else {
                    require_once 'step-00.php';
                }
            ?>
        </div>
        <div class="footer">

        </div>
    </div>
</body>
</html>