<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Remove File Extension From URL.</title>
</head>
<body>
<div align="center">
    <h1 align="center">Remove File Extension From URL using .htaccess</h1>
    <h3 align="center">
        <a href="index">Home</a>
    </h3>
    <br>
    <?php
    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    echo $url;
    echo '<br>';
    $url_array = explode("/", $url);
    $language = end($url_array);
    echo $language;

    if ($language == 'php'){
        echo '<h2 align="center">Welcome to PHP Tutorial.</h2>';
    }else if ($language == 'jquery'){
        echo '<h2 align="center">Welcome to Jquery Tutorial.</h2>';
    }else if ($language == 'ajax'){
        echo '<h2 align="center">Welcome to Ajax Tutorial.</h2>';
    }else if ($language == 'javascript'){
        echo '<h2 align="center">Welcome to Javascript Tutorial.</h2>';
    }else if ($language == 'python'){
        echo '<h2 align="center">Welcome to Python Tutorial.</h2>';
    }else{
        echo '<h2 align="center">Not Found Tutorial.</h2>';
    }

    ?>
</div>
</body>
</html>
