<?php
$title ="Review Message Show";
include_once ('header.php');
$id = $_GET['id'];

$sql= "SELECT * FROM `testimonial` WHERE `id` = {$id}";
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
                                    <h5 class="panel-title"> Review Message </h5>
                                </div>
                                <div class="panel-content">
                                    <div class="p-info">
                                        <ul>
                                            <li><span>Client</span> <?=$fetch_assco['name']?></li>
                                        </ul>
                                        <div class="p-description">
                                             <span style="font-size: 16px;">Review Message</span><?=$fetch_assco['review_message'];?>
                                        </div>
                                    </div>
                                    <a href="all_testimonial.php" class="btn btn-md btn-primary">Back</a>
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