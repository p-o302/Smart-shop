<?php
//load file LayoutTrangChu.php
$this->fileLayout = "LayoutTrangChu.php";
?>
<div class="product-easy">
	<div class="container">

		<script src="assets/frontend/js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true // 100% fit in a container
				});
			});
		</script>
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Latest Designs</span></li>
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Special Offers</span></li>
					<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li>
				</ul>
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<?php $categories = $this->modelCategories(); ?>
						<?php foreach ($categories as $rowsCategory) : ?>
							<?php $products = $this->modelProducts($rowsCategory->id); ?>

							<?php foreach ($products as $rows) :  ?>

								<div class="col-md-3 product-men">
									<style>
										.product-men {
											height: 334px !important;
											margin-bottom: 80px;
										}

										.product-men img {
											width: 100%;
											height: 250px !important;
										}
									</style>
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item">
											<img src="assets/upload/products/<?php echo $rows->photo; ?>" alt="" class="pro-image-front">
											<img src="assets/upload/products/<?php echo $rows->photo; ?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

										</div>
										<div class="item-info-product ">
											<h4><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h4>
											<div class="info-product-price">
												<span class="item_price">$<?php echo number_format($rows->price - ($rows->price * $rows->discount / 100)); ?></span>
												<del>$ <?php echo number_format($rows->price); ?></del>
											</div>
											<a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="item_add single-item hvr-outline-out button2">Add to cart</a>
										</div>
									</div>
								</div>

							<?php endforeach; ?>
						<?php endforeach; ?>
						<div class="clearfix"></div>
					</div>
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
						<?php $categories = $this->modelCategories(); ?>
						<?php foreach ($categories as $rowsCategory) : ?>
							<?php $products = $this->modelProducts2($rowsCategory->id); ?>
							<?php foreach ($products as $rows) :  ?>
								<div class="col-md-3 product-men">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item">
											<img src="assets/upload/products/<?php echo $rows->photo; ?>" alt="" class="pro-image-front">
											<img src="assets/upload/products/<?php echo $rows->photo; ?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

										</div>
										<div class="item-info-product ">
											<h4><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h4>
											<div class="info-product-price">
												<span class="item_price">$<?php echo number_format($rows->price - ($rows->price * $rows->discount / 100)); ?></span>
												<del>$ <?php echo number_format($rows->price); ?></del>
											</div>
											<a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="item_add single-item hvr-outline-out button2">Add to cart</a>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						<?php endforeach; ?>

						<div class="clearfix"></div>
					</div>
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
						<?php $categories = $this->modelCategories(); ?>
						<?php foreach ($categories as $rowsCategory) : ?>
							<?php $products = $this->modelProducts1($rowsCategory->id); ?>
							<?php foreach ($products as $rows) :  ?>

								<div class="col-md-3 product-men">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item">
											<img src="assets/upload/products/<?php echo $rows->photo; ?>" alt="" class="pro-image-front">
											<img src="assets/upload/products/<?php echo $rows->photo; ?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

										</div>
										<div class="item-info-product ">
											<h4><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h4>
											<div class="info-product-price">
												<span class="item_price">$<?php echo number_format($rows->price - ($rows->price * $rows->discount / 100)); ?></span>
												<del>$ <?php echo number_format($rows->price); ?></del>
											</div>
											<a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="item_add single-item hvr-outline-out button2">Add to cart</a>
										</div>
									</div>
								</div>

							<?php endforeach; ?>
						<?php endforeach; ?>

						<div class="clearfix"></div>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>