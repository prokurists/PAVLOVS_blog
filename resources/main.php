<?php 
$request = ($_SERVER['REQUEST_URI']);
echo $request;
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
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}

?>