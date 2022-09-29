
<script src='<?php echo base_url()."jquery/login.js"?>' type="text/javascript"></script>
<style>
    .enc-btn {
        background-color: #02bc15;
        border: none;
        border-radius: .5rem;
        font-size: 12px;
        color: white;
    }

    .new-color {
        color: #ff3030;
    }
</style>
<!-- main

     menu header-->
            <!-- Sidebar Header starts-->
            <div class="sidebar-header">
                <div class="logo clearfix"><a class="logo-text float-left" >

                        <div class="logo-img"><img width="103%" src="<?php echo base_url().'app-assets/progect pic/check.png'?>" /></div><span style="    color: cyan;" class="text">ادارة المهام</span>
                    </a><a class="nav-toggle d-none d-lg-none d-xl-block" id="sidebarToggle" href="javascript:;"><i class="toggle-icon ft-toggle-right" data-toggle="expanded"></i></a><a class="nav-close d-block d-lg-block d-xl-none" id="sidebarClose" href="javascript:;"><i class="ft-x"></i></a></div>
            </div>
            <!-- Sidebar Header Ends-->
            <!-- / main menu header-->
            <!-- main menu content-->
            <div class="sidebar-content main-menu-content">
                <div class="nav-container">
                    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                        <li class=" nav-item"><a href="<?php echo base_url().'Main_ctr/welcome_page'?>"><i class="ft-home"></i><span class="menu-title" data-i18n="Dashboard">الرئيسية</span></a>

                        </li>
                 <?php   if  ($this->session->userdata('JOBTITLE')=== "0") {

                     echo '<li class=" nav-item"><a href="http://127.0.0.1/team_prog/Main_ctr/emp4"><i class="ft-watch"></i><span class="menu-title" data-i18n="Chat">سجل الحضور</span></a></li>';

    echo '<li class=" nav-item"><a href="http://127.0.0.1/team_prog/Main_ctr/tasks_emp"><i class="icon-list"></i><span class="menu-title" data-i18n="Chat"> المهام</span><span id="alltaskscard" class="tag badge badge-pill badge-warning float-right mr-1 mt-1">6</span></a></li>';

                     echo '<li class=" nav-item"><a  href="http://127.0.0.1/team_prog/Main_ctr/empcompany"><i class="ft-slack"></i><span class="menu-title" data-i18n="Forms"> مجريات الشركة</span></a></li>';
    echo '<li class=" nav-item"><a  href="http://127.0.0.1/team_prog/Main_ctr/emp62"><i class="ft-award"></i><span class="menu-title" data-i18n="Data Tables"> المكافئات</span></a></li>';
                     echo '<li class=" nav-item"><a href="http://127.0.0.1/team_prog/Main_ctr/emp31"><i class="ft-minus-square"></i><span class="menu-title" data-i18n="Data Tables"> الاجازات </span></a></li>';
                     echo '<li class=" nav-item"><a href="http://127.0.0.1/team_prog/Main_ctr/emp_outim"><i class="ft-clock"></i><span class="menu-title" data-i18n="Data Tables"> الاذونات </span></a></li>';
                     echo '<li class=" nav-item"><a href="http://127.0.0.1/team_prog/Main_ctr/emp7"><i class="ft-settings"></i><span class="menu-title" data-i18n="UI Kit">   الاعدادات </span></a></li>';


                 }
                 else if  ($this->session->userdata('JOBTITLE')=== "1") {

                     echo '<li class=" nav-item"><a href="http://127.0.0.1/team_prog/Main_ctr/emp4"><i class="ft-watch"></i><span class="menu-title" data-i18n="Chat">سجل الحضور</span></a></li>';

                     echo ' <li class=" nav-item"><a href="http://127.0.0.1/team_prog/Main_ctr/emp51"><i class="icon-list"></i><span class="menu-title" data-i18n="Email">اضافة مهمة  </span></a></li>';
                     echo '<li class=" nav-item"><a href="http://127.0.0.1/team_prog/Main_ctr/tasks_emp"><i class="icon-list"></i><span class="menu-title" data-i18n="Chat"> المهام</span><span id="alltaskscard" class="tag badge badge-pill badge-warning float-right mr-1 mt-1">6</span></a></li>';
                     echo '<li class=" nav-item"><a  href="http://127.0.0.1/team_prog/Main_ctr/emp2"><i class="ft-slack"></i><span class="menu-title" data-i18n="Forms"> مجريات الشركة</span></a></li>';
                     echo '<li class=" nav-item"><a  href="http://127.0.0.1/team_prog/Main_ctr/emp3"><i class="icon-layers"></i><span class="menu-title" data-i18n="Tables">اضافة مجريات الشركة</span></a> </li>';
                     echo '<li class=" nav-item"><a  href="http://127.0.0.1/team_prog/Main_ctr/emp62"><i class="ft-award"></i><span class="menu-title" data-i18n="Data Tables"> المكافئات</span></a></li>';
                     echo '<li class=" nav-item"><a href="http://127.0.0.1/team_prog/Main_ctr/emp31"><i class="ft-minus-square"></i><span class="menu-title" data-i18n="Data Tables">اضافة الاجازات </span></a></li>';
                     echo '<li class=" nav-item"><a href="http://127.0.0.1/team_prog/boss_ctr/furlough"><i class="ft-minus-square"></i><span class="menu-title" data-i18n="Data Tables">   الاجازات </span><span id="qq11" class="tag badge badge-pill badge-warning float-right mr-1 mt-1">6</span></a></li>';

                     echo '<li class=" nav-item"><a href="http://127.0.0.1/team_prog/Main_ctr/emp_outim"><i class="ft-clock"></i><span class="menu-title" data-i18n="Data Tables">اضافة الاذونات </span></a></li>';
                     echo'<li class=" nav-item"><a href="http://127.0.0.1/team_prog/Main_ctr/emp_outtime"><i class="ft-clock"></i><span class="menu-title" data-i18n="Data Tables">   الاذونات </span><span id="countout0" class="tag badge badge-pill badge-warning float-right mr-1 mt-1">6</span></a></li>';
                     echo '<li class=" nav-item"><a href="http://127.0.0.1/team_prog/Main_ctr/emp7"><i class="ft-settings"></i><span class="menu-title" data-i18n="UI Kit">   الاعدادات </span></a></li>';

                 }
                 else if  ($this->session->userdata('JOBTITLE')=== "2") {

                     echo ' <li class=" nav-item"><a href="http://127.0.0.1/team_prog/Main_ctr/emp51"><i class="icon-list"></i><span class="menu-title" data-i18n="Email">المهام</span></a></li>';

                     echo ' <li class=" nav-item"><a href="http://127.0.0.1/team_prog/Main_ctr/empa"><i class="ft-clipboard"></i><span class="menu-title" data-i18n="Chat"> متابعة الموظفين</span></a></li>';
                     echo '<li class=" nav-item"><a href="http://127.0.0.1/team_prog/Main_ctr/emp1"><i class="ft-user-plus"></i><span class="menu-title" data-i18n="Task Board">موظف جديد </span></a></li>';

                     echo '<li class=" nav-item"><a href="http://127.0.0.1/team_prog/Main_ctr/emp6"><i class="ft-users"></i><span class="menu-title" data-i18n="Calendar">الموظفون </span></a></li>';

                     echo '<li class=" nav-item"><a href="http://127.0.0.1/team_prog/Main_ctr/search"><i class="ft-search"></i><span class="menu-title" data-i18n="Components">البحث</span></a><ul class="menu-content" style=""><li class=""><a href="http://127.0.0.1/team_prog/Main_ctr/search"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Leaflet Maps">بحث الموظفين </span></a></li></ul><ul class="menu-content" style=""><li class=""><a  href="http://127.0.0.1/team_prog/Main_ctr/search_HOLIDAY"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Leaflet Maps">بحث في اجازات الموظفين </span></a></li></ul> <ul class="menu-content" style=""><li class=""><a href="http://127.0.0.1/team_prog/Main_ctr/search_OUTTIME"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Leaflet Maps">بحث في ادونات الموظفين </span></a></li></ul><ul class="menu-content" style=""><li class=""><a href="http://127.0.0.1/team_prog/Main_ctr/search_TASK"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Leaflet Maps">بخث في المهام</span></a></li></ul><ul class="menu-content" style=""><li class=""><a href="http://127.0.0.1/team_prog/Main_ctr/search_REWARDS"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Leaflet Maps">بحث في  المكافئات </span></a> </li></ul><ul class="menu-content" style=""><li class=""><a href="http://127.0.0.1/team_prog/Main_ctr/search_TIMEEMPE"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Leaflet Maps">بحث في  الحضور </span></a></li></ul> </li>';
                     echo '<li class=" nav-item"><a  href="http://127.0.0.1/team_prog/Main_ctr/emp2"><i class="ft-slack"></i><span class="menu-title" data-i18n="Forms"> مجريات الشركة</span></a></li>';
                     echo '<li class=" nav-item"><a  href="http://127.0.0.1/team_prog/Main_ctr/emp3"><i class="icon-layers"></i><span class="menu-title" data-i18n="Tables">اضافة مجريات الشركة</span></a> </li>';
                     echo '<li class=" nav-item"><a  href="http://127.0.0.1/team_prog/Main_ctr/emp_reward"><i class="ft-award"></i><span class="menu-title" data-i18n="Data Tables"> المكافئات</span></a></li>';

                     echo ' <li class=" nav-item"><a  href="http://127.0.0.1/team_prog/Main_ctr/emp_active"><i class="ft-users"></i><span class="menu-title" data-i18n="Data Tables">   المستخدمين </span></a></li>';
                     echo '<li class=" nav-item"><a href="http://127.0.0.1/team_prog/Main_ctr/emp7"><i class="ft-settings"></i><span class="menu-title" data-i18n="UI Kit">   الاعدادات </span></a></li>';

                 }
                 ?>



                        <input type="hidden" id="CARDID111" value="<?php $name = $this->session->userdata('CARDID'); echo $name; ?>">

                        <input type="hidden" id="SECTION" value="<?php $name = $this->session->userdata('SECION'); echo $name; ?>">
<!--         <li class=" nav-item"><a href="--><?php //echo base_url().'Main_ctr/emp51'?><!--"><i class="icon-list"></i><span class="menu-title" data-i18n="Email">المهام</span></a>-->
<!--                        </li>-->
<!--                        <li class=" nav-item"><a href="--><?php //echo base_url().'Main_ctr/emp4'?><!--"><i class="ft-watch"></i><span class="menu-title" data-i18n="Chat">سجل الحضور</span></a>-->
<!--                        </li>-->
<!--                        </li>-->
<!--                        <li class=" nav-item"><a href="--><?php //echo base_url().'Main_ctr/empa'?><!--"><i class="ft-clipboard"></i><span class="menu-title" data-i18n="Chat"> متابعة الموظفين</span></a>-->
<!--                        </li>-->
<!--                        <li class=" nav-item"><a href="--><?php //echo base_url().'Main_ctr/tasks_emp'?><!--"><i class="icon-list"></i><span class="menu-title" data-i18n="Chat"> المهام</span><span id="alltaskscard" class="tag badge badge-pill badge-warning float-right mr-1 mt-1">6</span></a>-->
<!--                        </li>-->
<!--                        <li class=" nav-item"><a href="--><?php //echo base_url().'Main_ctr/emp1'?><!--"><i class="ft-user-plus"></i><span class="menu-title" data-i18n="Task Board">موظف جديد </span></a>-->
<!--                        </li>-->
<!--                        <li class=" nav-item"><a href="--><?php //echo base_url().'Main_ctr/emp6'?><!--"><i class="ft-users"></i><span class="menu-title" data-i18n="Calendar">الموظفون </span></a>-->
<!--                        </li>-->
<!--                        <li class=" nav-item"><a href="--><?php //echo base_url().'Main_ctr/emp7'?><!--"><i class="ft-settings"></i><span class="menu-title" data-i18n="UI Kit">   الاعدادات </span></a>-->
<!---->
<!--                        </li>-->
<!--                        <li class=" nav-item"><a href="--><?php //echo base_url().'Main_ctr/search'?><!--"><i class="ft-search"></i><span class="menu-title" data-i18n="Components">البحث</span></a>-->
<!--                            <ul class="menu-content" style="">-->
<!--                                <li class=""><a href="--><?php //echo base_url().'Main_ctr/search'?><!--"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Leaflet Maps">بحث الموظفين </span></a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <ul class="menu-content" style="">-->
<!--                                <li class=""><a  href="--><?php //echo base_url().'Main_ctr/search_HOLIDAY'?><!--"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Leaflet Maps">بحث في اجازات الموظفين </span></a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <ul class="menu-content" style="">-->
<!--                                <li class=""><a href="--><?php //echo base_url().'Main_ctr/search_OUTTIME'?><!--"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Leaflet Maps">بحث في ادونات الموظفين </span></a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <ul class="menu-content" style="">-->
<!--                                <li class=""><a href="--><?php //echo base_url().'Main_ctr/search_TASK'?><!--"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Leaflet Maps">بخث في المهام</span></a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <ul class="menu-content" style="">-->
<!--                                <li class=""><a href="--><?php //echo base_url().'Main_ctr/search_REWARDS'?><!--"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Leaflet Maps">بحث في  المكافئات </span></a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <ul class="menu-content" style="">-->
<!--                                <li class=""><a href="--><?php //echo base_url().'Main_ctr/search_TIMEEMPE'?><!--"><i class="ft-arrow-right submenu-icon"></i><span class="menu-item" data-i18n="Leaflet Maps">بحث في  الحضور </span></a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class=" nav-item"><a href="--><?php //echo base_url().'Main_ctr/emp2'?><!--"><i class="ft-slack"></i><span class="menu-title" data-i18n="Forms"> مجريات الشركة</span></a>-->
<!---->
<!--                        </li>-->
<!--                        <li class=" nav-item"><a href="--><?php //echo base_url().'Main_ctr/empcompany'?><!--"><i class="ft-slack"></i><span class="menu-title" data-i18n="Forms">مجريات الشركة</span></a>-->
<!---->
<!--                        </li>-->
<!--                        <li class=" nav-item"><a href="--><?php //echo base_url().'Main_ctr/emp3'?><!--"><i class="icon-layers"></i><span class="menu-title" data-i18n="Tables">اضافة مجريات الشركة</span></a>-->
<!---->
<!--                        </li>-->
<!--                        <li class=" nav-item"><a href="--><?php //echo base_url().'Main_ctr/emp62'?><!--"><i class="ft-award"></i><span class="menu-title" data-i18n="Data Tables"> المكافئات</span></a>-->
<!---->
<!--                        </li>-->
<!---->
<!--                        <li class=" nav-item"><a href="--><?php //echo base_url().'Main_ctr/emp_reward'?><!--"><i class="ft-award"></i><span class="menu-title" data-i18n="Data Tables">  المكافئات</span></a>-->
<!---->
<!--                           </li>-->
<!---->
<!---->
<!--                        <li class=" nav-item"><a href="--><?php //echo base_url().'Main_ctr/emp31'?><!--"><i class="ft-minus-square"></i><span class="menu-title" data-i18n="Data Tables"> الاجازات </span></a>-->
<!---->
<!--                           </li>-->
<!---->
<!--                           <li class=" nav-item"><a href="--><?php //echo base_url().'boss_ctr/furlough'?><!--"><i class="ft-minus-square"></i><span class="menu-title" data-i18n="Data Tables">   الاجازات </span><span id="qq11" class="tag badge badge-pill badge-warning float-right mr-1 mt-1">6</span></a>-->
<!---->
<!--                           </li>-->
<!---->
<!---->
<!--                           <li class=" nav-item"><a href="--><?php //echo base_url().'Main_ctr/emp_outim'?><!--"><i class="ft-clock"></i><span class="menu-title" data-i18n="Data Tables"> الاذونات </span></a>-->
<!---->
<!--                           </li>-->
<!---->
<!--                           <li class=" nav-item"><a href="--><?php //echo base_url().'Main_ctr/emp_outtime'?><!--"><i class="ft-clock"></i><span class="menu-title" data-i18n="Data Tables">   الاذونات </span><span id="countout0" class="tag badge badge-pill badge-warning float-right mr-1 mt-1">6</span></a>-->
<!---->
<!--                           </li>-->
<!--                        <li class=" nav-item"><a href="--><?php //echo base_url().'Main_ctr/emp_active'?><!--"><i class="ft-users"></i><span class="menu-title" data-i18n="Data Tables">   المستخدمين </span></a>-->
<!---->
<!--                        </li>-->


                    </ul>
                </div>
            </div>
            <!-- main menu content-->
            <div class="sidebar-background"></div>
            <!-- main menu footer-->
            <!-- include includes/menu-footer-->
            <!-- main menu footer-->
            <!-- / main menu-->