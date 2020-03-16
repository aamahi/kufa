<?php
$title ="show Portfolio";
include_once ('header.php');
$id = $_GET['id'];

$sql= "SELECT * FROM `portfolio` WHERE `id` = {$id}";
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
                                    <h5 class="panel-title"> Show Portfolio </h5>
                                </div>
                                <div class="panel-content">
                                    <div class="p-info">
                                        <ul>
                                            <li><span>Project Name</span> <?=$fetch_assco['name']?></li>
                                        </ul>
                                        <ul>
                                            <li><span>Project Category</span> <?=$fetch_assco['category']?></li>
                                        </ul>
                                        <div class="p-description">
                                            <img width="710" src="../portfolio/<?=$fetch_assco['photo'];?>">
                                        </div>
                                    </div>
                                    <a href="all_portfolio.php" class="btn btn-md btn-primary">Back</a>
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