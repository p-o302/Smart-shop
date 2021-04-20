<!-- header -->
<header id="header">
  <!-- top header -->
  <div class="top-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6"> <span><i class="fa fa-phone"></i> (04) 6674 2332</span> <span><i class="fa fa-envelope-o"></i> <a href="mailto:support@mail.com">support@mail.com</a></span> </div>
        <div class="col-xs-12 col-sm-6 col-md-6 customer">
          <?php if (isset($_SESSION["customer_email"])) : ?>
            <a href="index.php?controller=account&action=orders">Xin chào <?php echo $_SESSION["customer_email"]; ?></a>&nbsp; &nbsp;<a href="index.php?controller=account&action=logout">Đăng xuất</a>
          <?php else : ?>
            <a href="index.php?controller=account&action=login">Đăng nhập</a>&nbsp; &nbsp;<a href="index.php?controller=account&action=register">Đăng ký</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <!-- end top header -->
  <!-- middle header -->
  <div class="mid-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo "> <a href="index.html"> <img src="assets/frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361" alt="DKT Store" title="DKT Store" class="img-responsive"> </a> </div>
        <div class="col-xs-12 col-sm-12 col-md-6 header-search">
          <!--<form method="post" id="frm" action="">-->
          <div style="margin-top:25px; position: relative;" class="search">
            <input type="text" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" class="input-control">
            <button style="margin-top:5px;" type="submit"> <i class="fa fa-search" onclick="return search();"></i> </button>
            <div class="smart-search">
              <ul>
                <li><img src="http://localhost/php54/php54_project/assets/upload/products/1616758979_132218023958008825_1.jpg" alt=""> <a href="#">9 - MacBook Pro 16 Touch Bar 2.6GHz Core i7/16GB/</a></li>
                <li><img src="http://localhost/php54/php54_project/assets/upload/products/1616758979_132218023958008825_1.jpg" alt=""> <a href="#">9 - MacBook Pro 16 Touch Bar 2.6GHz Core i7/16GB/</a></li>
                <li><img src="http://localhost/php54/php54_project/assets/upload/products/1616758979_132218023958008825_1.jpg" alt=""> <a href="#">9 - MacBook Pro 16 Touch Bar 2.6GHz Core i7/16GB/</a></li>
              </ul>
            </div>
          </div>
          <style>
            .smart-search {
              position: absolute;
              width: 100%;
              background-color: #fff;
              z-index: 1;
              display: none;
              overflow: scroll;
              height: 350px;
            }

            .smart-search ul {
              padding: 0;
              margin: 0;
              list-style: none;
            }

            .smart-search ul li {
              border-bottom: 1px solid #dddddd;

            }

            .smart-search ul li img {
              width: 70px;
              margin-right: 5px;
            }
          </style>
          <script>
            $(document).ready(function() {
              $(".search").keyup(function() {
                var strKey = $("#key").val();
                //ham trim cat khoang trang trai phai cua chuoi
                if (strKey.trim() == "")
                  $(".smart-search").attr("style", "display:none");
                else
                  $(".smart-search").attr("style", "display:block");
                //=========
                //su dung ajax de lay du lieu
                $.get("index.php?controller=search&action=ajaxSearch&key="+strKey, function(data) {
                 // $(".result").html(data);
                //  alert(data);
                  //clear data cua the ul
                  $(".smart-search ul").empty();
                  //them dl vua lay ddc vao ajax
                  $(".smart-search ul").append(data);
                });

                //===========
              });
            });
          </script>
          <!--</form>-->
        </div>
        <?php
        $numberProduct = 0;
        if (isset($_SESSION["cart"])) {
          foreach ($_SESSION["cart"] as $value) {
            $numberProduct++;
          }
        }
        ?>
        <div class="col-xs-12 col-sm-12 col-md-3 mini-cart">
          <div class="wrapper-mini-cart"> <span class="icon"><i class="fa fa-shopping-cart"></i></span> <a href="cart"> <span class="mini-cart-count"> 2 </span> sản phẩm <i class="fa fa-caret-down"></i></a>
            <div class="content-mini-cart">
              <div class="has-items">
                <ul class="list-unstyled">
                  <?php if (isset($_SESSION["cart"])) :  ?>
                    <?php foreach ($_SESSION["cart"] as $product) : ?>
                      <li class="clearfix" id="item-1853038">
                        <div class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>">
                            <img alt="<?php echo $product["name"]; ?>" src="assets/upload/products/<?php echo $product["photo"];  ?>" title="<?php echo $product["name"]; ?>" class="img-responsive"> </a> </div>
                        <div class="info">
                          <h3><a href="/Product/Detail/11"><?php echo $product["name"]; ?></a></h3>
                          <p><?php echo $product["name"]; ?> x <?php echo number_format($product["price"]);  ?> đ</p>
                        </div>
                        <div> <a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"> <i class="fa fa-times"></i></a> </div>
                      </li>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </ul>
                <a href="/Cart/Checkout" class="button">Thanh toán</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end middle header -->
    <!-- bottom header -->
    <div class="bottom-header">
      <div class="container">
        <div class="clearfix">
          <?php
          //load MVC bang tay
          include "controllers/ControllerCategories.php";
          $obj = new ControllerCategories();
          $obj->index();
          ?>
          <a href="javascript:void(0);" class="toggle-main-menu hidden-md hidden-lg"> <i class="fa fa-bars"></i> </a>
          <ul class="list-unstyled mobile-main-menu hidden-md hidden-lg" style="display:none">
            <li class="active"><a href="index.php">Trang chủ</a></li>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="index.php?controller=tintuc">Tin tức</a></li>
            <li><a href="index.php?controller=lienhe">Liên hệ</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- end bottom header -->
</header>
<!-- end header -->