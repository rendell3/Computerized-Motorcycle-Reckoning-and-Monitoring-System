<div class="row">
            <div class="col-md-4">
             <?php include 'search-bar.php' ?>
            </div>
            <div class="col-md-8">
             <div class="panel panel-primary">
              <div class="panel-heading"><?php echo $_GET['itemcode'];?></div>
                <div class="panel-body">
                   <div class="col-sm-6 col-lg-6 col-md-6">
                    <?php
 $sel = $conn->query("SELECT a.itemmaster_qty as qty,
                      a.itemcode as itemcode,
                      a.items_masterid as items_masterid,
                      a.itemdescription as itemdescription,
                      a.image_location as image_location,
                      a.color as color,
                      a.base_price as base_price,
                      a.downpayment as downpayment,
                      a.monthly_installment as monthly_installment,
                      a.terms as terms,
                      c.frame as frame,
                      c.headlight as headlight,
                      c.fuel_system as fuel_system,
                      c.gear_shift as gear_shift,
                      c.dry_weight as dry_weight,
                      c.ground_clearance as ground_clearance,
                      c.overall_dimensions as overall_dimensions,
                      c.wheelbase as wheelbase,
                      c.rear_suspension as rear_suspension,
                      c.horse_power as horse_power,
                      c.seat_height as seat_height,
                      c.wheels_type as wheels_type,
                      c.engine_oil as engine_oil,
                      c.displacement as displacement,
                      c.engine_type as engine_type,
                      c.rear_tire as rear_tire,
                      c.fuel as fuel,
                      c.brake_system as brake_system,
                      c.starting_system as starting_system,
                      c.front_tile as front_tile,
                      c.ignition_type as ignition_type,
                      c.bore_stroke as bore_stroke

                      from item_masterdata a
                      LEFT OUTER JOIN items_specs c on c.items_masterid = a.items_masterid
                  
                      where a.itemcode = '$items' ");
                      $rows = mysqli_fetch_array($sel);
                      ?>

                        <div class="thumbnail ">
                            <img src="wheeltek/<?php echo $rows['image_location'];?>" alt="">
                      </div>
                </div>
              <div class="col-sm-6 col-lg-6 col-md-6">
                   <div class="caption">
                  <h5 align="center"><a href="#" class="itemcode1"  style="text-decoration:none;" ><?php echo $rows['itemcode'];?></a></h5>
                  <h5 class="textcash1" align="center">&#8369;<?php echo number_format($rows['base_price']);?></h5>

                  <button class="btn btn-primary pull-right" value="Calculate" data-toggle="modal" data-target="#inquiry" >          <i class="fa fa-calculator" aria-hidden="true"></i> Calculate</button>
         
                   </div>
                   <br><br>
                   <label>Description :</label>
                   <p><?php echo $rows['itemdescription'];?></p>
                   <label>Color :</label>
                   <p><?php echo $rows['color'];?></p>
                    <br>
                    <label>Requirements</label>
                     <ol>
                      <li>Bring photocopy of billing statement</li>
                      <li>Photocopy of 2x2 picture.</li>
                      <li>With 1 Co-Maker</li>
                    </ol>

                    <p>Contact us: 09066472628</p>
                </div>
          </div>
      </div>

       <div class="panel panel-primary">
                <div class="panel-heading">Specification</div>
          <div class="panel-body">
              <table class="table table-responsive">
              <tbody>
                <tr>
                  <td class="specs">Frame:</td>
                  <td><?php echo $rows['frame'];?></td>
                   <td class="specs">Headlight:</td>
                  <td><?php echo $rows['headlight'];?></td>
                </tr>
                  <tr>
                  <td class="specs">Fuel System:</td>
                  <td><?php echo $rows['fuel_system'];?></td>
                   <td class="specs">Gear Shift:</td>
                  <td><?php echo $rows['gear_shift'];?></td>
                </tr>
                  <tr>
                  <td class="specs">Dry Weight (without oil & Fuel):</td>
                  <td><?php echo $rows['dry_weight'];?></td>
                   <td class="specs">Minimum Ground Clearance:</td>
                  <td><?php echo $rows['ground_clearance'];?></td>
                </tr>
                  <tr>
                  <td class="specs">Wheelbase:</td>
                  <td><?php echo $rows['wheelbase'];?></td>
                   <td class="specs">Overall Dimensions (lenght x width x height):</td>
                  <td><?php echo $rows['overall_dimensions'];?></td>
                </tr>
                  <tr>
                  <td class="specs">Rear Suspension:</td>
                  <td><?php echo $rows['rear_suspension'];?></td>
                   <td class="specs">Maximum Horse Power:</td>
                  <td><?php echo $rows['horse_power'];?></td>
                </tr>
                  <tr>
                  <td class="specs">Seat Height:</td>
                  <td><?php echo $rows['seat_height'];?></td>
                   <td class="specs">Wheels Type:</td>
                  <td><?php echo $rows['wheels_type'];?></td>
                </tr>
                <tr>
                  <td class="specs">Engine Oil Capacity (L):</td>
                  <td><?php echo $rows['engine_oil'];?></td>
                   <td class="specs">Displacement (cc)</td>
                  <td><?php echo $rows['displacement'];?></td>
                </tr>
                <tr>
                  <td class="specs">Engine Type:</td>
                  <td><?php echo $rows['engine_type'];?></td>
                   <td class="specs">Rear Tire</td>
                  <td><?php echo $rows['rear_tire'];?></td>
                </tr>
                <tr>
                  <td class="specs">Maximum Torque:</td>
                  <td><?php echo $rows['engine_type'];?></td>
                   <td class="specs">Fuel</td>
                  <td><?php echo $rows['fuel'];?></td>
                </tr>
                <tr>
                  <td class="specs">Brake System (Front / Rear):</td>
                  <td><?php echo $rows['brake_system'];?></td>
                   <td class="specs">Starting System</td>
                  <td><?php echo $rows['starting_system'];?></td>
                </tr>
                <tr>
                  <td class="specs">Front Tire:</td>
                  <td><?php echo $rows['front_tile'];?></td>
                   <td class="specs">Front Suspension</td>
                  <td><?php echo $rows['starting_system'];?></td>
                </tr>
                <tr>
                  <td class="specs">Ignition Type:</td>
                  <td><?php echo $rows['ignition_type'];?></td>
                   <td class="specs">Bore x Stroke (mm)</td>
                  <td><?php echo $rows['bore_stroke'];?></td>
                </tr>

                </tbody>
              </table>
          </div>
      </div>

  </div>
</div>

<div id="inquiry" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Monthly Calculation</h4>
      </div>
      <div id = "pricelist">
        <div class="modal-body">
          <div class="row">
              <div class="col-md-12">
                  <label>Base Price : </label>
                  <input type="text" name="baseprice" id = "baseprice" value="<?php echo $rows['base_price'];?>" class = "form-control" readonly>
              </div>
          </div>

<div class="row">
              <div class="col-md-12">
                  <label>Standard Down Payment : </label>
                  <input type="text" name="downprice" id = "downprice" value="<?php echo $rows['downpayment'];?>" class = "form-control" readonly>
              </div>
          </div>


          <div class="row">
            <div class="col-md-12">
                <label>Terms : </label>
                  <select class="form-control" id = "terms" name="terms">
                      <option value="12">12 Months</option>                    
                      <option value="24">24 Months</option>                    
                      <option value="36">36 Months</option>                    
                  </select>
              </div>
            </div>


          <div class="row">
            <div class="col-md-12">
                <label>Downpayment : </label>
                  <input type="text" name="dp" id = "dp" class="form-control">
              </div>
            </div>
              <span id = "monthly"></span>
              <span id = "monthly_installment"></span>
                     <input type="hidden" name="calc_rate" id = "calc_rate" value="1.75">
                    <input type="hidden" name="calc_terms" id = "calc_terms" value="36">
            <div class="row">
            <div class="col-md-12">
                <label>Monthly Installment : </label>
                  <input type="text" name="mi" id = "mi" class="form-control" readonly>
              </div>
            </div>
            <hr>
            <blockquote><small>This calculation is to get only your monthly installment base on your downpayment. Thank You!</small></blockquote>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

         <!--<div class="pull-left">
         <a href="wheeltek/index" class="btn btn-primary"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign in</a>
         </div>-->
      </div>
    </div>

  </div>
</div>




<div class="row">
<div class="col-md-12">
             <div class="panel panel-primary">
                <div class="panel-heading">Featured Motorcycle</div>
                <div class="panel-body">
                 <div class="row">
<?php
 $sel = $conn->query("SELECT a.itemmaster_qty as qty,
                             a.itemcode as itemcode,
                             a.items_masterid as items_masterid,
                             a.image_location as image_location,
                             a.base_price as base_price,
                             a.downpayment as downpayment,
                             a.monthly_installment as monthly_installment,
                             a.terms as terms,
                             a.itemdescription as itemdescription
                      from item_masterdata a
                      where
                            a.items_masterid >= 1 and a.itemmaster_qty <> 0 order by RAND() limit 3 ");
                    while($rows = mysqli_fetch_array($sel)){
                    ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                     <a href="items?itemcode=<?php echo $rows['itemcode'];?>">
                        <div class="thumbnail zoom_img bw">
                            <img src="wheeltek/<?php echo $rows['image_location'];?>" alt="">
                            <div class="caption">
                  <h5 align="center"><a href="#" class="itemcode"  style="text-decoration:none;" ><?php echo $rows['itemcode'];?></a></h5>
                  <h5 class="textcash2" align="center">&#8369;<?php echo number_format($rows['base_price']);?></h5>
                  <label class="label2">Description:</label>
                  <label class="textdp2"> <?php echo $rows['itemdescription'];?></label><br>
                  <label class="label2">Color :</label>
                  <label class="textdp2"> <?php echo $rows['color'];?></label><br>
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

