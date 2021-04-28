<?php 
	//load file LayoutTrangChu.php
	$this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <div class="template-cart">
          <form action="index.php?controller=cart&action=update" method="post">
            <div class="table-responsive">
              <table class="table table-cartx" >
                <thead>
                  <tr>
                    <th class="imagex">Ảnh sản phẩm</th>
                    <th class="namex">Tên sản phẩm</th>
                    <th class="pricex">Giá bán lẻ</th>
                    <th class="quantityx">Số lượng</th>
                    <th class="pricex">Thành tiền</th>
                    <th>Xóa</th>
                  </tr>
                  <style>
                    .quantity input[type="number"] {
											    border: 1px solid #5a88ca;
											    padding: 10px;
											    width: 200px;
											}
                      .template-cart{
                        margin-top: 15px;
                        border: 1px solid #000;
                        padding: 5px;
                      }
                      thead{background-color: rgb(253,163,14);}
                      th{color: #fff !important;}
                      
                  </style>
                </thead>
                <?php foreach($_SESSION["cart"] as $product):  ?>              
               <tbody>
                  <tr>
                    <td>
                        <img src="assets/upload/products/<?php echo $product["photo"]; ?>" class="img-responsive" /></td>
                    <td>
                        <a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"><?php echo $product["name"]; ?></a></td>
                    <td>
                         <?php echo number_format($product["price"]-($product["price"]*$product["discount"])/100); ?>dd </td>
                    <td>
                        <input type="number" id="qty" min="1"style="width: 200px;" value="<?php echo $product["number"]; ?>" name="product_<?php echo $product["id"]; ?>" required="Không thể để trống"></td>
                    <td>
                        <p>
                            <b>
                                <?php echo number_format(($product["price"]-($product["price"]*$product["discount"])/100)*$product["number"]); ?></b></p></td>
                    <td>
                        <a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>" data-id="2479395" class="label1 label-warning">Hủy</a></td>
                        
                  </tr>
                </tbody>
                <style>
                  
                  .label1{padding: 8px 5px; border-radius: 10%; color: #fff;}
                  td img{width: 150px; height: 150px;}
                  td a{ font-size: 16px; color: #000; font-family: serif;}
                </style>
                <?php endforeach; ?>
                <tfoot>
                  <tr>
                    <td colspan="6"><a href="index.php?controller=cart&action=destroy" class="button pull-left">Xóa toàn bộ</a> <a href="index.php?controller=home" class="button pull-right black">Tiếp tục mua hàng</a>
                      <input type="submit" class="button pull-right" value="Cập nhật"></td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </form>
          <?php if($this->cartNumber()>0): ?>
          <div class="total-cart"> Tổng tiền thanh toán:
            <?php echo number_format($this->cartTotal()); ?> <br>
            <a href="index.php?controller=cart&action=chekout" class="button black">Thanh toán</a> </div>
            <?php endif; ?>
</div>