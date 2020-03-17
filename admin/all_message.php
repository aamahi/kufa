<?php
$title ="contact message";
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
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">contact message</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--SEARCHING, ORDENING & PAGING-->
        <div class="row animated fadeInRight">
            <div class="col-sm-12">
                <h4 class="section-subtitle text-center"><b>All Contact Message</b></h4>
                <div class="panel">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table id="basic-table" class="data-table table table-striped nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach ($all_contact_message as $contact_message):
                                ?>
                                    <tr class="<?=$contact_message['status']==0?'bg-info':''?>">
                                        <td><?=$contact_message['name'];?></td>
                                        <td><?=$contact_message['email']?></td>
                                        <td>
                                            <?php
                                                if($contact_message['status']==0) {
                                             ?>
                                                <a href="read_contact_message.php?id=<?=$contact_message['id'];?>" class="btn btn-warning">Mark as Read</a>
                                            <?php
                                                }else{
                                             ?>
                                                <a href="read_contact_message.php?id=<?=$contact_message['id'];?>" class="btn btn-success">Read Message</a>
                                            <?php
                                                 }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="layout/delete_message.php?id=<?=$contact_message['id'];?>" class="btn btn-danger">Delete Message</a>
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