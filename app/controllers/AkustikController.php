<?php

use Phalcon\Mvc\Controller;

class AkustikController extends Controller
{
    public function akustikAction($kunci="standard"){
        $this->view->title="Acoustic Guitar Tuner";
        // return "pantek kau faris";
        $this->view->tanda=$kunci;

    }
}
