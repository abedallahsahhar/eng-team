
<script src='<?php echo base_url()."jquery/jquery-2.2.0.min.js"?>' type="text/javascript"></script>

<script src='<?php echo base_url()."jquery/login.js"?>' type="text/javascript"></script>


<input type="hidden" id="user_id" value='<?php $name = $this->session->userdata('CARDID'); echo $name; ?>'>


<nav class="navbar navbar-expand-lg navbar-light header-navbar navbar-fixed">
        <div class="container-fluid navbar-wrapper">
            <div class="navbar-header d-flex">
                <div class="navbar-toggle menu-toggle d-xl-none d-block float-left align-items-center justify-content-center" data-toggle="collapse"><i class="ft-menu font-medium-3"></i></div>
                <ul class="navbar-nav">
                    <li class="nav-item mr-2 d-none d-lg-block"><a class="nav-link apptogglefullscreen" id="navbar-fullscreen" href="javascript:;"><i class="ft-maximize font-medium-3"></i></a></li>
<!--                    <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="javascript:"><i class="ft-search font-medium-3"></i></a>-->
<!--                        <div class="search-input">-->
<!--                            <div class="search-input-icon"><i class="ft-search font-medium-3"></i></div>-->
<!--                            <input class="input" type="text" placeholder="Explore Apex..." tabindex="0" data-search="template-search">-->
<!--                            <div class="search-input-close"><i class="ft-x font-medium-3"></i></div>-->
<!--                            <ul class="search-list"></ul>-->
<!--                        </div>-->
<!--                    </li>-->
                </ul>
            </div>
            <div class="navbar-container">
                <div class="collapse navbar-collapse d-block" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                      
<!--                        <li class="dropdown nav-item"><a class="nav-link dropdown-toggle dropdown-notification p-0 mt-2" id="dropdownBasic1" href="javascript:;" data-toggle="dropdown"><i class="ft-bell font-medium-3"></i><span id="countnave" class="notification badge badge-pill badge-danger">4</span></a>-->
<!--                            <ul class="notification-dropdown dropdown-menu dropdown-menu-media dropdown-menu-right m-0 overflow-hidden">-->
<!--                                <li class="dropdown-menu-header">-->
<!--                                    <div class="dropdown-header d-flex justify-content-between m-0 px-3 py-2 white bg-success">-->
<!--                                        <div class="d-flex"><i class="ft-bell font-medium-3 d-flex align-items-center mr-2"></i><span class="noti-title">الاشعارات  </span></div>-->
<!--                                      <span class="text-bold-400 cursor-pointer">Mark all as read</span>-->
<!--                                    </div>-->
<!--                                </li>-->
<!---->
<!--                                <li class="scrollable-container" id="itemm">-->
<!--                                    <a class="d-flex justify-content-between" href="javascript:void(0)">-->
<!---->
<!--                                    </a>-->
<!--                                    <a class="d-flex justify-content-between" href="javascript:void(0)">-->
<!--                                        <div class="media d-flex align-items-center">-->
<!--                                            <div class="media-left">-->
<!--                                                <div class="mr-3"><img class="avatar" src="../../../app-assets/img/portrait/small/avatar-s-11.png" alt="avatar" height="45" width="45"></div>-->
<!--                                            </div>-->
<!--                                            <div class="media-body">-->
<!--                                                <h6 class="m-0"><span>Andrew Watts</span><small class="grey lighten-1 font-italic float-right">49 mins ago</small></h6><small class="noti-text">Liked your album: UI/UX Inspo</small>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </a><a class="d-flex justify-content-between read-notification" href="javascript:void(0)">-->
<!--                                        <div class="media d-flex align-items-center py-0 pr-0">-->
<!--                                            <div class="media-left">-->
<!--                                                <div class="mr-3"><img src="../../../app-assets/img/icons/sketch-mac-icon.png" alt="avatar" height="45" width="45"></div>-->
<!--                                            </div>-->
<!--                                            <div class="media-body">-->
<!--                                                <h6 class="m-0">Update</h6><small class="noti-text">MyBook v2.0.7</small>-->
<!--                                            </div>-->
<!--                                            <div class="media-right">-->
<!--                                                <div class="border-left">-->
<!--                                                    <div class="px-4 py-2 border-bottom">-->
<!--                                                        <h6 class="m-0 text-bold-600">Update</h6>-->
<!--                                                    </div>-->
<!--                                                    <div class="px-4 py-2 text-center">-->
<!--                                                        <h6 class="m-0">Close</h6>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <a class="d-flex justify-content-between read-notification" href="javascript:void(0)">-->
<!--                                        <div class="media d-flex align-items-center">-->
<!--                                            <div class="media-left">-->
<!--                                                <div class="avatar bg-primary bg-lighten-3 mr-3 p-1"><span class="avatar-content font-medium-2">LD</span></div>-->
<!--                                            </div>-->
<!--                                            <div class="media-body">-->
<!--                                                <h6 class="m-0"><span>Registration done</span><small class="grey lighten-1 font-italic float-right">6 hrs ago</small></h6>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="cursor-pointer">-->
<!--                                        <div class="media d-flex align-items-center justify-content-between">-->
<!--                                            <div class="media-left">-->
<!--                                                <div class="media-body">-->
<!--                                                    <h6 class="m-0">New Offers</h6>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="media-right">-->
<!--                                                <div class="custom-control custom-switch">-->
<!--                                                    <input class="switchery" type="checkbox" checked id="notificationSwtich" data-size="sm">-->
<!--                                                    <label for="notificationSwtich"></label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="d-flex justify-content-between cursor-pointer read-notification">-->
<!--                                        <div class="media d-flex align-items-center">-->
<!--                                            <div class="media-left">-->
<!--                                                <div class="avatar bg-danger bg-lighten-4 mr-3 p-1"><span class="avatar-content font-medium-2"><i class="ft-heart text-danger"></i></span></div>-->
<!--                                            </div>-->
<!--                                            <div class="media-body">-->
<!--                                                <h6 class="m-0"><span>Application approved</span><small class="grey lighten-1 font-italic float-right">18 hrs ago</small></h6>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div><a class="d-flex justify-content-between read-notification" href="javascript:void(0)">-->
<!--                                        <div class="media d-flex align-items-center">-->
<!--                                            <div class="media-left">-->
<!--                                                <div class="mr-3"><img class="avatar" src="../../../app-assets/img/portrait/small/avatar-s-6.png" alt="avatar" height="45" width="45"></div>-->
<!--                                            </div>-->
<!--                                            <div class="media-body">-->
<!--                                                <h6 class="m-0"><span>Anna Lee</span><small class="grey lighten-1 font-italic float-right">27 hrs ago</small></h6><small class="noti-text">Commented on your photo</small>-->
<!--                                                <h6 class="noti-text font-small-3 text-bold-500 m-0">Woah!Loving these colors! Keep it up</h6>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="d-flex justify-content-between cursor-pointer read-notification">-->
<!--                                        <div class="media d-flex align-items-center">-->
<!--                                            <div class="media-left">-->
<!--                                                <div class="avatar bg-info bg-lighten-4 mr-3 p-1">-->
<!--                                                    <div class="avatar-content font-medium-2"><i class="ft-align-left text-info"></i></div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="media-body">-->
<!--                                                <h6 class="m-0"><span>Report generated</span><small class="grey lighten-1 font-italic float-right">35 hrs ago</small></h6>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div><a class="d-flex justify-content-between read-notification" href="javascript:void(0)">-->
<!--                                        <div class="media d-flex align-items-center">-->
<!--                                            <div class="media-left">-->
<!--                                                <div class="mr-3"><img class="avatar" src="../../../app-assets/img/portrait/small/avatar-s-7.png" alt="avatar" height="45" width="45"></div>-->
<!--                                            </div>-->
<!--                                            <div class="media-body">-->
<!--                                                <h6 class="m-0"><span>Oliver Wright</span><small class="grey lighten-1 font-italic float-right">2 days ago</small></h6><small class="noti-text">Liked your album: UI/UX Inspo</small>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li class="dropdown-menu-footer">-->
<!--                                    <div class="noti-footer text-center cursor-pointer primary border-top text-bold-400 py-1">Read All Notifications</div>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
                        <li class="dropdown nav-item mr-1"><a class="nav-link dropdown-toggle user-dropdown d-flex align-items-end" id="dropdownBasic2" href="javascript:;" data-toggle="dropdown">

                                <div class="user d-md-flex d-none mr-2"><span class="text-right" >
                                               <?php


                                               $name = $this->session->userdata('FULLNAME');

                                               echo $name;
                                               ?>
                                    </span><span class="text-right text-muted font-small-3"> <?php


                                        $name = $this->session->userdata('SECIONNAME');

                                        echo $name;
                                        ?></span></div>
                                <img class="avatar"
                                     src="data:image/jpeg;base64,   <?php echo $this->session->userdata('PICTURE')  ?> "
                                     alt="avatar" height="45" width="45">
                            </a>
                            <div class="dropdown-menu text-left dropdown-menu-right m-0 pb-0" aria-labelledby="dropdownBasic2">
<!--                                <a class="dropdown-item" href="app-chat.html">-->
<!--                                    <div class="d-flex align-items-center"><i class="ft-message-square mr-2"></i><span>Chat</span></div>-->
                                </a><a class="dropdown-item" href="<?php echo base_url().'main_ctr/emp7'?>">
                                    <div class="d-flex align-items-center"><i class="ft-settings mr-2"></i><span>الاعدادات</span></div>
                                </a><a class="dropdown-item" href="<?php echo base_url().'main_ctr/emp2'?>">
                                    <div class="d-flex align-items-center"><i class="ft-slack mr-2"></i><span>مجريات الشركة </span></div>
                                </a>
                                <?php  if  ($this->session->userdata('JOBTITLE')=== "2") { ?>
                                     <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo base_url().'Login_ctr/logout'?>">
                                      <div class="d-flex align-items-center"><i class="ft-power mr-2"></i><span>تسجيل خروج</span></div>
                                     </a>
                                     </div>

                            <?php  }
                                else{
                            ?>
                                     <div class="dropdown-divider"></div><a class="dropdown-item" href="http://127.0.0.1/team_prog/main_ctr/emp4/">
                                      <div class="d-flex align-items-center"><i class="ft-power mr-2"></i><span>تسجيل خروج</span></div>
                                     </a>
                                     </div>
                <?php    }?>
<!--                                <div class="dropdown-divider"></div><a class="dropdown-item" href="--><?php //echo base_url().'main_ctr/emp4'?><!--">-->
<!--                                    <div class="d-flex align-items-center"><i class="ft-power mr-2"></i><span>تسجيل خروج</span></div>-->
<!--                                </a>-->
                            </div>
                        </li>
<!--                        <li class="nav-item d-none d-lg-block mr-2 mt-1"><a class="nav-link notification-sidebar-toggle" href="javascript:;"><i class="ft-align-right font-medium-3"></i></a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    <input type="hidden" id="JOBTITLE111" value='<?php $name = $this->session->userdata('JOBTITLE'); echo $name; ?>'>
    <input type="hidden" id="SECTION111" value='<?php $name = $this->session->userdata('SECION'); echo $name; ?>'>

</nav>
<?php // if  ($this->session->userdata('JOBTITLE')=== "2") {
//    echo '<div class="dropdown-divider"></div><a class="dropdown-item" href="http://127.0.0.1/team_prog/Main_ctr/welcome_page">';
//    echo  '<div class="d-flex align-items-center"><i class="ft-power mr-2"></i><span>تسجيل خروج</span></div>';
//    echo '</a>';
//    echo '</div>';
//
//}
//else{
//    echo '<div class="dropdown-divider"></div><a class="dropdown-item" href="http://127.0.0.1/team_prog/main_ctr/emp4/">';
//    echo  '<div class="d-flex align-items-center"><i class="ft-power mr-2"></i><span>تسجيل خروج</span></div>';
//    echo '</a>';
//    echo '</div>';
//}?>