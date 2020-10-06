<?php
$request = $_SERVER['REQUEST_URI'];
$number = @end(explode("/",$_SERVER['REQUEST_URI']));

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    case '/about' :
        require __DIR__ . '/views/about.php';
        break;
    case '/portfolio' :
        require __DIR__ . '/views/portfolio.php';
        break;
    case '/contact' :
        require __DIR__ . '/views/contact.php';
        break;
    case '/admin' :
        require __DIR__. '/admin/index.php';
        break;
    case '/logout' :
        setcookie("user","",time()-3600);
        header('Location: http://www.pavlovs.lv');
        break;

    case '/' AND $number :
        echo $number;
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}

?>
