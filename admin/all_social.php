<?php
$title ="All social";
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
                    <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">social</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--SEARCHING, ORDENING & PAGING-->
        <div class="row animated fadeInRight">
            <div class="col-sm-12">
                <h4 class="section-subtitle text-center"><b>All social</b></h4>
                <div class="panel">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Icon</th>
                                    <th>Name</th>
                                    <th>link</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($all_social as $social):
                                ?>
                                    <tr>
                                        <td><i style="font-size: 45px;" class="fa <?=$social['icon']?>"></i></td>
                                        <td><?=$social['name'];?></td>
                                        <td><?=$social['link'];?></td>
                                        <td>
                                            <?php
                                                if($social['status']==1) {
                                             ?>
                                                <a href="layout/deactive_social.php?id=<?=$social['id'];?>" class="btn btn-success">Show</a>
                                            <?php
                                                }else{
                                             ?>
                                                <a href="layout/active_social.php?id=<?=$social['id'];?>" class="btn btn-warning">Don't Show</a>
                                            <?php
                                                 }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="layout/delete_social.php?id=<?=$social['id'];?>" class="btn btn-danger">Delete</a>
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