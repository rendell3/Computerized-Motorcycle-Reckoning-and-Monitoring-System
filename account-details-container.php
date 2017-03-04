
<div class="container body">
      <div class="main_container">
     <?php include 'ropali/shortcut-link/sidebar-customer.php';?>
      <?php include 'ropali/shortcut-link/topbar-customer.php';?>
        <!-- page content -->
        <div class="right_col" role="main">
              <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
             
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Account Details</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="panel panel-default">

                   <div class="panel-heading">Statement of Account</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                  <th>Reference No.</th>
                                  <th>Amount</th>
                                  <th>Penalty</th>
                                  <th>Date</th>
                                </tr>

                   <?php 
                  $select = $conn->query("SELECT * from payments where account_number = '$account_number' and type = 'Monthly Installment' order by date asc ");
                   ?>
                   <?php
                   while ($row =mysqli_fetch_array($select)) {
                    ?>
                              <tr>
                                <td><?php echo $row['refno'];?></td>
                                <td><?php echo $row['amount'];?></td>
                                <td><?php echo $row['penalty'];?></td>
                                <td><?php echo $row['date'];?></td>
                              </tr>
                    <?php
                              } 
                   ?>
                            </table>
                       </div>
                       <div class="row">
                       <div class="col-md-4 col-xs-4 col-sm-4  pull-right">
                       <div class="form-group">
                         <label>Total payment:</label>
                         <?php 
                         $selectmi = $conn->query("SELECT itemcode,totalmipayment from sales where account_number = '$account_number'");
                         $rows = mysqli_fetch_array($selectmi);
                         ?>
                          <input type="text" name="" class="form-control" value="<?php echo $rows['totalmipayment'];?>" readonly>
                       </div>
                       </div>
                       <div class="col-md-4 col-xs-4 col-sm-4  pull-left">
                         <div class="form-group">
                         <label>Itemcode:</label>
                     
                          <input type="text" name="" class="form-control" value="<?php echo $rows['itemcode'];?>" readonly>
                       </div>
                       </div>
                       </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
        </div>
      </div>
</div>
