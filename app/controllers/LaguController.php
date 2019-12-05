<?php
use Phalcon\Mvc\Controller;

class LaguController extends Controller
{
    public function listlaguAction(){
        $this->view->title="List Contoh Lagu";
    }
    public function Marion_Jola_RayuAction(){
        $this->view->title="Marion Jola - Rayu";
    }
    public function Peterpan_Ada_Apa_DenganmuAction(){
        $this->view->title="Peterpan - Ada Apa Denganmu";
    }

}

