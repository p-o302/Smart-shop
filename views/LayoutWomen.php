<?php
//load file LayoutTrangChu.php
$this->fileLayout = "LayoutTrangTrong.php";
?>
<div class="page-head">
	<div class="container">
		<h3>Women's Wear</h3>
	</div>
</div>
<div class="container">
<div class="col-md-8 products-right">
			<h5>Product Compare(0)</h5>
			<div class="sort-grid">
				<div class="sorting">
					<h6>Sort By</h6>
					<select id="country1" onchange="location.href = 'index.php?controller=products&action=category&id=<?php echo $category_id; ?>&order='+this.value;" class="frm-field required sect">
						<option value="0">Default</option>
						<option value="nameAsc">Name(A - Z)</option> 
						<option value="nameDesc">Name(Z - A)</option>
						<option value="priceDesc">Price(High - Low)</option>
						<option value="priceAsc">Price(Low - High)</option>			
					</select>
					<div class="clearfix"></div>
				</div>
				
				<div class="clearfix"></div>
			</div>
			<div class="men-wear-top">
				<script src="assets/frontend/js/responsiveslides.min.js"></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<img class="img-responsive" src="assets/upload/products/1619172926_men1.jpg"><?php echo $rowsSub->name; ?>
						</li>
						<li>
							<img class="img-responsive" src="assets/upload/products/1619172926_g6.jpg"><?php echo $rowsSub->name; ?>/>
						</li>
						<li>
							<img class="img-responsive" src="assets/upload/products/1619172926_g2.jpg"/>
						</li>
						<li>
							<img class="img-responsive" src="assets/upload/products/1619172926_b18.jpg"/>
						</li>
						
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="men-wear-bottom">
				<div class="col-sm-4 men-wear-left">
					<img class="img-responsive" src="images/men31.jpg" alt=" " />
				</div>
				<div class="col-sm-8 men-wear-right">
					<h4>Exclusive Women's Collections</h4>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
					accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
					ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
					explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
					odit aut fugit. </p>
				</div>
				<div class="clearfix"></div>
			</div>
				<div class="col-md-4 product-men no-pad-men">
					<div class="men-pro-item simpleCart_shelfItem">
						<div class="men-thumb-item">
							<img src="images/a1.png" alt="" class="pro-image-front">
							<img src="images/a1.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
						</div>
						<div class="item-info-product ">
									<h4><a href="single.html">T shirt</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										<del>$69.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
						</div>
					</div>
				</div>
				<div class="col-md-4 product-men no-pad-men">
					<div class="men-pro-item simpleCart_shelfItem">
						<div class="men-thumb-item">
							<img src="images/w1.png" alt="" class="pro-image-front">
							<img src="images/w1.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
						</div>
						<div class="item-info-product ">
									<h4><a href="single.html">Wedges</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										<del>$69.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
						</div>
					</div>
				</div>
				<div class="col-md-4 product-men no-pad-men">
					<div class="men-pro-item simpleCart_shelfItem">
						<div class="men-thumb-item">
							<img src="images/w3.png" alt="" class="pro-image-front">
							<img src="images/w3.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
						</div>
						<div class="item-info-product ">
									<h4><a href="single.html">Hand Bag</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										<del>$69.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
						</div>
					</div>
				</div>
				
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		<div class="single-pro">
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="images/w4.png" alt="" class="pro-image-front">
						<img src="images/w4.png" alt="" class="pro-image-back">
							<div class="men-cart-pro">
								<div class="inner-men-cart-pro">
									<a href="single.html" class="link-product-add-cart">Quick View</a>
								</div>
							</div>
							<span class="product-new-top">New</span>				
					</div>
					<div class="item-info-product ">
						<h4><a href="single.html">Hand Bag</a></h4>
						<div class="info-product-price">
							<span class="item_price">$45.99</span>
							<del>$69.71</del>
						</div>
						<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
					</div>
				</div>
			</div>
			
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="images/w2.png" alt="" class="pro-image-front">
						<img src="images/w2.png" alt="" class="pro-image-back">
							<div class="men-cart-pro">
								<div class="inner-men-cart-pro">
									<a href="single.html" class="link-product-add-cart">Quick View</a>
								</div>
							</div>
							<span class="product-new-top">New</span>				
					</div>
					<div class="item-info-product ">
						<h4><a href="single.html">Sandals</a></h4>
						<div class="info-product-price">
							<span class="item_price">$45.99</span>
							<del>$69.71</del>
						</div>
						<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
					</div>
				</div>
			</div>
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="images/ep3.png" alt="" class="pro-image-front">
						<img src="images/ep3.png" alt="" class="pro-image-back">
							<div class="men-cart-pro">
								<div class="inner-men-cart-pro">
									<a href="single.html" class="link-product-add-cart">Quick View</a>
								</div>
							</div>
							<span class="product-new-top">New</span>				
					</div>
					<div class="item-info-product ">
						<h4><a href="single.html">Watches</a></h4>
						<div class="info-product-price">
							<span class="item_price">$45.99</span>
							<del>$69.71</del>
						</div>
						<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
					</div>
				</div>
			</div>
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="images/a5.png" alt="" class="pro-image-front">
						<img src="images/a5.png" alt="" class="pro-image-back">
							<div class="men-cart-pro">
								<div class="inner-men-cart-pro">
									<a href="single.html" class="link-product-add-cart">Quick View</a>
								</div>
							</div>
							<span class="product-new-top">New</span>				
					</div>
					<div class="item-info-product ">
						<h4><a href="single.html">T shirts</a></h4>
						<div class="info-product-price">
							<span class="item_price">$45.99</span>
							<del>$69.71</del>
						</div>
						<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
					</div>
				</div>
			</div>
			<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/g1.png" alt="" class="pro-image-front">
									<img src="images/g1.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Dresses</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										<del>$69.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
			<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/a6.png" alt="" class="pro-image-front">
									<img src="images/a6.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Air Tshirt Black </a></h4>
									<div class="info-product-price">
										<span class="item_price">$129.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
			<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/a7.png" alt="" class="pro-image-front">
									<img src="images/a7.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Dresses</a></h4>
									<div class="info-product-price">
										<span class="item_price">$129.99</span>
										<del>$150.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
			<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/a3.png" alt="" class="pro-image-front">
									<img src="images/a3.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Air Tshirt Black </a></h4>
									<div class="info-product-price">
										<span class="item_price">$119.99</span>
										<del>$120.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
			<div class="clearfix"></div>
		</div>
		<div class="pagination-grid text-right">
        <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                  <li class="page-item"><a class="page-link" href="index.php?controller=products&action=category&id=<?php echo $category_id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
		</div>
</div>