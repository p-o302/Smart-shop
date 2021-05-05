<?php 
	include "models/ModelWomen.php";
	class ControllerWomen extends Controller{
		//ke thua
		use ModelCategories;
		public function index(){
			$this->loadView("LayoutWomen.php");
			// header("location:index.php?controller=women");
		}
	}
 ?>