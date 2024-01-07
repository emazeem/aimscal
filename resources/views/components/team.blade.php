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
            @foreach($teams as $team)
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="{{url('images/'.$team['image'])}}" alt="" />
                            <span class="category">{{$team['designation']}}</span>
                            <h4>{{$team['name']}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
