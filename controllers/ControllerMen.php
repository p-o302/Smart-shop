<?php 
	include "models/ModelMen.php";
	class ControllerMen extends Controller{
		//ke thua
		use ModelCategories;
		public function index(){
			$this->loadView("LayoutMen.php");
		}
	}
 ?>