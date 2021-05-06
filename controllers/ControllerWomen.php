<?php 
	include "models/ModelWomen.php";
	class ControllerWomen extends Controller{
		//ke thua
		use ModelCategories;
		public function index(){
			$this->loadView("LayoutWomen.php");
		}
		public function allCategories(){
			$category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 10;
			//tinh so trang
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelGetAllCategoriesWomen();
			$this->loadView("LayoutWomen.php",array("data"=>$data,"numPage"=>$numPage));
		}
	}
 ?>