<?php
    $starter_index = 'wp-starter/index.php';
    $starter_ready = file_exists($starter_index)&is_file($starter_index);
    if ($starter_ready) {
        header('HTTP/1.1 200 OK');
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/' . $starter_index);
    } else {
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

        </head>
        <body>
            <div class="container">
                <h1>WP Starter not installed</h1>
            </div>
        </body>
        </html>
<?php
    }
