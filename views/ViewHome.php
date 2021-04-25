<?php
//load file LayoutTrangChu.php
$this->fileLayout = "LayoutTrangChu.php";
?>
<div class="special-collection">
  <div class="tabs-container">
    <div class="row" style="margin-top:10px;">
      <div class="col-lg-10">
        <!-- <h2>HOT PRODUCT</h2> -->
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="tabs-content row">
    <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
      <div class="clearfix">
        <?php
        $hotProduct = $this->modelHotProduct();
        ?>
        <!-- <style type="text/css">
          .discount {
            position: absolute;
            width: 50px;
            line-height: 50px;
            text-align: center;
            border-radius: 50px;
            background: black;
            color: white;
            font-weight: bold;
            top: 0px;
            left: 25px;
          }
        </style> -->
        <?php foreach ($hotProduct as $rows) : ?>
          <!-- box product -->
         

          <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="pro-image-front">
									<img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h4>
									<div class="info-product-price">
										<span class="item_price">$<?php echo number_format($rows->price); ?></span>
										<del>$<?php echo number_format($rows->price - ($rows->price*$rows->discount/100)); ?></del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/a5.png" alt="" class="pro-image-front">
									<img src="images/a5.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">Combo Pack</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Multicoloured TShirts</a></h4>
									<div class="info-product-price">
										<span class="item_price">$129.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
          <!-- end box product -->
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<!-- <div class="row">
  <div class="col-xs-12 col-md-12"> <img src="assets/frontend/images/adv1.jpg" class="img-thumbnail"> </div>
</div> -->
<?php
$categories = $this->modelCategories();
?>
<?php foreach ($categories as $rowsCategory) : ?>
  <!-- category product -->
  <div class="special-collection">
    <div class="tabs-container">
      <div class="row" style="margin-top:10px;">
        <div class="head-tabs head-tab1 col-lg-11">
          <h2><?php echo $rowsCategory->name; ?></h2>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="tabs-content row">
      <div id="content-taba4" class="content-tab content-tab-proindex">

        <?php
        $products = $this->modelProducts($rowsCategory->id);
        ?>
        <?php foreach ($products as $rows) : ?>
          <!-- box product -->
          <!-- <div class="col-md-5 content-rgrid text-center">
		<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="assets/frontend/images/p4.jpg" alt="image" class="img-responsive zoom-img"></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
									<h4>Shoes</h4>
									<span class="separator"></span>
									<p><span class="item_price">$150</span></p>
									<span class="separator"></span>
									<a class="item_add hvr-outline-out button2" href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>">add to cart </a>
						</div>
					</div>
			</div>
	</div> -->
          <!-- <div class="col-xs-6 col-md-2 col-sm-6 ">
            <div class="product-grid" id="product-1168979" style="height: 350px; overflow: hidden;">
              <div class="image"> <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a> </div>
              <div class="info">
                <h3 class="name"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
                <p class="price-box"> <span class="special-price"> <span class="price product-price" style="text-decoration:line-through;"> <?php echo number_format($rows->price); ?></span> ₫ </span> </p>
                <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price - ($rows->price * $rows->discount / 100)); ?> </span>₫ </span> </p>
                <p class="price-box"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/images/star.jpg"></a> </p>
                <div class="action-btn">
                  <form>
                    <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="button">Add to Cart</a>
                  </form>
                </div>
              </div>
            </div>
          </div> -->
          <!-- end box product -->
        <?php endforeach; ?>

      </div>
    </div>
  </div>
  <!-- /category product -->
<?php endforeach; ?>
<!-- adv -->
<div class="widebanner"> <a href="#"><img src="assets/frontend/100/047/633/themes/517833/assets/widebanner221b.jpg?1481775169361" alt="#" class="img-responsive"></a> </div>
<!-- end adv -->

<!-- hot news -->
<!-- <div class="home-blog">
  <h2 class="title"> <span>Tin tức</span></h2>
  <div class="row">
    <div class="owl-home-blog owl-home-blog-bottompage">
      <?php
      $news = $this->modelHotNews();
      ?>
      <?php foreach ($news as $rows) : ?>
        <!-- new item -->
        <div class="item">
          <div class="article"> <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="image"> <img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" class="img-responsive"> </a>
            <div class="info">
              <h3><a class="text3line" href="#" style="font-weight: bold;">Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?</a></h3>
              <p class="desc"> Không ai có thể phủ nhận sức hút từ vẻ đẹp của những chiếc điện thoại của hãng Apple. Đặc biệt hơn, khi mà ở thời điểm hiện tại, giá iPhone 6s và iPhone 6s Plus đang giảm và dần dần trở nên vừa vặn với túi tiền của...</p>
            </div>
          </div>
        </div>
        <!-- /news item -->
      <?php endforeach; ?>

    </div>
  </div>
</div> -->
<!-- /hotnews -->