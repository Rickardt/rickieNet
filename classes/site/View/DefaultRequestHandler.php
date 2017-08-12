<?php

namespace site\View;

use Id1354fw\View\AbstractRequestHandler;
use site\controller\Controller;


class DefaultRequestHandler extends AbstractRequestHandler{
    
    public function setUsername(){
        
    }
    public function setPassword(){
        
    }
    public function setSubmit(){
        
    }

        protected function doExecute(){
        $this->session->restart();
        $this->session->set('controller', new Controller());
        $_SESSION['userOnline'] = FALSE;
        \header('Location: /rickieNet/site/View/FirstPage');
        
    }

}