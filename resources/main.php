<?php
$request = $_SERVER['REQUEST_URI'];
$number = @end(explode("/",$_SERVER['REQUEST_URI']));

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.php';
        break;

    case '/contact' :
        require __DIR__ . '/views/contact.php';
        break;

    case '/admin' :
        require __DIR__. '/admin/index.php';
        break;

    case '/admin/login' :
        require __DIR__. '/admin/admin_login.php';
        break;

    case '/admin/logout' :
        require __DIR__. '/admin/admin_logout.php';
        break;

    case '/post/new' :
        require __DIR__. '/admin/new_post.php';
        break;

    case '/post/delete' :
        require __DIR__. '/admin/delete_post.php';
        break;    

    case '/' AND $number :
        require __DIR__ . '/views/post.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}

?>
