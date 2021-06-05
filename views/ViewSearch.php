<?php
//load file LayoutTrangChu.php
$this->fileLayout = "LayoutTrangTrong.php";
?>
<div class="special-collection">
    <div class="tabs-container">
        <div class="row" style="margin-top:10px;">
            <div class="head-tabs head-tab1 col-lg-8">
                <h2>Tìm kiếm - Giá từ  $<?php echo number_format($fromPrice); ?> đến $<?php echo number_format($toPrice); ?> </h2>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="tabs-content row">
        <div id="content-tabb1" class="content-tab content-tab-proindex">
            <div class="clearfix">
                <div class="row">
                    <?php foreach ($data as $rows) : ?>
                        <!-- box product -->
                        <div class="col-md-3 product-men" style="margin: 30px 20px 0 35px">
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
                                        <del>$<?php echo number_format($rows->price); ?></del>
                                    </div>
                                    <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <!-- end box product -->
                    <?php endforeach; ?>
                </div>

                <!-- paging -->
                <div style="clear: both;"></div>
                <div style="margin-top: -50px;" class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;">
                    <ul class="pagination">
                        <li class="page-item"><span>Trang</span></li>
                        <?php for ($i = 1; $i <= $numPage; $i++) : ?>
                            <li class="page-item"><a class="page-link" href="index.php?controller=search&fromPrice=<?php echo $fromPrice ?>&toPrice=<?php echo $toPrice ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php endfor; ?>
                    </ul>
                </div>
                <!-- end paging -->
            </div>
        </div>
    </div>
</div>