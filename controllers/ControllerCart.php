<?php
    include "models/ModelCart.php";
    class ControllerCart extends Controller{
        use ModelCart;
        public function __construct()
        {
            if(isset($_SESSION["cart"]) == false)
                $_SESSION["cart"] = array();
        }
        //hien thi danh sach cac sp trong gio hang
        public function index(){
            $this->loadView("ViewCart.php");
        }
        //them san pham vao gio
        public function create(){
            $id = isset($_GET["id"]) ? $_GET["id"] : 0;
            // goi ham model
            $this->cartAdd($id);
            header("location:index.php?controller=cart");
        }
        //xoa sp khoi gio hang
        public function delete(){
            $id = isset($_GET["id"]) ? $_GET["id"] : 0;
            // goi ham model
            $this->cartDelete($id);
            header("location:index.php?controller=cart");
        }
        //xoa toan bo
        public function destroy(){
            //goi ha =m model
            $this->cartDestroy();
            header("location:index.php?controller=cart");
        }
        //cxap nnat so luong sp
        public function update(){
            foreach($_SESSION["cart"] as $product){
                $name = "product_".$product["id"];
                $number = $_POST["$name"];
                $this->cartUpdate($product["id"],$number);
            }
            header("location:index.php?controller=cart");
        }
        // thanh toan
        public function checkOut(){
            //ktra neu user chua dang nhap thii yc dang nhap
            if(isset($_SESSION["customer_email"]) == false){
                header("location:index.php?controller=account&action=login");
            }
            else{
                $this->cartCheckOut();
                header("location:index.php?controller=cart");
            }
        }
    }
?>