<!-- header-bot -->
<div class="header-bot" style="display: flex;">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index.php"><img src="assets/frontend/images/logo3.jpg"></a></h1>
		</div>
   
    <div class="container">
      <div class="row">
        <div class="col-md-6 header-middle">
          <!--<form method="post" id="frm" action="">-->
          <div style=" position: relative;" class="search search-1">
          
            <input type="search" value="" placeholder="Search" id="key" class="input-control" >
            
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
              width: 600px !important;
              background-color: #fff;
              z-index: 1;
              display: none;
              overflow: hidden;
              height: 350px;
              z-index: 100;
            }
            .smart-search ul {
              padding: 0;
              margin: 0;
              list-style: none;
            }
            .smart-search ul li {
              border-bottom: 1px solid #dddddd;
              width: 585px;
            }
            .smart-search ul li img {
              width: 70px;
              margin-right: 5px;
            }
            .input-control{
              width: 585px !important;
              /* border-right: none; */
              height: 50px;
            }
            .search-1{
              height: 50px !important;
              line-height: 50px;
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
      </div>
    </div>
		<div class="col-md-3 header-right footer-bottom axa">
			<ul>
				<li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a>
				</li>
				<li><a class="fb" href="#"></a></li>
				<li><a class="twi" href="#"></a></li>
				<li><a class="insta" href="#"></a></li>
				<li><a class="you" href="#"></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
    <style>
      .axa{
        margin-left: 900px;
        margin-top: -70px;
      }

    </style>
	</div>
</div>
</div>
<!-- //header-bot -->