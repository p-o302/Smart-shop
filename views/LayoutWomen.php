<?php
	$this->fileLayout = "LayoutTrangTrong.php";
?>
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>Women's Wear</h3>
	</div>
</div>
<!-- //banner -->
<!-- mens -->
<div class="men-wear">
	<div class="container">
		<div class="col-md-8 products-right">
			<h5>Product Compare(0)</h5>
			<div class="sort-grid">
				<div class="sorting">
					<h6>Sort By</h6>
					<select id="country1" class="frm-field required sect" onchange="location.href = 'index.php?controller=products&action=category&id=<?php echo $category_id; ?>&order='+this.value;">
						<option value="0">Default</option>
						<option value="priceDesc">Price(High - Low)</option>
						<option value="priceAsc">Price(Low - High)</option>	
						<option value="nameAsc">Model(A - Z)</option>
						<option value="nameDesc">Model(Z - A)</option>					
					</select>
					<div class="clearfix"></div>
				</div>
				<div class="sorting">
					<h6>Showing</h6>
					<select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
						<option value="null">7</option>
						<option value="null">14</option> 
						<option value="null">28</option>					
						<option value="null">35</option>								
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
				<div class="men-left"><div  id="top" class="callbacks_container" >
					<ul class="rslides" id="slider3">
						<li>
							<img class="img-responsive" src="assets/frontend/images/men11.jpg" alt=" "/>
						</li>
						<li>
							<img class="img-responsive" src="assets/frontend/images/men21.jpg" alt=" "/>
						</li>
						<li>
							<img class="img-responsive" src="assets/frontend/images/men11.jpg" alt=" "/>
						</li>
						<li>
							<img class="img-responsive" src="assets/frontend/images/men21.jpg" alt=" "/>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="men-wear-bottom">
				<div class="col-sm-4 men-wear-left">
					<img class="img-responsive" src="assets/frontend/images/men31.jpg" alt=" " />
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
			</div></div>
				
				<div class="clearfix"></div>
		</div>
		<!-- <div class="col-md-4 ads" style=" visibility:visible;">
			<img src="assets/frontend/images/ads.png" alt="">
		</div> -->
		<div class="clearfix"></div>
		<div class="single-pro">
			<?php $data = $this->modelGetAllCategoriesWomen(); ?>
			<?php foreach($data as $rows):?>
			<div class="col-md-3 product-men" style="padding-top: 10px;">
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
						<h4><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name;?></a></h4>
						<div class="info-product-price">
							<span class="item_price">$<?php echo number_format($rows->price - ($rows->price * $rows->discount / 100)); ?></span>
							<del>$<?php echo number_format($rows->price); ?></del>
						</div>
						<a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
					</div>
				</div>
			</div>
			<?php endforeach;?>
			<div class="clearfix"></div>
		</div>
		<div class="pagination-grid text-right">
			<ul class="pagination paging">
				<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
				<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
				<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
			</ul>
		</div>
	</div>
</div>	
<!-- //mens -->
<!-- //product-nav -->
