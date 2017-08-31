<?php

namespace site\View;

use Id1354fw\View\AbstractRequestHandler;
use site\controller\Controller;


class StatusPage extends AbstractRequestHandler{
    private $contr;
    private $loggedIn;

    
    
    protected function doExecute(){
        
        $this->contr = $this->session->get("controller");
        return 'status';
    }

}