<?php

include_once ('header.php');

$select_all_user = "SELECT * FROM `user`";
$all_users = mysqli_query($db,$select_all_user);
//print_r($all_users);
//die();

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
                    <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Tables</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--SEARCHING, ORDENING & PAGING-->
        <div class="row animated fadeInRight">
            <div class="col-sm-12">
                <h4 class="section-subtitle text-center"><b>All User</b></h4>
                <div class="panel">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($all_users as $user):
                                ?>
                                    <tr>
                                        <td><img width="48" src="images/user/<?=$user['image'];?>"></td>
                                        <td><?=$user['name'];?></td>
                                        <td><?=$user['username']?></td>
                                        <td><?=$user['email'];?></td>
                                        <td>
                                            <?php
                                                if($user['status']==1) {
                                             ?>
                                                <a href="layout/deactive.php?id=<?=$user['id'];?>" class="btn btn-success">Active</a>
                                            <?php
                                                }else{
                                             ?>
                                                <a href="layout/active.php?id=<?=$user['id'];?>" class="btn btn-warning">Deactive</a>
                                            <?php
                                                 }
                                            ?>
                                        </td>
                                        <td>Action</td>
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