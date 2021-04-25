<?php
    include "models/ModelHome.php";
    class ControllerHome extends Controller{
        use ModelHome;
        public function index(){
            $this->loadView("ViewHome.php");
        }
    }