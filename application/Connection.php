 <?php 
 	//class ket noi csdl
 	class Connection{
 		//ket noi csdl, tra ket qua ve bien ket noi
 		public static function getInstance(){
 			//ket noi csdl, tra ket qua ve bien ket noi
		//	$conn = new PDO("mysql:host=sql205.byethost7.com; dbname=b7_28252374_php54_project;","b7_28252374","phuongthao030200");
			$conn = new PDO("mysql:host=localhost; dbname=php54_project;","root","");
			//mac dinh kieu duyet cac ban ghi
			$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
			//lay du lieu theo kieu unicode
			$conn->exec("set names utf8");
			return $conn;
 		}
 	}
  ?>