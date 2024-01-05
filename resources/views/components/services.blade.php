<div class="services section" id="services">
    <div class="container">
        <div class="row">
            @foreach($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="icons/{{$service['icon']}}" alt="online degrees" />
                        </div>
                        <div class="main-content">
                            <h4>{{$service['title']}}</h4>
                            <p>{{$service['description']}}</p>
                            <div class="main-button">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
