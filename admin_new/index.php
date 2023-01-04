<?php include("inc/header.php");
  ?>

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
                        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Main</li>
                            </ol>
                        </div>
                        <div class="row">
                            <!-- 1st row Start -->
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="">
                                                        <h2 class="mb-2"> <?=rowcount('pages','')?> </h2>
                                                        <p class="text-muted mb-0">Pages</p>
                                                    </div>
                                                    <div class="lnr lnr-file-empty display-4 text-primary"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="">
                                                        <h2 class="mb-2"><?=rowcount('blog_news','')?></h2>
                                                        <p class="text-muted mb-0">Posts</p>
                                                    </div>
                                                    <div class="lnr lnr-highlight display-4 text-success"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="">
                                                        <h2 class="mb-2"><?=rowcount('our_services','')?></h2>
                                                        <p class="text-muted mb-0">Services</p>
                                                    </div>
                                                    <div class="lnr lnr-rocket display-4 text-danger"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="">
                                                        <h2 class="mb-2"><?=rowcount('our_clients','')?></h2>
                                                        <p class="text-muted mb-0">Clients</p>
                                                    </div>
                                                    <div class="lnr lnr-users display-4 text-warning"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="card d-flex w-100 mb-4">
                                            <div class="row no-gutters row-bordered row-border-light h-100">
                                                <div class="d-flex col-md-6 align-items-center">
                                                    <div class="card-body">
                                                        <div class="row align-items-center mb-3">
                                                            <div class="col">
                                                                <h4 class="mt-3 mb-0"><?=rowcount('our_team','')?></h4>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="lnr lnr-users text-primary display-4"></i>
                                                            </div>
                                                            
                                                        </div>
                                                        <p class="mb-0 text-muted">Team</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex col-md-6 align-items-center">
                                                    <div class="card-body">
                                                        <div class="row align-items-center mb-3">
                                                            <div class="col">
                                                                <h4 class="mt-3 mb-0"><?=rowcount('file_management','')?></h4>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="lnr lnr-magic-wand text-primary display-4"></i>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-muted">Files</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="card mb-4">
                                    <div class="card-header with-elements">
                                        <h6 class="card-header-title mb-0">Statistics</h6>
                                        <div class="card-header-elements ml-auto">
                                            <label class="text m-0">
                                                <span class="text-light text-tiny font-weight-semibold align-middle">SHOW STATS</span>
                                                <span class="switcher switcher-primary switcher-sm d-inline-block align-middle mr-0 ml-2"><input type="checkbox" class="switcher-input" checked><span class="switcher-indicator"><span
                                                            class="switcher-yes"></span><span class="switcher-no"></span></span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="statistics-chart-1" style="height:300px"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- 1st row Start -->
                        </div>
                        <div class="row">
                            <!-- 1st row Start -->
                            <div class="col-md-6">
                                <div class="card d-flex w-100 mb-4">
                                    <div class="row no-gutters row-bordered row-border-light h-100">
                                        <div class="d-flex col-sm-6 col-md-4 col-lg-6 align-items-center">
                                            <div class="card-body media align-items-center text-dark">
                                                <i class="lnr lnr-diamond display-4 d-block text-primary"></i>
                                                <span class="media-body d-block ml-3"><span class="text-big mr-1 text-primary">$1584.78</span>
                                                    <br>
                                                    <small class="text-muted">Earned this month</small>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="d-flex col-sm-6 col-md-4 col-lg-6 align-items-center">
                                            <div class="card-body media align-items-center text-dark">
                                                <i class="lnr lnr-clock display-4 d-block text-warning"></i>
                                                <span class="media-body d-block ml-3"><span class="text-big"><span class="mr-1 text-warning">152</span>Working Hours</span>
                                                    <br>
                                                    <small class="text-muted">Spent this month</small>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="d-flex col-sm-6 col-md-4 col-lg-6 align-items-center">
                                            <div class="card-body media align-items-center text-dark">
                                                <i class="lnr lnr-hourglass display-4 d-block text-danger"></i>
                                                <span class="media-body d-block ml-3"><span class="text-big"><span class="mr-1 text-danger">54</span> Tasks</span>
                                                    <br>
                                                    <small class="text-muted">Completed this month</small>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="d-flex col-sm-6 col-md-4 col-lg-6 align-items-center">
                                            <div class="card-body media align-items-center text-dark">
                                                <i class="lnr lnr-license display-4 d-block text-success"></i>
                                                <span class="media-body d-block ml-3"><span class="text-big"><span class="mr-1 text-success">6</span> Projects</span>
                                                    <br>
                                                    <small class="text-muted">Done this month</small>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card mb-4 bg-pattern-3 bg-primary text-white">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="lnr lnr-cart display-4"></div>
                                                    <div class="ml-3">
                                                        <div class="small">Monthly sales</div>
                                                        <div class="text-large">2362</div>
                                                    </div>
                                                </div>
                                                <div id="order-chart-1" class="mt-3 chart-shadow" style="height:70px"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card mb-4 bg-pattern-3-dark">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="lnr lnr-gift display-4 text-primary"></div>
                                                    <div class="ml-3">
                                                        <div class="text-muted small">Products</div>
                                                        <div class="text-large">985</div>
                                                    </div>
                                                </div>
                                                <div id="ecom-chart-3" class="mt-3 chart-shadow-primary" style="height:70px"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 1st row Start -->
                        </div>
                        

                        <div class="row">                      
                            <div class="col-md-12">
                                <div class="card mt-2">
                                    <div class="card-header">
                                        <h4 class="p-0 m-0" >Last Blogs</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table id="report-table2" class="table table-striped table-striped mb-0">
                                                <thead>
                                                    <tr class="text-info"> 
                                                    <th style="width:5px;" ><input type="checkbox" name=""></th>                                  
                                                        <th>Title</th>
                                                        <th>Category</th>
                                                        <th>Author</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>                                         
                                                                    
                                            <?php 
                                                $i=1;
                                                $data = SelectData('blog_news',"INNER JOIN blogs_category ON blog_news.cat_title=blogs_category.cat_id LIMIT 5");
                                                foreach($data as $row){?>
                                                                        
                                                <tr>    
                                                    <td><?=$i?> <input type="checkbox" name=""></td>                                    
                                                    <td id="pages">
                                                        <b ><?=$row['post_title']?>  </b>
                                                        <div class="action_button" style="font-size: 12px; color:#979797;">
                                                            <a href="post_edit.php?postid=<?=$row['id']?>" style="color:#979797;">Edit</a> |                                             
                                                            <a href="posts.php?deletepost=<?=$row['id']?>" style="color:#979797;">Trash</a> | 
                                                            <a target="null" href="../post_full.php?detail=<?=$row['page_url']?>" style="color:#979797;">View</a> 
                                                        </div>
                                                    </td>
                                                    <td><?=$row['category_name']?></td>
                                                    <td>admin</td>
                                                    <td><?=$retVal = ($row['page_status']=='0') ? "<p class='p-0 m-0 text-danger'>Private</p>" : "<p class='p-0 m-0 text-success'>Published</p>";?>
                                                        <small><?=date('M d, Y | h:i A',strtotime($row['datetime'])); ?></small></td>                                      
                                                </tr>  


                                                    <?php $i++; } ?>
                                            
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>          
                            </div>
                        </div>
                    </div>
                    <!-- [ content ] End -->

                   <?php include("inc/footer.php"); ?>