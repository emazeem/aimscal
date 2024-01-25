<?php
$services = [
    array('title' => 'Calibration Services', 'description' => 'Accredited and Traceable to ensure measurement comparability.', 'icon' => 'calibration.png', 'url' => 'services_calibration.php'),
    array('title' => 'Inspection, Testing & Calibration Services', 'description' => 'Accredited and Traceable to ensure measurement comparability.', 'icon' => 'inspection.png', 'url' => 'services_calibration.php'),
    array('title' => 'Metrology Consultancy & Training', 'description' => 'Prepare you to meet international standards and maintain in-house capability for calibration.', 'icon' => 'training.png', 'url' => 'services_metrology_consultancy.php'),
    array('title' => 'QMS Consultancy', 'description' => 'Prepare you to meet international standards and maintain in-house capability for calibration.', 'icon' => 'training.png', 'url' => 'services_qms_consultancy.php'),
    array('title' => 'Electrical Appliance Safety Testing Services', 'description' => 'Ensure electrical safety from electrical appliances and reliability of medical diagnostics.', 'icon' => 'calibration.png', 'url' => 'services_e-and-i.php'),
    array('title' => 'Bio Medical Equipment Calibration, Inspection & Testing Services', 'description' => '', 'icon' => 'calibration.png', 'url' => '#'),
    array('title' => 'Lifting Equipment Inspection Services', 'description' => 'Accredited and Traceable to ensure measurement comparability.', 'icon' => 'lifting.png', 'url' => '#'),
    array('title' => 'Non-Destructive Inspection Services', 'description' => 'Avoid costly failures and industrial accidents.', 'icon' => 'calibration.png', 'url' => '#'),
    array('title' => 'Storage Tanks Calibration Services', 'description' => 'Accredited and Traceable to ensure measurement comparability.', 'icon' => 'tank.png', 'url' => '#'),
    array('title' => 'Cathodic Protection System Installation and Servicing', 'description' => 'Increase service life of your buried assets.', 'icon' => 'electrolysis.png', 'url' => '#'),
];

?>
<div class="services section" id="services">
    <div class="container">
        <div class="row">
            <?php foreach($services as $service){ ?>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="public/icons/<?php echo $service['icon'] ?>" alt="online degrees" />
                        </div>
                        <div class="main-content">
                            <h4><?php echo $service['title'] ?></h4>
                            <p><?php echo $service['description'] ?></p>
                            <div class="main-button">
                                <a href="<?php echo $service['url'] ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
