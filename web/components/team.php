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
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="../public/images/<?php echo  $team['image']?>" alt="" />
                            <span class="category"><?php echo  $team['designation']?></span>
                            <h4><?php echo  $team['name']?></h4>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
