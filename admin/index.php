<?php
//    session_start();

    $title = "Dashboard";
    include_once('header.php');


//    if (!isset($_SESSION['user_all_info'])) {
//        header('location:user/signin.php');
//    }

//    count user
    $count_user = "SELECT count(*) as total_user FROM `user`";
    $query = mysqli_query($db,$count_user);
    $total_user = mysqli_fetch_assoc($query);

//  count Clint
    $count_clint = "SELECT count(*) as total_clint FROM `clint`";
    $query_clint = mysqli_query($db,$count_clint);
    $total_clint = mysqli_fetch_assoc($query_clint);

    //  count Service
    $count_service = "SELECT count(*) as total_service FROM `service`";
    $query_service = mysqli_query($db,$count_service);
    $total_service = mysqli_fetch_assoc($query_service);

    //  count Service
    $count_portfolio = "SELECT count(*) as total_portfolio FROM `portfolio`";
    $query_portfolio = mysqli_query($db,$count_portfolio);
    $total_portfolio = mysqli_fetch_assoc($query_portfolio);


?>
            <!-- CONTENT -->
            <!-- ========================================================= -->
            <div class="content">
                <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                    <div class="col-sm-12 col-lg-12">
                        <div class="row">
                            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                            <!--WIDGETBOX-->
                            <div class="col-sm-12 col-md-4">
                                <div class="panel widgetbox wbox-2 bg-lighter-2 color-light">
                                    <a href="#">
                                        <div class="panel-content">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <span class="icon fa fa-user color-darker-1"></span>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="subtitle color-darker-1">Total User</h4>
                                                    <h1 class="title color-primary"> <?php echo $total_user['total_user']; ?></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="panel widgetbox wbox-2 bg-scale-0">
                                    <a href="#">
                                        <div class="panel-content">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <span class="icon fa fa-globe color-darker-2"></span>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="subtitle color-darker-2">Total Clint</h4>
                                                    <h1 class="title color-w"> <?php echo $total_clint['total_clint']; ?></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="panel widgetbox wbox-2 bg-darker-2 color-light">
                                    <a href="#">
                                        <div class="panel-content">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <span class="icon fa fa-desktop color-lighter-1"></span>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="subtitle color-lighter-1">Total Service</h4>
                                                    <h1 class="title color-light"><?php echo $total_service['total_service']; ?></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="panel widgetbox wbox-2 bg-lighter-2 color-light">
                                    <a href="#">
                                        <div class="panel-content">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <span class="icon fa fa-briefcase color-darker-1"></span>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="subtitle color-darker-1">Total Portfolio</h4>
                                                    <h1 class="title color-primary"> <?php echo $total_portfolio['total_portfolio']; ?></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                             <!--TABS WITH TABLET-->
                             <div class="col-sm-12 col-md-8">
                                <div class="tabs mt-none">
                                    <!-- Tabs Header -->
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active"><a href="#home" data-toggle="tab">User</a></li>
                                        <li><a href="#profile" data-toggle="tab">Clint</a></li>
                                        <li><a href="#messages" data-toggle="tab">Service</a></li>
                                        <li><a href="#settings" data-toggle="tab"> Portfolio </a></li>
                                    </ul>
                                    <!-- Tabs Content -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade" id="profile">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Company Logo</th>
                                                        <th>Company Name</th>
                                                        <th>Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    foreach ($all_clint as $clint):
                                                        ?>
                                                        <tr>
                                                            <td> <img width="48" src="../clint/<?=$clint['company_logo'];?>"> </td>
                                                            <td><?=$clint['company_name']?></td>
                                                            <td>
                                                                <?php
                                                                if($clint['status']==1) {
                                                                    ?>
                                                                    <a href="all_clint.php" class="btn btn-success">Show</a>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <a href="all_clint.php" class="btn btn-warning">Don't Show</a>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </td>

                                                        </tr>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade in active" id="home">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Image</th>
                                                            <th>Name</th>
                                                            <th>User Name</th>
                                                            <th>email</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        foreach ($all_users as $user):
                                                    ?>
                                                        <tr>
                                                            <td> <img width="48" src="images/user/<?=$user['image'];?>"> </td>
                                                            <td><?=$user['name'];?></td>
                                                            <td><?=$user['username']?></td>
                                                            <td><?=$user['email'];?></td>
                                                            <td>
                                                                <?php
                                                                if($user['status']==1) {
                                                                    ?>
                                                                    <a href="all_user.php" class="btn btn-success">Active</a>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <a href="all_user.php" class="btn btn-warning">Deactive</a>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </td>

                                                        </tr>
                                                    <?php
                                                        endforeach;
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Company Logo</th>
                                                        <th>Company Name</th>
                                                        <th>Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    foreach ($all_clint as $clint):
                                                        ?>
                                                        <tr>
                                                            <td> <img width="48" src="../clint/<?=$clint['company_logo'];?>"> </td>
                                                            <td><?=$clint['company_name']?></td>
                                                            <td>
                                                                <?php
                                                                if($clint['status']==1) {
                                                                    ?>
                                                                    <a href="all_clint.php" class="btn btn-success">Show</a>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <a href="all_clint.php" class="btn btn-warning">Don't Show</a>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </td>

                                                        </tr>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="messages">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Icon</th>
                                                        <th>Name</th>
                                                        <th>Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    foreach ($all_service as $service):
                                                        ?>
                                                        <tr>
                                                            <td> <i class="<?=$service['icon'];?>"></i> </td>
                                                            <td><?=$service['name'];?></td>
                                                            <td>
                                                                <?php
                                                                if($service['status']==1) {
                                                                    ?>
                                                                    <a href="all_service.php" class="btn btn-success">Active</a>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <a href="all_service.php" class="btn btn-warning">Deactive</a>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </td>

                                                        </tr>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="settings">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    foreach ($all_portfolio as $portfolio):
                                                        ?>
                                                        <tr>
                                                            <td> <img width="48" src="../portfolio/<?=$portfolio['photo'];?>"> </td>
                                                            <td><?=$portfolio['name'];?></td>
                                                            <td><?=$portfolio['category'];?></td>
                                                            <td>
                                                                <?php
                                                                if($portfolio['status']==1) {
                                                                    ?>
                                                                    <a href="all_portfolio.php" class="btn btn-success">Active</a>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                    <a href="all_portfolio.php" class="btn btn-warning">Deactive</a>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </td>

                                                        </tr>
                                                    <?php
                                                    endforeach;
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
            </div>

<?php
    include_once('footer.php');
?>