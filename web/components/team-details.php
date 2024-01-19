<?php
$teams= [
    array('name'=>'Imtiaz Ahmed','image'=>'CEO.jpeg','designation'=>'Chief Executive Officer'),
    array('name'=>'Shahzad Ahmed','image'=>'GM.jpeg','designation'=>'General Manager'),
    array('name'=>'Riaz Ahmed','image'=>'TM.jpeg','designation'=>'Technical Manager'),
];
?>
<div class="team section" id="team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                    <h2>Our Team</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 100px">
            <?php foreach($teams as $team) {?>
                <?php if($team['name']!='Riaz Ahmed') {?>

                    <div class="row" style="margin-bottom: 200px">
                        <div class="col-md-4 ">
                            <div class="team-member">
                                <div class="main-content">
                                    <img src="../public/images/<?php echo  $team['image']?>" alt="" />
                                    <span class="category"><?php echo  $team['designation']?></span>
                                    <h4><?php echo  $team['name']?></h4>
                                </div>
                            </div>
                        </div>
                    <?php if($team['name']=='Imtiaz Ahmed') {?>
                        <div class="col-md-8">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button text-capitalize" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Mission Statement:
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse  show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                To create and help in creating a quality oriented metrology infrastructure in the region for providing credible inspection, testing and calibration results for the growth of regional trade and industry.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Current Assignment;
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                As C.E.O. of Al-Meezan Industrial Metrology Services engaged in setting up a state of the art inspection, testing and calibration set up for the provisioning of accredited calibration services in Pakistan and metrology and QMS consultancy and trainings in Middle East and Pakistan.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Credentials for the Assignment;
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body table-responsive">

                                                <table class="table table-bordered table-striped table-sm">
                                                    <tr>
                                                        <td>IRCA Registered Lead Auditor for ISO 9001:2015</td>
                                                        <td>05 Days</td>
                                                        <td>SGS Academy</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ISO/IEC 17025:2005 Standard awareness</td>
                                                        <td>02 Days</td>
                                                        <td>ITQM P.U.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ISO/IEC 17025:2005 Assessor (APLAC TR001)</td>
                                                        <td>05 Days</td>
                                                        <td>PNAC*</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ISO/IEC 17025:2005 Method validation & traceability</td>
                                                        <td>01 Day</td>
                                                        <td>PNAC</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ISO/IEC 17025:2005 Quality Assurance & Internal cal.</td>
                                                        <td>01 Day</td>
                                                        <td>PNAC</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ISO/IEC 17025:2005 Measurement Uncertainty.</td>
                                                        <td>02 Days</td>
                                                        <td>CICM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Internal Auditor course for ISO 9001:2008</td>
                                                        <td>05 Days</td>
                                                        <td>INSPECTEST</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Internal Auditor Course for IMS Certification</td>
                                                        <td>02 Days</td>
                                                        <td>DEL Qatar BA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Diploma of Associate Engg (Electronics).</td>
                                                        <td>130 Weeks</td>
                                                        <td>School of Elects.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Calibration of Electronics, Mechanical, Dimensional, Surveying and Process measuring instruments.</td>
                                                        <td>13 Weeks</td>
                                                        <td>F-16 FTD*, PAF</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Temperature Measurement.</td>
                                                        <td>01 Week</td>
                                                        <td>Fluke Corp. UK</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Safety and Relief Valve Testing</td>
                                                        <td>02 Days</td>
                                                        <td>Ventil BV NL.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Surface Table Calibration System</td>
                                                        <td>02 Days</td>
                                                        <td>Wyler Swiss</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Meter Tap and Line Scale Calibration</td>
                                                        <td>02 Days</td>
                                                        <td>General Tech</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pressure Calibration System ADT761</td>
                                                        <td>01 Day</td>
                                                        <td>Anum UAE</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Water Distillation Installation & Operation</td>
                                                        <td>01 Day</td>
                                                        <td>Nawaris Medical</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Measurement System Analysis (Minitab Software)</td>
                                                        <td>02 Days</td>
                                                        <td>CICM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Technical Instructor Course</td>
                                                        <td>04 Weeks</td>
                                                        <td>No. 107 AED</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Quality Assurance and Control</td>
                                                        <td>02 Weeks</td>
                                                        <td>No. 107 AED</td>
                                                    </tr>
                                                    <tr>
                                                        <td>On Job calibration training supervisor.</td>
                                                        <td>01 Weeks</td>
                                                        <td>F-16 FTD, PAF</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Calibration of spectrophotometers.</td>
                                                        <td>08 Weeks</td>
                                                        <td>F-16 FTD, PAF</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Calibration of Test Stands for Turbojet Power Plants.</td>
                                                        <td>02 Weeks</td>
                                                        <td>F-16 FTD, PAF</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Calibration of Radar Simulators.</td>
                                                        <td>02 Weeks</td>
                                                        <td>F-16 FTD, PAF</td>
                                                    </tr>
                                                </table>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Experience chronology;
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">

                                                <strong>i) May, 2014~July, 2016</strong> Worked at <strong>Modern Surveying Calibration Laboratory</strong> Kurdistan Iraq as Metrology Supervisor participated for setting up an 1800 square meter with 08 dedicated laboratories, procured, installed and commissioned +200 calibration standard equipment, gave hands on training to around 15 technical staff and managed to get accreditation for around 52 ranges and CMC in 8 parameters.
                                                <br><strong>ii) Aug,2012~May,2014</strong> working as Business Development Manager for <strong>“Accutech Instrumentation Services LLC</strong>. Set up a calibration lab and got Accreditation for 17025: 2005 from DAC Dubai.
                                                <br><strong>iii) Jan, 2011 ~ April, 2012</strong> working is Manager Calibration Lab at <strong>“Gray Mackenzie Engineering Services WLL”</strong> Qatar. Actively participated in the growth of cal business.
                                                <br> <strong>iv) Jan, 2010 ~ Jan, 2011</strong> working as Incharge Marketing and Quality Assurance at <strong>“Gray Mackenzie Engineering Services LLC”</strong> Dubai. Got Accreditation for ISO 17025: 2005 for Calibration and Appliance testing from ENAS UAE.
                                                <br><strong>v) Feb, 2008 ~ Jan, 2010 </strong> working as incharge Calibration Lab at <strong>“Inspectest (pvt) Ltd. Lahore Pakistan</strong>. Prepared and implemented QMS & Technical Management system for 17025: 2005 accreditation of the Calibration Laboratory.
                                                <br><strong>vi) May, 1992 ~ Feb, 2008</strong> working as calibration technician, supervisor, technical instructor, quality assurance inspector, on job training coordinator and Lab incharge at <strong>“Precision Measurement Equipment Calibration Labs”</strong> of Pakistan Air Force.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php } ?>
                    <?php if($team['name']=='Shahzad Ahmed') {?>
                        <div class="col-md-8">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button text-capitalize" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                FIELD OF SPECIALIZATION
                                            </button>
                                        </h2>
                                        <div id="collapse1" class="accordion-collapse  show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Electronics, Digital Electronics, Metrology/Calibration, Lab Competence Assessment as per ISO- 17025:2005 Quality Management, Quality Control and Quality Assurance
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button text-capitalize" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                                PROJECTS
                                            </button>
                                        </h2>
                                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="m-ul">
                                                    <li><srtong>Setting up of New Calibration Lab At Al Meezan Industrial Metrology Services, Lahore, Pakistan</srtong>
                                                        Worked as a business partner and General manager to setup and establish a new calibration lab at Lahore, Pakistan.</li>
                                                    <li>
                                                        <strong>Setting up of New Calibration Lab At Modern Surviyer Calibration FZE, Erbil Iraq</strong>
                                                        Worked as a member of a team of two Sr. Metrologists to Set up of new Calibration Lab at Erbil, Iraq.
                                                    </li>
                                                    <li>
                                                        <strong>Setting up of New & Up graded Calibration Lab At APC & ICentre PCSIR Labs Complex Lahore</strong>
                                                        Worked as a member of a team of three Sr. Metrologists to Set up of new & up graded Calibration Lab at APC&I Centre, PCSIR Labs Complex, Lahore that can fulfill the role of secondary lab in the province of Punjab.
                                                    </li>
                                                    <li>
                                                        <strong>Implementation of ISO 9001:2000</strong>
                                                        Worked as Assistant Quality Manger during 2002-2003 for the development of Quality System documentation regarding Implementation of ISO 9001:2000 at APC & I Centre.

                                                    </li>
                                                    <li>
                                                        <strong>Implementation of ISO 17025:2005</strong>
                                                        Worked as Assistant Quality Manger during 2003-2005 for the development of Quality System Manual Quality System Procedures, Work Instructions, Forms & Records, Control Charts and Related Analysis regarding Implementation of ISO 17025:2005 at APC & I Centre.
                                                    </li>
                                                    <li>
                                                        <strong>Dry Block Thermocouple Digital Calibrator</strong>
                                                        Designed and developed a Digital Calibrator for calibration of Thermocouples and temperature sensors.
                                                    </li>
                                                    <li>
                                                        <strong>Automatic Temperature Controlled Heating System for Injection Moulding Machine</strong>
                                                        Designed and developed Automatic Temperature Controlled heating system for Injection moulding Machine for M/s Model Sports, Sialkot.

                                                    </li>
                                                    <li>
                                                        <strong>Calibration System for Clamp-meters</strong>
                                                        Designed and developed Calibration System for Clamp-meters with calibration range up to 300 A.

                                                    </li>
                                                    <li>
                                                        <strong>Calibration System for Meggers</strong>
                                                        Designed and developed Calibration System for Meggers with calibration range up to 2200 M

                                                    </li>
                                                    <li>
                                                        <strong>Calibrator for 4 pin Earth Testers</strong>
                                                        Designed and developed Calibrator for 4 pin Earth Testers based on IEEE-80

                                                    </li>
                                                </ul>



                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button text-capitalize" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                                ISO/IEC 17025:2005 TECHNICAL ASSESSMENT EXPERIENCE
                                            </button>
                                        </h2>
                                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <table class="table table-sm table-borderless table-striped">
                                                    <tr>
                                                        <th style="white-space: nowrap">Accreditation Body</th>
                                                        <th>Lab Assessed</th>
                                                        <th>Month & Year</th>
                                                    </tr>
                                                    <tr>
                                                        <td>GAC</td>
                                                        <td>Betalink Instrumentation and Calibration, Abu Dhabi</td>
                                                        <td>July 2015</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PNAC</td>
                                                        <td>Dimensional Metrology Lab, POF, Wah, Pakistan</td>
                                                        <td>July 2013</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PNAC</td>
                                                        <td>Calibration Lab, Miraj Rebuild Factory, Kamra, Pakistan</td>
                                                        <td>July 2013</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PNAC</td>
                                                        <td>Precision Measurement Electrical Lab, 509, Gujranwala, Pakistan</td>
                                                        <td>June 2013</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ENAS</td>
                                                        <td>EMIS, Intertek, Abu Dhabi, UAE</td>
                                                        <td>April 2013</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ENAS</td>
                                                        <td>Metromac, Calibration & Automation Services, Abu Dhabi, UAE</td>
                                                        <td>April 2013</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ENAS</td>
                                                        <td>QCAL, Qatar Calibration & Instrumentation Services, Qatar</td>
                                                        <td>April 2013</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PNAC</td>
                                                        <td>Calibration Lab, Avionics Production Factory, Kamra, Pakistan</td>
                                                        <td>January 2013</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ENAS</td>
                                                        <td>Calibration Lab, Rohde & Schwarz, Abu Dhabi, UAE</td>
                                                        <td>December 2012</td>
                                                    </tr>
                                                    <!-- Continue adding rows as needed -->
                                                    <tr>
                                                        <td>ENAS</td>
                                                        <td>Calibration Lab, Attock Refinery, Rawalpindi, Pakistan</td>
                                                        <td>February 2011</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PNAC</td>
                                                        <td>Precision Measurement Electrical Lab, 107, Karachi, Pakistan</td>
                                                        <td>February 2011</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ENAS</td>
                                                        <td>Calibration Lab, Miraj Rebuild Factory, Kamra, Pakistan</td>
                                                        <td>February 2011</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PNAC</td>
                                                        <td>Calibration Lab, Attock Refinery, Rawalpindi, Pakistan</td>
                                                        <td>February 2011</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ENAS</td>
                                                        <td>Precision Measurement Electrical Lab, 107, Karachi, Pakistan</td>
                                                        <td>February 2011</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PNAC</td>
                                                        <td>Calibration Lab, Rohde & Schwarz, Abu Dhabi, UAE</td>
                                                        <td>February 2011</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ENAS</td>
                                                        <td>Calibration Lab, Miraj Rebuild Factory, Kamra, Pakistan</td>
                                                        <td>February 2011</td>
                                                    </tr>
                                                </table>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                    <?php } ?>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>
