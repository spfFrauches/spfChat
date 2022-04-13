<?php 

    session_start();

    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);
           
    require_once './app/Modulos/Cover/ControllerCover.php';
    require_once './app/Modulos/GeralChat/ControllerGeralChat.php';

    require_once './vendor/autoload.php';
     
    use Illuminate\Http\Request;
    use Illuminate\Routing\Controller;

    $dispatcher = new \Illuminate\Events\Dispatcher;
    $router = new \Illuminate\Routing\Router($dispatcher);
    
    
    /* --------------------------------------------------- */
    /* Rotas  */
    /* --------------------------------------------------- */
        
    $router->get('/', [ \app\Modulos\Cover\ControllerCover::class, 'index' ] );
    $router->get('/cover', [ \app\Modulos\Cover\ControllerCover::class, 'index' ] );
    $router->get('/cadastro', [ \app\Modulos\Cadastro\ControllerCadastro::class, 'usuario' ] );   
    $router->get('/chat', [ \app\Modulos\GeralChat\ControllerGeralChat::class, 'index' ] );

    /* --------------------------------------------------- */
    
    $request = \Illuminate\Http\Request::createFromGlobals();
    $response = $router->dispatch($request);
    $response->send();
