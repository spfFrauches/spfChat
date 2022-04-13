<?php

namespace app\Modulos\Cover;

class ControllerCover
{
    
    public function index()
    {
        
        $_SESSION['linkpage'] = 'coverindex';
        $linkpage = $_SESSION['linkpage'];
        
        require_once './app/Html/header-cover.php';        
        require_once './app/Modulos/Cover/ViewIndex.php';
        require_once './app/Html/footer-cover.php';
        
    }
    
}



