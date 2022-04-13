<?php

namespace app\Modulos\GeralChat;

class ControllerGeralChat
{
    
    public function index()
    {
                
        require_once './app/Html/header-geralChat.php';

        require_once './app/Modulos/GeralChat/ViewGeralChat.php';
        
        require_once './app/Html/footer-geralChat.php';
        
    }
    
}



