<?php 
	include "models/ModelAccount.php";
	class ControllerAccount extends Controller{
		use ModelAccount;
		public function register(){
			$this->loadView("ViewRegister.php");
		}
		public function registerPost(){
			$this->modelRegister();			
		}
		public function login(){
			$this->loadView("ViewLogin.php");
		}
		public function loginPost(){
			$this->modelLogin();
		}
		public function logout(){
			$this->modelLogout();
		}
		// xem danh sach cac don hang da mua
		public function orders(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 10;
			//tinh so trang
			$numPage = ceil($this->modelTotal()/$recordPerPage);
			//goi ham de lay du lieu
			$listRecord = $this->modelRead($recordPerPage);
			//load view
			$this->loadView("ViewOrders.php",["listRecord"=>$listRecord,"numPage"=>$numPage]);
		}	
				//lay mot ban ghi trong table customers		
				public function modelGetCustomers($id){
					//---
					$conn = Connection::getInstance();
					$query = $conn->query("select * from customers where id = $id");
					//tra ve mot ban ghi
					return $query->fetch();
					//---
				}
				//lay mot ban ghi trong table products		
				public function modelGetProducts($id){
					//---
					$conn = Connection::getInstance();
					$query = $conn->query("select * from products where id = $id");
					//tra ve mot ban ghi
					return $query->fetch();
					
					//---
				}
				//huy don hnag
				public function removeOrders(){
					$id = isset($_SESSION["id"]) ? $_GET["id"] : 0;
					$this->modelRemoveOrders();
					header("location:index.php?controller=account&action=orders");
				}
	}
