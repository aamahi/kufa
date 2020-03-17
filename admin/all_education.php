<?php
$title ="All education";
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
                    <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">education</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--SEARCHING, ORDENING & PAGING-->
        <div class="row animated fadeInRight">
            <div class="col-sm-12">
                <h4 class="section-subtitle text-center"><b>All education</b></h4>
                <div class="panel">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>degree_name</th>
                                    <th>year</th>
                                    <th>persentage</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($all_education as $education):
                                ?>
                                    <tr>
                                        <td><?=$education['degree_name']?></td>
                                        <td><?=$education['year'];?></td>
                                        <td><?=$education['persentage'];?> % </td>
                                        <td>
                                            <?php
                                                if($education['status']==1) {
                                             ?>
                                                <a href="layout/deactive_education.php?id=<?=$education['id'];?>" class="btn btn-success">Show</a>
                                            <?php
                                                }else{
                                             ?>
                                                <a href="layout/active_education.php?id=<?=$education['id'];?>" class="btn btn-warning">Dosen't Show</a>
                                            <?php
                                                 }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="layout/delete_education.php?id=<?=$education['id'];?>" class="btn btn-danger">Delete</a>
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