<?php
$title ="Read Contact message Details";
include_once ('header.php');
$id = $_GET['id'];

//update
$read_sql = "UPDATE `contact_message` SET `status`=1 WHERE `id` = {$id}";
mysqli_query($db,$read_sql);


//select
$sql= "SELECT * FROM `contact_message` WHERE `id` = {$id}";
$query = mysqli_query($db,$sql);
$fetch_assco = mysqli_fetch_assoc($query);

?>
    <!-- CONTENT -->
    <!-- ========================================================= -->
    <div class="content">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel  b-primary bt-sm">
                                <div class="panel-header">
                                    <h5 class="panel-title"> Contact Message </h5>
                                </div>
                                <div class="panel-content">
                                    <div class="p-info">
                                        <ul>
                                            <li><span>User </span> <?=$fetch_assco['name']?></li>
                                        </ul>
                                        <div class="p-description">
                                             <span style="font-size: 16px;">Contact Message</span><?=$fetch_assco['message'];?>
                                        </div>
                                    </div>
                                    <a href="all_message.php" class="btn btn-md btn-primary">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php
include_once ('footer.php');
?>