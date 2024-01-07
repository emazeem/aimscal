<div class="main-banner" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-banner">
                    @foreach($banners as $k=>$banner)
                        <div class="item item-{{$k+1}}">
                            <div class="header-text">
                                <span class="category">Your Partner in Growth.</span>
                                <h2>
                                    @if($k==0)
                                        Al-Meezan Industrial Meterology Services
                                    @else
                                        One stop shop for industrial inspection, testing & calibration services.
                                    @endif
                                </h2>
                                <p>Growth partner for trade and industry for proactive management of their equipment, fine tuning of their process and quality assurance of their products through traceable and reliable services of inspections, testing and calibrations. </p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#">Generate RFQ?</a>
                                    </div>
                                    <div class="icon-button d-none">
                                        <a href="#"><i class="fa fa-play"></i> What's Scholar?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
