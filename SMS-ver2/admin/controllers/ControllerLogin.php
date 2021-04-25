<?php 
	class ControllerLogin extends Controller{
		public function index(){
			$this->loadView("ViewLogin.php");
		}
		//khi an nut submit
		public function login(){
			$email = $_POST["email"];
			$password = $_POST["password"];
			
			//ma hoa password
			$password = md5($password);
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi truy van
			$query = $conn->prepare("select email,name from users where email=:var_email and password = :var_password");
			
			$query->execute(array("var_email"=>$email,"var_password"=>$password));
			
			if($query->rowCount() > 0){
				//dang nhap thanh cong
				
				$user = $query->fetch(PDO::FETCH_ASSOC);

				$_SESSION["email"] = $user['email'];
				$_SESSION["name"] = $user['name'];

				//exit($query->name);
				
				header("location:index.php");
			}
			else
				header("location:index.php?controller=login");
		}
		//dang xuat
		public function logout(){
			unset($_SESSION["email"]);
			header("location:index.php");
		}
	}
 ?>