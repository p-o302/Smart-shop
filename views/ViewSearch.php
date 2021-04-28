<?php
//load file LayoutTrangChu.php
$this->fileLayout = "LayoutTrangTrong.php";
?>
<div class="special-collection">
    <div class="head-tabs head-tab1 col-lg-8">
        <h2>Tìm kiếm - Giá từ <?php echo number_format($fromPrice) ?> ₫ đến <?php echo number_format($toPrice) ?>₫ </h2>
    </div>
    <div class="tabs-content row">
        <div id="content-tabb1" class="content-tab content-tab-proindex">
            <div class="clearfix">
                <?php foreach ($data as $rows) : ?>
                    <!-- box product -->
                    <div class="col-xs-6 col-md-3 col-sm-6 ">
                        <div class="product-grid" id="product-1168979" style="height: 350px; overflow: hidden;">
                            <div class="image">
                                <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>">
                                    <img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a>
                            </div>
                            <div class="info">
                                <h3 class="name">
                                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>">
                                        <?php echo $rows->name; ?></a>
                                </h3>
                                <p class="price-box">
                                    <span class="special-price">
                                        <span class="price product-price" style="text-decoration:line-through;">
                                            <?php echo number_format($rows->price); ?></span> ₫ </span>
                                </p>
                                <p class="price-box">
                                    <span class="special-price">
                                        <span class="price product-price">
                                            <?php echo number_format($rows->price - ($rows->price * $rows->discount / 100)); ?> </span>₫ </span>
                                </p>
                                <p class="price-box">
                                    <a href="index.php?controller=product&action=rating&id=<?php echo $rows->id; ?>&star=1">
                                        <img src="assets/frontend/images/star.jpg"></a>
                                    <a href="index.php?controller=product&action=rating&id=<?php echo $rows->id; ?>&star=2">
                                        <img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=product&action=rating&id=<?php echo $rows->id; ?>&star=3">
                                        <img src="assets/frontend/images/star.jpg"></a>
                                    <a href="index.php?controller=product&action=rating&id=<?php echo $rows->id; ?>&star=4">
                                        <img src="assets/frontend/images/star.jpg"></a>
                                    <a href="index.php?controller=product&action=rating&id=<?php echo $rows->id; ?>&star=5">
                                        <img src="assets/frontend/images/star.jpg"></a>
                                </p>
                                <div class="action-btn">
                                    <form>
                                        <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="button">Add to Cart</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end box product -->
                <?php endforeach; ?>
                <!-- paging -->
                <div style="clear: both;"></div>
                <div style="margin-top: -50px;" class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;">
                    <ul class="pagination">
                        <li class="page-item"><span>Trang</span></li>
                        <?php for ($i = 1; $i <= $numPage; $i++) : ?>
                            <li class="page-item"><a class="page-link" href="index.php?controller=products&action=category&id=<?php echo $category_id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?><?php echo $i; ?></a></li>
                        <?php endfor; ?>
                    </ul>
                </div>
                <!-- end paging -->
            </div>
        </div>
    </div>
</div>