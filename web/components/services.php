<?php
$services=[
    array('title'=>'Calibration Services','description'=>'Accredited and Traceable to ensure measurement comparability.','icon'=>'calibration.png'),
    array('title'=>'Inspection, Testing & Calibration Services','description'=>'Accredited and Traceable to ensure measurement comparability.','icon'=>'inspection.png'),
    array('title'=>'Metrology Consultancy & Training','description'=>'Prepare you to meet international standards and maintain in-house capability for calibration.','icon'=>'training.png'),
    array('title'=>'QMS Consultancy','description'=>'Prepare you to meet international standards and maintain in-house capability for calibration.','icon'=>'training.png'),
    array('title'=>'Electrical Appliance Safety Testing Services','description'=>'Ensure electrical safety from electrical appliances and reliability of medical diagnostics.','icon'=>'calibration.png'),
    array('title'=>'Bio Medical Equipment Calibration, Inspection & Testing Services','description'=>'','icon'=>'calibration.png'),
    array('title'=>'Lifting Equipment Inspection Services','description'=>'Accredited and Traceable to ensure measurement comparability.','icon'=>'lifting.png'),
    array('title'=>'Non-Destructive Inspection Services','description'=>'Avoid costly failures and industrial accidents.','icon'=>'calibration.png'),
    array('title'=>'Storage Tanks Calibration Services','description'=>'Accredited and Traceable to ensure measurement comparability.','icon'=>'tank.png'),
    array('title'=>'Cathodic Protection System Installation and Servicing','description'=>'Increase service life of you buried assets.','icon'=>'electrolysis.png'),
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
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
