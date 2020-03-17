<?php
$title ="portfolio";
include_once ('header.php');



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
                    <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">portfolio</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--SEARCHING, ORDENING & PAGING-->
        <div class="row animated fadeInRight">
            <div class="col-sm-12">
                <h4 class="section-subtitle text-center"><b>All portfolio</b></h4>
                <div class="panel">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($all_portfolio as $portfolio):
                                ?>
                                    <tr>
                                        <td><img width="48" src="../portfolio/<?=$portfolio['photo'];?>"></td>
                                        <td><?=$portfolio['name'];?></td>
                                        <td><?=$portfolio['position']?></td>
                                        <td>
                                            <?php
                                                if($portfolio['status']==1) {
                                             ?>
                                                <a href="layout/deactive_portfolio.php?id=<?=$portfolio['id'];?>" class="btn btn-success">Show</a>
                                            <?php
                                                }else{
                                             ?>
                                                <a href="layout/active_portfolio.php?id=<?=$portfolio['id'];?>" class="btn btn-warning">Don't Show</a>
                                            <?php
                                                 }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="layout/delete_portfolio.php?id=<?=$portfolio['id'];?>&img=<?=$portfolio['photo'];?>" class="btn btn-danger">Delete</a>
                                            <a href="show_portfolio.php?id=<?=$portfolio['id'];?>" class="btn btn-primary">Show Portfolio</a>
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
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    </div>
<?php
include_once ('footer.php');