<?php
//  count unreadmessage
$count_unread_message = "SELECT count(*) as total_unread_message FROM `contact_message` WHERE `status`=0";
$all_unread_message = "SELECT * FROM `contact_message` WHERE `status`=0";
$query_unread_message = mysqli_query($db,$count_unread_message);
$query_all_unread_message = mysqli_query($db,$all_unread_message);
$total_unread_message = mysqli_fetch_assoc($query_unread_message);

?>
        <div class="page-header">
            <!-- LEFTSIDE header -->
            <div class="leftside-header">
                <div class="logo">
                    <a href="index.php" class="on-click">
                        <img alt="logo" src="images/logo/s_logo.png" />
                    </a>
                </div>
                <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>
            <!-- RIGHTSIDE header -->
            <div class="rightside-header">
                <div class="header-middle"></div>
                <!--SEARCH HEADERBOX-->
                <div class="header-section" id="search-headerbox">
                    <input type="text" name="search" id="search" placeholder="Search...">
                    <i class="fa fa-search search" id="search-icon" aria-hidden="true"></i>
                    <div class="header-separator"></div>
                </div>
                <!--NOCITE HEADERBOX-->
                <div class="header-section hidden-xs" id="notice-headerbox">
                    <div class="notice" id="messages-notice">
                        <i class="fa fa-comments-o" aria-hidden="true"><span class="badge badge-xs badge-top-right x-danger"><?=$total_unread_message['total_unread_message'];?></span>
                        </i>
                        <div class="dropdown-box basic">
                            <div class="drop-header ">
                                <h3><i class="fa fa-comments" aria-hidden="true"></i> Messages</h3>
                                <span class="badge x-danger b-rounded"><?=$total_unread_message['total_unread_message'];?></span>
                            </div>
                            <div class="drop-content">
                                <div class="widget-list list-left-element">
                                    <ul>
                                        <?php
                                            foreach ($query_all_unread_message as $unread_message):
                                        ?>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><img alt="profile photo" src="images/defult.png" /></div>
                                                <div class="text">
                                                    <span class="title"><?=$unread_message['name']?></span>
                                                    <span class="subtitle"><?=$unread_message['message'];?></span>
                                                </div>
                                            </a>
                                        </li>
                                        <?php
                                            endforeach;
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="drop-footer">
                                <a href="all_message.php">See all messages</a>
                            </div>
                        </div>
                    </div>

                    <div class="header-separator"></div>
                </div>
                <!--USER HEADERBOX -->
                <div class="header-section" id="user-headerbox">
                    <div class="user-header-wrap">
                        <div class="user-photo">
                            <img alt="profile photo" src="images/user/<?=$_SESSION['user_all_info']['image'];?>" />
                        </div>
                        <div class="user-info">
                            <span class="user-name"><?=$_SESSION['user_all_info']['name'];?></span>
                        </div>
                        <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                        <i class="fa fa-minus icon-close" aria-hidden="true"></i>
                    </div>
                    <div class="user-options dropdown-box">
                        <div class="drop-content basic">
                            <ul>
                                <li> <a href="user_profile.php"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header-separator"></div>
                <!--Log out -->
                <div class="header-section">
                    <a href="user/logout.php" data-toggle="tooltip" data-placement="left" title="Logout"><i class="fa fa-sign-out log-out" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>