<?php
$services = [
    array('title' => 'MultiMeter', 'make'=> 'Mettler','model' => 'AIMS-121', 'icon' => 'calibration.png', 'salePrice' => 'Rs 10,000', 'url' => 'services_calibration.php'),
    array('title' => 'HPLC', 'make'=> 'Mettler','model' => 'AIMS-121', 'icon' => 'inspection.png', 'salePrice' => 'Rs 10,000', 'url' => 'services_calibration.php'),
    array('title' => 'Spectrophotometer', 'make'=> 'Mettler','model' => 'AIMS-121', 'icon' => 'training.png', 'salePrice' => 'Rs 10,000', 'url' => 'services_metrology_consultancy.php'),
    array('title' => 'pH Solution', 'make'=> 'Mettler','model' => 'AIMS-121', 'icon' => 'training.png', 'salePrice' => 'Rs 10,000', 'url' => 'services_qms_consultancy.php'),
    array('title' => 'Stop Watch', 'make'=> 'Mettler','model' => 'AIMS-121', 'icon' => 'calibration.png', 'salePrice' => 'Rs 10,000', 'url' => 'services_e-and-i.php'),
    array('title' => 'Lux Meter', 'make'=> 'Mettler','model' => 'AIMS-121', 'icon' => 'electrolysis.png', 'salePrice' => 'Rs 10,000', 'url' => '#'),
];

?>
<div class="services section" id="services">
    <div class="container">
        <div class="row">
          <?php foreach($services as $service){ ?>
                <div class="col-lg-3 col-md-6 ">
                    <div class=main-content>
                    <div class="card mb-5" style="width: 17rem;">
                    <div class="icon">
                            <img src="public/icons/<?php echo $service['icon'] ?>" alt="online degrees" />
                        </div>
                        <div class="card-body">
                        <h5><?php echo $service['title'] ?></h5>
                            <p><strong>Make: </strong><?php echo $service['make'] ?></p>
                            <p><strong>Model: </strong><?php echo $service['model'] ?></p>
                            <p><strong>Sale Price: </strong><?php echo $service['salePrice'] ?></p>
                            <div class="main-button">
                                <a href="<?php echo $service['url'] ?>">Read More</a>
                            </div>
                        </div>
                    </div>
          </div>
                </div>
            <?php } ?>
        </div>
        </div>
    </div>
</div>
