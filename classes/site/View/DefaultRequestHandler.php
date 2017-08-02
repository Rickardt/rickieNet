<?php

namespace site\View;

use Id1354fw\View\AbstractRequestHandler;


class DefaultRequestHandler extends AbstractRequestHandler{
    protected function doExecute(){
        \header('Location: /rickieNet/site/View/FirstPage');
        
    }

}