<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8"/>
    <title><?= APPLICATIONNAME?> | <?= $module;?> | <?= $submodule;?> | <?= $page;?></title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="<?= base_url();?>assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet"/>
    <link href="<?= base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?= base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="<?= base_url();?>assets/css/animate.min.css" rel="stylesheet"/>
    <link href="<?= base_url();?>assets/css/style.css" rel="stylesheet"/>
    <link href="<?= base_url();?>assets/css/style-responsive.css" rel="stylesheet"/>
    <link href="<?= base_url();?>assets/css/theme/default.css" rel="stylesheet" id="theme"/>
    <link href="<?= base_url();?>assets/css/essential.css" rel="stylesheet"/>
    <!-- ================== END BASE CSS STYLE ================== -->
    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="<?= base_url();?>assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
    <link href="<?= base_url();?>assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet"/>
    <!-- ================== END PAGE LEVEL STYLE ================== -->
    <link href="<?= base_url();?>assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet"/>
    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="<?= base_url();?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet"/>
    <link href="<?= base_url();?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet"/>
    <link href="<?= base_url();?>assets/plugins/password-indicator/css/password-indicator.css" rel="stylesheet"/>
    <link href="<?= base_url();?>assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet"/>
    <link href="<?= base_url();?>assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet"/>
    <!-- ================== END PAGE LEVEL STYLE ================== -->
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?= base_url();?>assets/plugins/pace/pace.min.js"></script>
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?= base_url();?>assets/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script src="<?= base_url();?>assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
    <script src="<?= base_url();?>assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="<?= base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="<?= base_url();?>assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet"/>
    <link href="<?= base_url();?>assets/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet"/>
    <link href="<?= base_url();?>assets/plugins/toastr/toastr.css" rel="stylesheet"/>
    <!-- ================== END PAGE LEVEL STYLE ================== -->
    <!--alerts CSS -->
    <link href="<?= base_url();?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    
    <link rel="stylesheet" href="<?= base_url();?>assets/plugins/jquery-confirm-master/jquery-confirm.min.css" />

    <!-- ================== END BASE JS ================== -->
</head>
<body>
<!-- begin #page-loader 
<div id="page-loader" class="fade in"><span class="spinner"></span></div>-->
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">
    <!-- begin #header -->
    <div id="header" class="header navbar navbar-default navbar-fixed-top">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <!-- begin mobile sidebar expand / collapse button -->
            <div class="navbar-header">
                <a href="<?= site_url("web-admin/home");?>" class="navbar-brand"><img src="<?= base_url();?>assets/img/icon.png" alt="logo"> <?= APPLICATIONNAME?></a>
                <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- end mobile sidebar expand / collapse button -->

            <!-- begin header navigation right -->
            <ul class="nav navbar-nav navbar-right hidden-xs">
                <li >
                    <a target="_blank" href="<?= base_url();?>" class="dropdown-toggle f-s-14"> <i class="fa fa-globe"></i> Website  </a>
                </li>
                <li class="dropdown navbar-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                       
                        <span class="hidden-xs"> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu animated fadeInLeft">
                        <li class="arrow"></li>
                        <li><a href="<?= site_url("web-admin/settings/updateprofile")?>"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="<?= site_url("web-admin/settings/changepassword")?>"><i class="fa fa-key"></i> Change Password</a></li>
                        <li class="divider"></li>
                        <li><a href="<?= site_url("web-admin/logout")?>" id="logout"><i class="fa fa-sign-out"></i> Sign Out</a></li>
                    </ul>
                </li>
            </ul>
            <!-- end header navigation right -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end #header -->

    <!-- begin #sidebar -->
    <div id="sidebar" class="sidebar sidebar-grid">
        <!-- begin sidebar scrollbar -->
        <div data-scrollbar="true" data-height="100%">
            <!-- begin sidebar user -->
            <ul class="nav">
                <li class="nav-profile">
                    <div class="image">
                        <a href="javascript:;">
                            
                        </a>
                    </div>
                    <div class="info">
                        
                        <small></small>
                    </div>
                </li>
            </ul>
            <!-- end sidebar user -->
            <!-- begin sidebar nav -->
            <ul class="nav">
                <li class="nav-header">Navigation</li>
                <li class="<?php if($this->uri->segment(2)=="home"){echo 'active';} ?>">
                    <a href="<?= site_url("web-admin/home")?>">
                        <i class="fa fa-laptop"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="has-sub <?php if($this->uri->segment(2)=="doctors"){echo 'active';} ?>">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-book"></i>
                        <span>Doctors</span>
                    </a>
                    <ul class="sub-menu">
                        <li class="<?php if($this->uri->segment(2)=="doctors" && ($this->uri->segment(3)=="" || $this->uri->segment(3)=="show")){echo "active";}?>"><a href="<?= site_url("masters/doctors");?>"> All</a></li>	
                        <li><a href="<?= site_url("masters/doctors/new");?>"> New</a></li>
                    </ul>
                </li>
                <li class="has-sub <?php if($this->uri->segment(2)=="patients"){echo 'active';} ?>">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-book"></i>
                        <span>Patient</span>
                    </a>
                    <ul class="sub-menu">
                        <li class="<?php if($this->uri->segment(2)=="patients" && ($this->uri->segment(3)=="" || $this->uri->segment(3)=="show")){echo "active";}?>"><a href="<?= site_url("masters/patients");?>"> All</a></li>	
                        <li><a href="<?= site_url("masters/patients/new");?>"> New</a></li>
                    </ul>
                </li>
                <li class="has-sub <?php if($this->uri->segment(2)=="patients"){echo 'active';} ?>">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-book"></i>
                        <span>Test settings</span>
                    </a>
                    <ul class="sub-menu">
                        <li class="<?php if($this->uri->segment(2)=="patients" && ($this->uri->segment(3)=="" || $this->uri->segment(3)=="show")){echo "active";}?>"><a href="<?= site_url("masters/patients");?>"> Tests</a></li>	
                        <li><a href="<?= site_url("masters/patients/new");?>"> Test Details</a></li>
                        <li><a href="<?= site_url("masters/patients/new");?>"> Test Category</a></li>
                        <li><a href="<?= site_url("masters/patients/new");?>"> Test Sub Category</a></li>
                        <li><a href="<?= site_url("masters/patients/new");?>"> Normal Values</a></li>
                    </ul>
                </li>
                <li class="has-sub <?php if($this->uri->segment(2)=="settings"){echo 'active menu-open';} ?>">
                    <a href="#">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-wrench"></i>
                        <span>Settings</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="<?= site_url("web-admin/settings/changepassword");?>"> Change Password</a></li>
                        <li><a href="<?= site_url("web-admin/settings/updateprofile");?>"> Profile</a></li>
                    </ul>
                </li> 
            </ul>
            <!-- end sidebar nav -->
        </div>
        <!-- end sidebar scrollbar -->
    </div>
    <div class="sidebar-bg"></div>
    <!-- end #sidebar -->
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="javascript:;"><?= $module;?></a></li>
            <li class="active"><?= $page;?></li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header"><?= $module;?>
            <small><?= $page;?></small>
        </h1>
        <!-- end page-header -->

        <div class="row">
            <div class="col-md-12">
                
    <?= $body;?>
    
      </div>
      </div>
      <!-- /.box -->
    <!-- /.content -->
  </div>

    <!-- begin theme-panel -->
    <div class="theme-panel">
        <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
        <div class="theme-panel-content">
            <h5 class="m-t-0">Color Theme</h5>
            <ul class="theme-list clearfix">
                <li class="active"><a href="javascript:;" class="bg-green" data-theme="default"
                                      data-click="theme-selector" data-toggle="tooltip" data-trigger="hover"
                                      data-container="body" data-title="Default">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a>
                </li>
                <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a>
                </li>
                <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a>
                </li>
                <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a>
                </li>
            </ul>
            <div class="divider"></div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label double-line">Header Styling</div>
                <div class="col-md-7">
                    <select name="header-styling" class="form-control input-sm">
                        <option value="1">default</option>
                        <option value="2">inverse</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label">Header</div>
                <div class="col-md-7">
                    <select name="header-fixed" class="form-control input-sm">
                        <option value="1">fixed</option>
                        <option value="2">default</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                <div class="col-md-7">
                    <select name="sidebar-styling" class="form-control input-sm">
                        <option value="1">default</option>
                        <option value="2">grid</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label">Sidebar</div>
                <div class="col-md-7">
                    <select name="sidebar-fixed" class="form-control input-sm">
                        <option value="1">fixed</option>
                        <option value="2">default</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                <div class="col-md-7">
                    <select name="content-gradient" class="form-control input-sm">
                        <option value="1">disabled</option>
                        <option value="2">enabled</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label double-line">Content Styling</div>
                <div class="col-md-7">
                    <select name="content-styling" class="form-control input-sm">
                        <option value="1">default</option>
                        <option value="2">black</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-12">
                    <a href="#" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage"><i
                            class="fa fa-refresh m-r-3"></i> Reset Local Storage</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end theme-panel -->

    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i
            class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
</div>
<!-- end page container -->

<!--[if lt IE 9]>
<script src="<?= base_url();?>assets/crossbrowserjs/html5shiv.js"></script>
<script src="<?= base_url();?>assets/crossbrowserjs/respond.min.js"></script>
<script src="<?= base_url();?>assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="<?= base_url();?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?= base_url();?>assets/plugins/jquery-cookie/jquery.cookie.js"></script>
<script src="<?= base_url();?>assets/plugins/jquery-cookie/js.cookie.js"></script>
<!-- ================== END BASE JS ================== -->
<script src="<?= base_url();?>assets/plugins/select2/dist/js/select2.min.js"></script>
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="<?= base_url();?>assets/plugins/gritter/js/jquery.gritter.js"></script>
<script src="<?= base_url();?>assets/plugins/bootstrap-sweetalert/sweetalert.min.js"></script>
<script src="<?= base_url();?>assets/plugins/toastr/toastr.min.js"></script>
<script src="<?= base_url();?>assets/plugins/jquery-confirm-master/jquery-confirm.min.js"></script>

<script src="<?= base_url();?>assets/js/app.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="<?= base_url();?>assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
<script src="<?= base_url();?>assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url();?>assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script src="<?= base_url();?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<script>
    $(document).ready(function () {
        App.init();
    });
    $(document).on("click","#logout",function(e){
        alert("you are about to logout.");
    });
    //each 30 30 seconds check login is there or not
    
</script>
<script type="text/javascript">
    // function validateauth(){
    //     $.ajax({
    //         url :"<?= site_url("web-admin/verifylogin/validatelogin")?>",
    //         type: "post",
    //         dataType: "JSON",
    //         success: function(dataa){
    //             if(dataa.status==1){}
    //             else{
    //                 $(location).attr('href', "<?= site_url("web-admin/verifylogin")?>");
    //             }
    //         }
    //     });
    // }
    // validateauth();
    // setInterval(function () {
    //     validateauth();
    // },30000);
    // setInterval();
</script>
<script src="<?= base_url();?>assets/app/common.js"></script>
<?php
if($scriptfiles!=''){
    ?><script src="<?= base_url();?>assets/app/<?=$scriptfiles;?>.js"></script><?php
}
?>

</body>

</html>