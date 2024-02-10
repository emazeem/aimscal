<?php
$services = [
    array('title' => 'Calibration Services', 'icon' => 'calibration.png', 'url' => 'services_calibration.php'),
    array('title' => 'Inspection, Testing & Calibration Services', 'icon' => 'inspection.png', 'url' => 'services_calibration.php'),
    array('title' => 'Metrology Consultancy & Training', 'icon' => 'training.png', 'url' => 'services_metrology_consultancy.php'),
    array('title' => 'QMS Consultancy', 'icon' => 'training.png', 'url' => 'services_qms_consultancy.php'),
    array('title' => 'Electrical Appliance Safety Testing Services', 'icon' => 'calibration.png', 'url' => 'services_e-and-i.php'),
    array('title' => 'Bio Medical Equipment Calibration, Inspection & Testing Services', 'icon' => 'calibration.png', 'url' => '#'),
    array('title' => 'Lifting Equipment Inspection Services', 'icon' => 'lifting.png', 'url' => '#'),
    array('title' => 'Non-Destructive Inspection Services', 'icon' => 'calibration.png', 'url' => '#'),
    array('title' => 'Storage Tanks Calibration Services', 'icon' => 'tank.png', 'url' => '#'),
    array('title' => 'Cathodic Protection System Installation and Servicing', 'icon' => 'electrolysis.png', 'url' => '#'),
];
?>
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="index.php" class="logo">
                        <img src="/public/assets/images/AIMS.png" style="width: 70px;margin-top:-10px"  alt="">
                    </a>
                    <ul class="nav">
                        <li class="scroll-to-section"><a class="{{Route::currentRouteName()=='home'?'active':''}}" href="index.php">Home</a></li>
                        <li class="">
                            <a class="{{Route::currentRouteName()==''?'active':''}} " href="#" id="servicesDropdown" >Services <i class="fa fa-angle-down" style="font-size: 10px"></i></a>
                            <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                                <?php foreach($services as $service) {?>
                                    <a class="dropdown-item" href="<?php echo $service['url'] ; ?>"><?php echo $service['title'] ?></a>
                                <?php } ?>
                            </div>
                        </li>
                        <li class="scroll-to-section"><a class="" href="our_team.php">Team</a></li>
                        <li class="scroll-to-section"><a class="" href="about_us.php">About Us</a></li>
                        <li class="scroll-to-section"><a class="" href='contact_us.php'>Contact Us</a></li>
                        <li class="scroll-to-section"><a class="" href='equipmental_rental.php'>Sale and Rental of Testing Equipment</a></li>
                        <li class="scroll-to-section main-button"><a class="" href="generate-requests.php">Request a Quote</a></li>
                    </ul>
                    <a class="menu-trigger">
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
