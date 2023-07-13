<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <?php $menu = array(
                    'line'=>'Menu',
                    'Dasboard'=>['url'=>'index.php/Administrator/index','bell'=>'9+','icon'=>'dripicons-meter'],
                    'Email'=>['icon'=>'dripicons-mail','sub'=>[['url'=>'index.php/Administrator/inbox','bell'=>'+5','name'=>'Inbox'],['url'=>'index.php/Administrator/emailRead','name'=>'Email Read']]]
                ); ?>

                <?php foreach($menu as $key=>$element){ 
                    if($key == 'line') { ?>
                        <li class="menu-title"><?php echo isset($element) ? $element : '' ?></li>
                    <?php } else { ?>
                        <li>
                            <a href="<?php echo isset($element['url'])? $element['url']:'#'?>" class="waves-effect"> <?php if(isset($element['icon'])) { ?> <i class="<?php echo $element['icon']?>"></i> <?php } ?> <span> <?php echo $key ?> <?php if(isset($element['sub'])) { ?> <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> <?php } ?> </span></a>
                            <?php if(isset($element['sub'])){ ?>
                                <ul class="submenu">
                                    <?php foreach($element['sub'] as $sub) { ?>
                                        <li><a href="<?php echo isset($sub['url']) ? $sub['url'] : '' ?>"><?php echo isset($sub['name']) ? $sub['name']:''?><?php if(isset($sub['bell'])) { ?> <span class="badge badge-info badge-pill float-right"><?php $sub['bell'] ?></span><?php } ?></a></li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>
                <?php }} ?>
                <li class="menu-title">Menu</li>
                <li>
                    <a href="<?php echo base_url('index.php/Administrator/index') ?>" class="waves-effect">
                        <i class="dripicons-meter"></i><span class="badge badge-info badge-pill float-right">9+</span> <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-mail"></i><span> Email <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url('index.php/Administrator/inbox') ?>">Inbox</a></li>
                        <li><a href="<?php echo base_url('index.php/Administrator/emailRead') ?>">Email Read</a></li>
                        <li><a href="<?php echo base_url('index.php/Administrator/emailCompose') ?>">Email Compose</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Administrator/calendar') ?>" class="waves-effect"><i class="dripicons-calendar"></i><span> Calendar </span></a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-to-do"></i><span> Pages <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url('index.php/Administrator/pricing') ?>">Pricing</a></li>
                        <li><a href="<?php echo base_url('index.php/Administrator/invoice') ?>">Invoice</a></li>
                        <li><a href="<?php echo base_url('index.php/Administrator/timeLine') ?>">Timeline</a></li>
                        <li><a href="<?php echo base_url('index.php/Administrator/faqs') ?>">FAQs</a></li>
                        <li><a href="<?php echo base_url('index.php/Administrator/maintenance') ?>">Maintenance</a></li>
                        <li><a href="<?php echo base_url('index.php/Administrator/commingSoon') ?>">Coming Soon</a></li>
                        <li><a href="<?php echo base_url('index.php/Administrator/login') ?>">Login</a></li>
                        <li><a href="<?php echo base_url('index.php/Administrator/register') ?>">Register</a></li>
                        <li><a href="<?php echo base_url('index.php/Administrator/recoveryPassword') ?>">Recover Password</a></li>
                        <li><a href="<?php echo base_url('index.php/Administrator/lockScreen') ?>">Lock Screen</a></li>
                        <li><a href="<?php echo base_url('index.php/Administrator/error404')?>">Error 404</a></li>
                        <li><a href="<?php echo base_url('index.php/Administrator/error500')?>">Error 500</a></li>
                    </ul>
                </li>
                <li class="menu-title">Components</li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> UI Elements <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url('index.php/Administrator/uiAlerts')?>">Alerts</a></li>
                        <li><a href="ui-badge.html">Badge</a></li>
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                        <li><a href="ui-navs.html">Navs</a></li>
                        <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                        <li><a href="ui-images.html">Images</a></li>
                        <li><a href="ui-progressbars.html">Progress Bars</a></li>
                        <li><a href="ui-pagination.html">Pagination</a></li>
                        <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                        <li><a href="ui-spinner.html">Spinner</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                        <li><a href="ui-video.html">Video</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-grid.html">Grid</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-broadcast"></i> <span> Advanced UI <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                    <ul class="submenu">
                        <li><a href="advanced-alertify.html">Alertify</a></li>
                        <li><a href="advanced-rating.html">Rating</a></li>
                        <li><a href="advanced-nestable.html">Nestable</a></li>
                        <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                        <li><a href="advanced-sweet-alert.html">Sweet-Alert</a></li>
                        <li><a href="advanced-lightbox.html">Lightbox</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i><span> Forms <span class="badge badge-pill badge-danger float-right">8</span> </span></a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url('index.php/Administrator/formElements')?>">Form Elements</a></li>
                        <li><a href="<?php echo base_url('index.php/Administrator/formValidator')?>">Form Validation</a></li>
                        <li><a href="<?php echo base_url('index.php/Administrator/formAdvenced')?>">Form Advanced</a></li>
                        <li><a href="<?php echo base_url('index.php/Administrator/formEditors')?>">Form Editors</a></li>
                        <li><a href="<?php echo base_url('index.php/Administrator/formFileUpload')?>">Form File Upload</a></li>
                        <li><a href="<?php echo base_url('index.php/Administrator/formMask')?>">Form Mask</a></li>
                        <li><a href="<?php echo base_url('index.php/Administrator/formXEditTable')?>">Form Xeditable</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-graph-bar"></i><span> Charts <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="charts-morris.html">Morris Chart</a></li>
                        <li><a href="charts-chartist.html">Chartist Chart</a></li>
                        <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                        <li><a href="charts-flot.html">Flot Chart</a></li>
                        <li><a href="charts-c3.html">C3 Chart</a></li>
                        <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-list"></i><span> Tables <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="tables-basic.html">Basic Tables</a></li>
                        <li><a href="tables-datatable.html">Data Table</a></li>
                        <li><a href="tables-responsive.html">Responsive Table</a></li>
                        <li><a href="tables-editable.html">Editable Table</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-brightness-max"></i> <span> Icons  <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span> </a>
                    <ul class="submenu">
                        <li><a href="icons-material.html">Material Design</a></li>
                        <li><a href="icons-ion.html">Ion Icons</a></li>
                        <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                        <li><a href="icons-themify.html">Themify Icons</a></li>
                        <li><a href="icons-dripicons.html">Dripicons</a></li>
                        <li><a href="icons-typicons.html">Typicons Icons</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-location"></i><span> Maps <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="maps-google.html"> Google Map</a></li>
                        <li><a href="maps-vector.html"> Vector Map</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-link"></i><span> Multi Level <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="javascript:void(0);"> Menu 1</a></li>
                        <li>
                            <a href="javascript:void(0);">Menu 2  <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="submenu">
                                <li><a href="javascript:void(0);">Menu 2.1</a></li>
                                <li><a href="javascript:void(0);">Menu 2.1</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->