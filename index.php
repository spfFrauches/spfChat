<?php 

    require_once './vendor/autoload.php';
    
    use Illuminate\Http\Request;
    use Illuminate\Routing\Controller;

    $dispatcher = new \Illuminate\Events\Dispatcher;
    $router = new \Illuminate\Routing\Router($dispatcher);
             
    include_once './router.php';

    $request = \Illuminate\Http\Request::createFromGlobals();
    $response = $router->dispatch($request);
    $response->send();








