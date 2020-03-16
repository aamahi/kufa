<?php
$title ="Testimonial";
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
                    <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Testimonial</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--SEARCHING, ORDENING & PAGING-->
        <div class="row animated fadeInRight">
            <div class="col-sm-12">
                <h4 class="section-subtitle text-center"><b>All Testimonial</b></h4>
                <div class="panel">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Review Message</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($all_testimonial as $testimonial):
                                ?>
                                    <tr>
                                        <td><img width="48" src="../testimonial/<?=$testimonial['photo'];?>"></td>
                                        <td><?=$testimonial['name'];?></td>
                                        <td><?=$testimonial['postion']?></td>
                                        <td><?=$testimonial['review_message'];?></td>
                                        <td>
                                            <?php
                                                if($testimonial['status']==1) {
                                             ?>
                                                <a href="layout/deactive_testimonial.php?id=<?=$testimonial['id'];?>" class="btn btn-success">Active</a>
                                            <?php
                                                }else{
                                             ?>
                                                <a href="layout/active_testimonial.php?id=<?=$testimonial['id'];?>" class="btn btn-warning">Deactive</a>
                                            <?php
                                                 }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="layout/delete.php?id=<?=$testimonial['id'];?>&img=<?=$testimonial['image'];?>" class="btn btn-danger">Delete</a>
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