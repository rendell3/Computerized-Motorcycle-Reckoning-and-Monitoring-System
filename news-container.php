<div class="row">
            <div class="col-md-4">
              <?php include 'search-bar.php' ?>
            </div>
            <div class="col-md-8">
             <div class="panel panel-primary">
                <div class="panel-heading">News and Events</div>
                <div class="panel-body">
                    <?php 
                      $select = $conn->query("SELECT * from news_events where id = '$id' AND title = '$title'");
                     $rows=mysqli_fetch_array($select);
                    ?>
                           <div class="panel panel-default">
                              <div class="panel-heading"><?php echo $rows['title'];?> <span class="pull-right">Date: <?php echo $rows['datecreated'];?></span></div>
                              <div class="panel-body">
                                  <?php echo $rows['description'];?> </div>
                              </div>
                          </div>
                   
              </div>
            </div>
        </div>
 </div>