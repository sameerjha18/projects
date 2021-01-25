<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="<?php echo base_url().'app-assets/font/iconsmind-s/css/iconsminds.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'app-assets/font/simple-line-icons/css/simple-line-icons.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'app-assets/css/vendor/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'app-assets/css/vendor/bootstrap.rtl.only.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'app-assets/css/vendor/bootstrap-float-label.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'app-assets/css/main.css'?>">

    <?php
    if( $this->session->userdata('userid')!='')
    {
        ?>
        <link rel="stylesheet" href="<?php echo base_url().'app-assets/css/vendor/fullcalendar.min.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'app-assets/css/vendor/dataTables.bootstrap4.min.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'app-assets/css/vendor/datatables.responsive.bootstrap4.min.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'app-assets/css/vendor/select2.min.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'app-assets/css/vendor/select2-bootstrap.min.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'app-assets/css/vendor/perfect-scrollbar.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'app-assets/css/vendor/glide.core.min.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'app-assets/css/vendor/bootstrap-stars.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'app-assets/css/vendor/nouislider.min.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'app-assets/css/vendor/bootstrap-datepicker3.min.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'app-assets/css/vendor/component-custom-switch.min.css'?>">
    <?php }
    ?>
    <script>
        var base_url = '<?php echo base_url(); ?>';
    </script>
    <script src="<?php echo base_url().'app-assets/js/vendor/jquery-3.3.1.min.js'?>"></script>
</head>
<?php
if( $this->session->userdata('userid')!='')
{

$menu = $this->uri->segment(1);
$function = $this->uri->segment(2);
$staff_roles = explode(',',$this->session->userdata('staffRole'));

?>
<body id="app-container" class="menu-default show-spinner">
<nav class="navbar fixed-top">
    <div class="d-flex align-items-center navbar-left">
        <a href="#" class="menu-button d-none d-md-block">
            <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                <rect x="0.48" y="0.5" width="7" height="1" />
                <rect x="0.48" y="7.5" width="7" height="1" />
                <rect x="0.48" y="15.5" width="7" height="1" />
            </svg>
            <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                <rect x="1.56" y="0.5" width="16" height="1" />
                <rect x="1.56" y="7.5" width="16" height="1" />
                <rect x="1.56" y="15.5" width="16" height="1" />
            </svg>
        </a>
        <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                <rect x="0.5" y="0.5" width="25" height="1" />
                <rect x="0.5" y="7.5" width="25" height="1" />
                <rect x="0.5" y="15.5" width="25" height="1" />
            </svg>
        </a>
    </div><span class="logo d-none d-xs-block"></span> <span class="logo-mobile d-block d-xs-none"></span>
    <div class="navbar-right">
        <div class="user d-inline-block">
            <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="name"><?php echo $this->session->userdata('staffName'); ?></span>  <span><img alt="Profile Picture" src="<?php echo base_url().'app-assets/img/profiles/l-1.jpg'?>"></span>
            </button>
            <div class="dropdown-menu dropdown-menu-right mt-3">
                <a class="dropdown-item" href="<?php echo base_url().'stafflogin/logout';?>">Sign out</a>
            </div>
        </div>
    </div>
</nav>
<div class="menu">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <li <?php if($function == 'dashboard'): ?> class= "active"<?php endif;?>><a href="<?php echo base_url().'stafflogin/dashboard';?>"><i class="iconsminds-shop-4"></i> <span>Dashboard</span></a>
                </li>
                <li><a href="#management"><i class="iconsminds-digital-drawing"></i> Management</a>
                </li>
                
                <!-- <li><a href="<?php echo base_url().'client';?>"><i class="iconsminds-user"></i>Clients</a>
                </li> -->
                <li><a href="#inquiry"><i class="iconsminds-pantone"></i>Inquiry</a>
                </li>
                <li><a href="#support"><i class="iconsminds-support"></i>Support</a>
                </li>
                <li><a href="#reports"><i class="iconsminds-three-arrow-fork"></i>Reports</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sub-menu">
        <div class="scroll">
            <ul class="list-unstyled"data-link="management" id="management">
                <!-- <?php if(in_array('2',$staff_roles)): ?>
                    <li class= "<?php if ($function =='services'): {?>active<?php } ?> <?php endif; ?>" >
                        <a href="<?php echo base_url().'services';?>"><i class="simple-icon-book-open"></i> <span class="d-inline-block">Services</span></a>
                    </li>
                <?php endif;?> -->
                <?php if(in_array('3',$staff_roles)): ?>
                    <li class= "<?php if ($function =='staff'): {?>active<?php } ?> <?php endif; ?>" >
                        <a href="<?php echo base_url().'staff';?>"><i class="simple-icon-book-open"></i> <span class="d-inline-block">Staff</span></a>
                    </li>
                <?php endif;?>
                <!-- <?php if(in_array('4',$staff_roles)): ?>
                    <li class= "<?php if ($function =='vendor'): {?>active<?php } ?> <?php endif; ?>" >
                        <a href="<?php echo base_url().'vendor';?>"><i class="simple-icon-book-open"></i> <span class="d-inline-block">Vendor</span></a>
                    </li>
                <?php endif;?> -->
                <!-- <?php if(in_array('5',$staff_roles)): ?>
                    <li class= "<?php if ($function =='employee'): {?>active<?php } ?> <?php endif; ?>" >
                        <a href="<?php echo base_url().'employee';?>"><i class="simple-icon-book-open"></i> <span class="d-inline-block">Employee</span></a>
                    </li>
                <?php endif;?> -->
            </ul>

            <ul class="list-unstyled" data-link="clients">     
            </ul>
            <ul class="list-unstyled" data-link="reports">
                <li>
                    <a href="">
                        <i class="simple-icon-calculator"></i>
                        <span class="d-inline-block">Business Bills</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="simple-icon-calculator"></i>
                        <span class="d-inline-block">Corperate Bills</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="simple-icon-calculator"></i>
                        <span class="d-inline-block">Misscelenous Bills</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="simple-icon-printer"></i>
                        <span class="d-inline-block">Corperate Cards</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="simple-icon-printer"></i>
                        <span class="d-inline-block">Business Owner Cards</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="simple-icon-printer"></i>
                        <span class="d-inline-block">Misscelenous Cards</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php

$this->load->view($module."/".$viewFile);
}
else
{
?>
<body class="background show-spinner no-footer">
<div class="fixed-background"></div>
<?php
$this->load->view($module."/".$viewFile);
}
?>
<script src="<?php echo base_url().'app-assets/js/vendor/bootstrap.bundle.min.js'?>"></script>
<script src="<?php echo base_url().'app-assets/js/dore.script.js'?>"></script>
<script src="<?php echo base_url().'app-assets/js/scripts.js'?>"></script>
<script src="<?php echo base_url().'app-assets/js/common.js'?>"></script>
<script src="<?php echo base_url().'app-assets/js/sha1.js'?>"></script>


<?php
if( $this->session->userdata('userid')!='')
{
    ?>
    <script src="<?php echo base_url().'app-assets/js/vendor/moment.min.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/fullcalendar.min.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/datatables.min.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/perfect-scrollbar.min.js';?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/glide.min.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/jquery.barrating.min.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/select2.full.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/nouislider.min.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/bootstrap-datepicker.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/Sortable.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/mousetrap.min.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/Chart.bundle.min.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/chartjs-plugin-datalabels.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/progressbar.min.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/jquery.validate/jquery.validate.min.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/jquery.validate/additional-methods.min.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/dataTables.buttons.min.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/jszip.min.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/pdfmake.min.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/vfs_fonts.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/buttons.html5.min.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/vendor/buttons.print.min.js'?>"></script>
    <script src="<?php echo base_url().'app-assets/js/admin/adminproject.js'?>"></script>
    <footer class="page-footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 text-muted">Drishya Solutions 2020</p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
<?php
}

else
{

?>
    <script src="<?php echo base_url().'app-assets/js/admin/stafflogin.js'?>"></script>
    <?php

}
?>

</body>

</html>