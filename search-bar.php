<div class="panel panel-primary">
                <div class="panel-heading">Motorcycle Search</div>
                <div class="panel-body">
                    <form method="GET" action="items-search">
                      <div class="form-group">
                        <select class="form-control" id = "select_brands" name = "select_brands">
                        <option value="ALL" selected disabled>MANUFACTURED BY</option>
                        <option value="ALL" >All</option>

                            <?php 
                            $select=$conn->query("SELECT * from make");
                            while ($rows = mysqli_fetch_array($select)) {
                                ?>
                    <option value = "<?php echo $rows['brand_code']?>"><?php echo $rows['brand_name']?></option>
                                <?php
                            }
                            ?>
                        </select>
                       </div>
                        <div class="form-group">
                        <input type="text" name="select_model" id="select_model" class="form-control" />
                       </div>


                       <div class="form-group pull-right">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-search" aria-hidden="true"></i> Search
                        </button>
                       </div>
                    </form>
                </div>
              </div>

              <div class="panel panel-primary">
                <div class="panel-heading">Motorcycle Budget Finder</div>
                <div class="panel-body">
                    <form method="GET" action="item-budget-finder">
                      <div class="form-group">
                        <select class="form-control" id = "select_make" name = "select_make">
                        <option value="ALL" selected disabled>MANUFACTURED BY</option>
                        <option value="ALL" >All</option>
                            <?php 
                            $select=$conn->query("SELECT * from make");
                            while ($rows = mysqli_fetch_array($select)) {
                                ?>
                    <option value = "<?php echo $rows['brand_code']?>"><?php echo $rows['brand_name']?></option>
                                <?php
                            }
                            ?>
                        </select>
                       </div>
                        <div class="form-group">
                        <select class="form-control" id = "select_budget" name = "select_budget">
                        <option value="" selected disabled>Search by Base Price</option>
                         <option value="ALL" >All</option>
                                                <option value="1">0 - 10,000</option>
                                                <option value="2">10,001 - 20,000</option>
                                                <option value="3">20,001 - 30,000</option>
                                                <option value="4">30,001 - 40,000</option>
                                                <option value="5">40,001 - 60,000</option>
                                                <option value="6">60,001 - 70,000</option>
                                                <option value="7">70,001 - 90,000</option>
                                                <option value="8">90,001 - Above</option>
                        </select>
                       </div>

                       <div class="form-group pull-right">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-search" aria-hidden="true"></i> Search
                        </button>
                       </div>
                    </form>
                </div>
              </div>

              <div class="panel panel-primary">
                <div class="panel-heading">MANUFACTURER</div>
                <div class="panel-body">
                  <div class="row">
                        <div class="col-md-3 col-xs-3 ">
                            <a class="thumbnail" href="#">
                               <img src="images/suzuki.png" alt="" width="60" height="60">
                            </a>
                       </div>
                       <div class="col-md-3 col-xs-3 ">
                        <a class="thumbnail" href="#">
                           <img src="images/kawasaki.png" alt=""  width="60" height="60">
                        </a>
                        </div>

                     <div class="col-md-3 col-xs-3 ">
                        <a class="thumbnail" href="#">
                           <img src="images/honda-logo.png" alt=""  width="60" height="60">
                        </a>
                    </div>

                    <div class="col-md-3 col-xs-3 ">
                        <a class="thumbnail" href="#">
                           <img src="images/yamaha.png" alt=""  width="60" height="60">
                        </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-primary">
                <div class="panel-heading">News/Events</div>
                <div class="panel-body">
                  <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <?php 
                              $select = $conn->query("SELECT * from news_events order by RAND() limit 1");
                              $rows = mysqli_fetch_array($select);
                            ?>
                            <h4><?php echo $rows['title']; ?></h4>
                            <p><?php echo $rows['description'];?></p>
                       </div>
                  </div>
                </div>
              </div>


