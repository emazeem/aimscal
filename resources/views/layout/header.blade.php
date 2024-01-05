<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="index.html" class="logo">
                        <img src="{{url('assets/images/AIMS.png')}}" style="width: 70px;margin-top:-10px"  alt="">
                    </a>
                    <ul class="nav">
                        <li class="scroll-to-section"><a class="{{Route::currentRouteName()=='home'?'active':''}}" href="{{route('home')}}">Home</a></li>
                        <li class="">
                            <a class="{{Route::currentRouteName()==''?'active':''}} " href="#" id="servicesDropdown" >Services <i class="fa fa-angle-down" style="font-size: 10px"></i></a>
                            <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                                @foreach(getServices() as $service)
                                    <a class="dropdown-item" href="#">{{$service['title']}}</a>
                                @endforeach
                            </div>
                        </li>
                        <li class="scroll-to-section"><a class="{{Route::currentRouteName()==''?'active':''}}" href="#courses">Request a Quote</a></li>
                        <li class="scroll-to-section"><a class="{{Route::currentRouteName()==''?'active':''}}" href="#team">Team</a></li>
                        <li class="scroll-to-section"><a class="{{Route::currentRouteName()==''?'active':''}}" href="#events">About Us</a></li>
                        <li class="scroll-to-section"><a class="{{Route::currentRouteName()=='contact.us'?'active':''}}" href="{{url('contact-us')}}">Contact Us</a></li>
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
