<div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                  <div class="panel-heading">Branches</div>
                  <div class="panel-body">
                    <ul class="list-group">
                      <?php 
                                  $sel = $conn->query("SELECT * from branches ORDER BY branch_code asc");
                                  while ($rows = mysqli_fetch_array($sel)) 
                                  {
                                  ?>
                                     <a href = "branches?branch=<?php echo $rows['branch_id']?>" class="list-group-item"><?php echo $rows['branch_code']." - ".$rows['branch_name']?></a>

                                  <?php
                                  }
                              ?>
                      
                    </ul>
                  </div>
                </div>

            </div>
            <div class="col-md-4">
            </div>
 </div>