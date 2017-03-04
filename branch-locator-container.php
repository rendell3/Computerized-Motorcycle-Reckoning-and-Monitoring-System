<div class="row">
            <div class="col-md-4">
              <?php include 'search-bar.php' ?>
            </div>
            <div class="col-md-8">
             <div class="panel panel-primary">
                <div class="panel-heading">Branch Locator</div>
                <div class="panel-body">
                 <div class="row">
                <?php
                     $sel = $conn->query("SELECT *
                                          FROM branches
                                          WHERE 
                                          branch_id = '$branch'");
                     $rows = mysqli_fetch_array($sel);
                ?>
                  <img class="img-responsive" src="<?php echo $rows['branch_url']?>" alt="Chania" width="900" height="500">
                  </div>
              </div>
            </div>
        </div>
 </div>