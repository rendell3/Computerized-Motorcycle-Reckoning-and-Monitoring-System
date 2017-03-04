<div class="row">
            <div class="col-md-4">
              <?php include 'search-bar.php' ?>
            </div>
            <div class="col-md-8">
             <div class="panel panel-primary">
                <div class="panel-heading">News and Events</div>
                <div class="panel-body">
                    <?php 
                      $select = $conn->query("SELECT * from news_events order by datecreated asc");
                      while ($rows=mysqli_fetch_array($select)) 
                      {
                        ?>

                           <div class="panel panel-default">
                              <div class="panel-heading"><a href = "news?id=<?php echo $rows['id'];?>&title=<?php echo $rows['title'];?>" class = 'btn btn-links'><?php echo $rows['title'];?></a> <span class="pull-right"> Dateposted : <?php echo $rows['datecreated'];?></span></div>
                              <div class="panel-body">
                              
                            </div>
                          </div>
                        <?php  
                      }
                    ?>
              </div>
            </div>
        </div>
 </div>