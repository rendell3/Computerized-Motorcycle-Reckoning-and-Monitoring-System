<div class="row">
            <div class="col-md-4">
             <?php include 'search-bar.php' ?>
            </div>
            <div class="col-md-8">
             <div class="panel panel-primary">
                <div class="panel-heading">Search</div>
                <div class="panel-body">
                 <div class="row">
                    <?php
                $sel = $conn->query("SELECT a.itemmaster_qty as qty,
                                            a.itemcode as itemcode,
                                            a.items_masterid as items_masterid,
                                            a.brand_code as brand_code,
                                            a.image_location as image_location,
                                            a.base_price as base_price,
                                            a.downpayment as downpayment,
                                            a.monthly_installment as monthly_installment,
                                            a.terms as terms,
                                            a.itemdescription as itemdescription
                      from item_masterdata a
                      where 
                        ((a.brand_code = '$select_brands' AND 
                        a.itemcode like '%$select_model%') OR 'ALL' = '$select_brands') AND
                        a.itemcode like '%$select_model%'");
                    while($rows = mysqli_fetch_array($sel)){
                    ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                     <a href="items?itemcode=<?php echo $rows['itemcode'];?>">
                        <div class="thumbnail zoom_img bw">
                            <img src="wheeltek/<?php echo $rows['image_location'];?>" alt="">
                            <div class="caption">
                  <h5 align="center"><a href="#" class="itemcode"  style="text-decoration:none;" ><?php echo $rows['itemcode'];?></a></h5>
                  <h5 class="textcash" align="center">&#8369;<?php echo number_format($rows['base_price']);?></h5>
                  <label class="label">Description:</label>
                  <label class="textdp">&#8369; <?php echo $rows['itemdescription'];?></label>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php
                    }
                ?>
                  </div>
              </div>
            </div>
        </div>
 </div>