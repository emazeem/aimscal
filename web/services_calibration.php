<?php include('layout/master1.php') ?>
<div class="main-banner" id="top">
    </div>
    <?php
    $services = [
        [
            'title' => 'MASS VOLUME FORCE AND TORQUE MEASUREMENT',
            'img'   => 'services/mass-volume.png',
            'points' => [
                'Analogue and Digital Weighing Scales. Volumetric Glass wares and provers spring scale Dynamometers and Force Gauges Class M weight sets.',
                'Compressive and Tensile Force machines',
                'Tongue Gauges and Weight Indicators.',
                'Proving Rings and Load Cells. Torque screw drivers and wrenches.',
                'Static and Dynamic Torque transducers.',
                'Hydraulic and Motorized Torque Tools',
            ],
        ],
        [
            'title' => 'DIMENSIONAL MEASUREMENT',
            'img'   => 'services/dimensional.png',
            'points' => [
                'Steel Rules and Meter Tapes',
                'Vernier Caliper, height and depth gauges.',
                'Hi LO welding and bridge cam gauges.',
                'Micrometer inside outside and depth',
                'Dial indicators.',
                'MRP grove depth and pitch gauges.',
                'Flange Square and Bevel Protectors',
                'Angle measuring devices.',
                'Sprit levels and surface tables.',
                'Coatingthickness and Ultrasonic thickness gauges.',
            ],
        ],
        [
            'title' => 'ANALYTICAL INSPECTION AND DIAGNOSTIC TOOLS AND EQUIPMENT',
            'img'   => 'services/analytical-inspection.png',
            'points' => [
                'pH, conductivity and turbidity meters',
                'Viscosity and specific Gravity Meters',
                'Visible and IR spectrophotometers',
                'Hardness testers.',
                'Ultrasonic flaw detector machines.',
                'Magnetic field indicators and gauss gauges.',
                'visible and u v light meters.',
                'Portable and fixed gas detectors',
            ],
        ],
        [
            'title' => 'PRESSURE MEASUREMENT',
            'img'   => 'services/pressure.png',
            'points' => [
                'All types and sizes of pressure gauges, indicator, transducers and transmitters.',
                'Analogue and Digital barometers/manometer',
                'Pneumatic PI,IP convertors and pneumatic transmitters.',
                'Pressure Switches',
                'Pressure Control valves',
                'Pressure Safety and Relieving devices.',
                'Hydro pressure testing.',
                'Pressure Chart Recorders.',
                'Pressure Calibrators.',
                'Dead weight testers and Piston Gauges',
            ],
        ],
        [
            'title' => 'TEMPERATURE AND HUMIDITY MEASUREMENT',
            'img'   => 'services/temperature.png',
            'points' => [
                'Bimetal and filled system thermometers.',
                'Liquid in Glass thermometers',
                'Digital thermometer with( TC and RTD sensors',
                'Temperature Controller and Switches',
                'Infrared thermometers and thermal imagers. Electric Ovens. incubators is and hot cabinets.',
                'Temperature baths and Dry Block Calibrators',
                'Thermo-hygrometers and data loggers.',
                'Dew point meters.',
            ],
        ],
        [
            'title' => 'ELECTRICAL TIME AND FREQUENCY',
            'img'   => 'services/electrical.png',
            'points' => [
                'Analogue/ Digital volt, ohm and multimeters',
                'clamp meters and energy meters.',
                'Decade Resistance. Capacitance and inductances',
                'Insulation meters and earth resistance testers',
                'Appliance and Installation Testers',
                'Transformer and Switchgear Test Equipment',
                'Hipot and Dielectric Test Set. Current and Voltage Injection Sources.',
            ],
        ],
        [
            'title' => 'OTHER SERVICES',
            'img'   => 'services/other.png',
            'points' => [
                'Metrology and QMS Consultancy from Decision to Implementation and Operation.',
                'Helping the organization to find a path in the QMS system through internal audits.',
                'Metrology and OMS training classes.',
                'Supply, installation, commissioning, and on-site testing and calibration of field instrumentation.',
                'Deployment of teams with equipment on EPC project sites.',
            ],
        ]
    ];
    ?>
        <div class="section events" id="events">
            <div class="container">
                <?php foreach($services as $k=>$service){ ?>
                    <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-heading">
                            <?php if($k==0){ ?>
                            <h6>We offer calibrations services in following measurement parameters:</h6>
                            <?php } ?>
                            <h4 class="mt-2"><?php echo  $service['title']?></h4>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6">
                        <div class="item bg-light">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="image ">
                                        <img  src="public/<?php echo $service['img']?>" alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <ul>
                                        <?php foreach($service['points'] as $li){ ?>
                                            <li>► <?php echo  $li;?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
<?php include('layout/master2.php') ?>
