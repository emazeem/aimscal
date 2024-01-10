<div class="gallery-wrapper">
    <div class="content ">
        <div class="gallery full">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($gallery as $image)
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="{{$image}}" alt="" />
                            </div>

                            <div class="overlay">
                                <div class="text-wrap">
                                    <div class="name">
                                        <span class="text-white">Your Partners in Growth</span>
                                    </div>
                                    <div class="caption">
                                        <p>One stop shop for industrial inspection, testing & calibration services.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="swiper-next-button">
                <em class="material-icons"><i class="fa text-white fa-chevron-right"></i></em>
            </div>
            <div class="swiper-prev-button">
                <em class="material-icons"><i class="fa text-white fa-chevron-left"></i></em>
            </div>
        </div>

        <div class="gallery thumb">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($gallery as $image)
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="{{$image}}" alt="" />

                                <div class="overlay">
                                    <em class="material-icons"><i class="fa fa-check-circle"></i></em>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="swiper-next-button">
                <em class="material-icons"><i class="fa fa-chevron-right"></i></em>
            </div>
            <div class="swiper-prev-button">
                <em class="material-icons"><i class="fa fa-chevron-right"></i></em>
            </div>
        </div>
    </div>
</div>


</script>
<style>
    .hide {
        display: none !important;
    }

    .gallery-wrapper {
        position: relative;
        z-index: 1;
    }
    .gallery-wrapper .content {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 3vh 0;
        background: #101014;
        background: linear-gradient(to left, #3ca2ec, #0c568d);
    }
    .gallery-wrapper .content .gallery.full {
        position: relative;
        display: flex;
        align-items: center;
        margin-top: 100px;
    }
    .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper {
        display: flex;
        height: 70vh;
        align-items: center;
    }
    .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide {
        position: relative;
        height: 50vh;
        transition: all 0.4s ease-out;
        box-sizing: border-box;
        width: auto;
        opacity: 0.25;
    }
    .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide.swiper-slide-prev, .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide.swiper-slide-next {
        width: 20% !important;
    }
    .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide.swiper-slide-active {
        height: 80vh;
        width: 60% !important;
        opacity: 1;
    }
    .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide.swiper-slide-active:hover .zoom {
        opacity: 1;
        pointer-events: auto;
        visibility: visible;
    }
    .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide .image {
        width: 100%;
        height: 100%;
    }
    .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide .image img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
    }
    .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide .overlay {
        position: absolute;
        left: 0;
        bottom: 50px;
        z-index: 2;
        width: 100%;
        height: auto;
        padding: 50px 50px 30px 50px;
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.4) 50%, rgba(0, 0, 0, 0) 100%);
        display: flex;
        align-items: center;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease-out;
    }
    .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide .overlay.show {
        opacity: 1;
        visibility: visible;
    }
    .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide .overlay.show .text-wrap {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide .overlay .text-wrap {
        display: flex;
        flex-direction: column;
        max-width: 600px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(50px);
        transition: all 0.4s linear;
    }
    .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide .overlay .text-wrap .name span {
        font-size: 2.2em;
        font-weight: 700;
    }
    .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide .overlay .text-wrap .caption p {
        font-size: 1.16em;
        color: #fff;
        line-height: 1.7;
    }
    .gallery-wrapper .content .gallery.full .swiper-next-button,
    .gallery-wrapper .content .gallery.full .swiper-prev-button {
        position: absolute;
        z-index: 99;
        outline: none;
        transition: all 0.2s linear;
        width: 20%;
        height: 50vh;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        cursor: pointer;
    }
    .gallery-wrapper .content .gallery.full .swiper-next-button.swiper-button-disabled,
    .gallery-wrapper .content .gallery.full .swiper-prev-button.swiper-button-disabled {
        opacity: 0.2;
    }
    .gallery-wrapper .content .gallery.full .swiper-next-button em,
    .gallery-wrapper .content .gallery.full .swiper-prev-button em {
        font-size: 68px;
    }
    .gallery-wrapper .content .gallery.full .swiper-next-button {
        right: 0;
        padding-left: 5vw;
        justify-content: flex-start;
    }
    .gallery-wrapper .content .gallery.full .swiper-prev-button {
        left: 0;
        padding-right: 5vw;
    }
    .gallery-wrapper .content .gallery.thumb {
        position: relative;
        width: 100%;
        max-width: 1020px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        padding-left: 12px;
    }
    .gallery-wrapper .content .gallery.thumb .swiper-container {
        width: 100%;
    }
    .gallery-wrapper .content .gallery.thumb .swiper-container .swiper-wrapper .swiper-slide {
        position: relative;
        height: 10vh;
        box-sizing: border-box;
        cursor: pointer;
    }
    .gallery-wrapper .content .gallery.thumb .swiper-container .swiper-wrapper .swiper-slide.swiper-slide-thumb-active .image {
        box-shadow: inset 0px 0px 0px 2px white;
        padding: 2px;
    }
    .gallery-wrapper .content .gallery.thumb .swiper-container .swiper-wrapper .swiper-slide.swiper-slide-thumb-active .image .overlay {
        opacity: 1;
    }
    .gallery-wrapper .content .gallery.thumb .swiper-container .swiper-wrapper .swiper-slide .image {
        width: 100%;
        height: 100%;
        position: relative;
    }
    .gallery-wrapper .content .gallery.thumb .swiper-container .swiper-wrapper .swiper-slide .image img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
    }
    .gallery-wrapper .content .gallery.thumb .swiper-container .swiper-wrapper .swiper-slide .image .overlay {
        position: absolute;
        left: 2px;
        top: 2px;
        background-color: rgba(43, 44, 54, 0.6);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        width: calc(100% - 4px);
        height: calc(100% - 4px);
        opacity: 0;
        transition: all 0.2s linear;
    }
    .gallery-wrapper .content .gallery.thumb .swiper-next-button {
        right: -15px;
    }
    .gallery-wrapper .content .gallery.thumb .swiper-prev-button {
        left: -5px;
    }
    .gallery-wrapper .content .gallery.thumb .swiper-prev-button em {
        transform: rotate(180deg);
    }
    .gallery-wrapper .content .gallery.thumb .swiper-next-button,
    .gallery-wrapper .content .gallery.thumb .swiper-prev-button {
        position: absolute;
        z-index: 99;
        outline: none;
        transition: all 0.2s linear;
        width: 32px;
        height: 32px;
        border-radius: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: white;
        cursor: pointer;
    }
    .gallery-wrapper .content .gallery.thumb .swiper-next-button:hover,
    .gallery-wrapper .content .gallery.thumb .swiper-prev-button:hover {
        background-color: whitesmoke;
    }
    .gallery-wrapper .content .gallery.thumb .swiper-next-button.swiper-button-disabled,
    .gallery-wrapper .content .gallery.thumb .swiper-prev-button.swiper-button-disabled {
        opacity: 0.2;
    }

    /*signature*/
    .signature {
        position: absolute;
        z-index: 2;
        right: 0;
        bottom: 0;
        padding: 20px;
    }
    .signature h3 {
        font-weight: 600;
        font-size: 0.926em;
        color: #ed1b28;
        display: flex;
        margin-bottom: 5px;
    }
    .signature a,
    .signature em {
        text-decoration: none;
        color: #777;
        margin-right: 5px;
        font-size: 0.88em;
        transition: all 0.2s linear;
    }
    .signature a:hover,
    .signature em:hover {
        color: #aaa;
    }

    /*Mobile*/
    @media only screen and (max-width: 1024px) {
        .gallery-wrapper .content {
            padding: 5vh 0;
        }
        .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper {
            height: 70vh;
        }
        .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide {
            height: 50vh;
        }
        .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide.swiper-slide-prev, .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide.swiper-slide-next {
            width: 10% !important;
        }
        .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide.swiper-slide-active {
            height: 70vh;
            width: 80% !important;
        }
        .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide .overlay {
            padding: 20px;
        }
        .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide .overlay .text-wrap {
            transform: translateY(0);
        }
        .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide .overlay .text-wrap .name span {
            font-size: 1.6em;
        }
        .gallery-wrapper .content .gallery.full .swiper-container .swiper-wrapper .swiper-slide .overlay .text-wrap .caption p {
            font-size: 1.06em;
        }
        .gallery-wrapper .content .gallery.full .swiper-next-button,
        .gallery-wrapper .content .gallery.full .swiper-prev-button {
            width: 10%;
            height: 50vh;
            align-items: center;
            justify-content: center;
        }
        .gallery-wrapper .content .gallery.full .swiper-next-button em,
        .gallery-wrapper .content .gallery.full .swiper-prev-button em {
            font-size: 45px;
        }
        .gallery-wrapper .content .gallery.full .swiper-next-button {
            padding-left: 0;
        }
        .gallery-wrapper .content .gallery.full .swiper-prev-button {
            padding-right: 0;
        }
        .gallery-wrapper .content .gallery.thumb {
            padding: 0 30px;
            max-width: 100%;
        }
        .gallery-wrapper .content .gallery.thumb .swiper-container .swiper-wrapper .swiper-slide {
            height: 80px;
        }
        .gallery-wrapper .content .gallery.thumb .swiper-next-button {
            right: 10px;
        }
        .gallery-wrapper .content .gallery.thumb .swiper-prev-button {
            left: 10px;
        }
        .signature {
            display: none;
        }
    }
</style>
<link rel="stylesheet" href="https://unpkg.com/swiper@6.0.2/swiper-bundle.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper@6.0.2/swiper-bundle.min.js"></script>
@push('scripts')
    <script>
        $(function(){
            if($('.gallery-wrapper').length){
                var galleryThumbs = new Swiper('.gallery-wrapper .content .gallery.thumb .swiper-container', {
                    speed: 900,
                    effect: 'slide',
                    spaceBetween: 12,
                    grabCursor: false,
                    simulateTouch: true,
                    loop: false,
                    watchSlidesVisibility: true,
                    watchSlidesProgress: true,
                    navigation: {
                        nextEl: '.gallery-wrapper .content .gallery.thumb .swiper-next-button',
                        prevEl: '.gallery-wrapper .content .gallery.thumb .swiper-prev-button',
                    },
                    breakpoints: {
                        320: {
                            slidesPerView: 2,
                            spaceBetween: 10,
                        },
                        414: {
                            slidesPerView: 3,
                            spaceBetween: 10
                        },
                        768: {
                            slidesPerView: 5,
                            spaceBetween: 10
                        },
                        1024: {
                            slidesPerView: 7,
                            spaceBetween: 10
                        }
                    },
                    on: {
                        init: function() {
                            let containerThumbWidth = $('.gallery-wrapper .content .gallery.thumb').outerWidth();

                            let totalThumbWidth = 0;

                            $('.gallery.thumb .swiper-container .swiper-wrapper .swiper-slide').each(function(){
                                let thumbWidth = $(this).outerWidth();
                                totalThumbWidth += thumbWidth
                            });



                            if(totalThumbWidth < containerThumbWidth){
                                $('.gallery.thumb .swiper-next-button, .gallery.thumb .swiper-prev-button').addClass('hide');
                            }else{
                                $('.gallery.thumb .swiper-next-button, .gallery.thumb .swiper-prev-button').removeClass('hide');
                            }
                        }
                    }
                });

                var galleryFull = new Swiper('.gallery-wrapper .content .gallery.full .swiper-container', {
                    speed: 900,
                    effect: 'slide',
                    slidesPerView: 3,
                    spaceBetween: 0,
                    centeredSlides: true,
                    autoplay: {
                        delay: 7000,
                        disableOnInteraction: false,
                        stopOnLastSlide: false
                    },
                    keyboard: {
                        enabled: true,
                    },
                    grabCursor: false,
                    simulateTouch: false,
                    loop: true,
                    navigation: {
                        nextEl: '.gallery-wrapper .content .gallery.full .swiper-next-button',
                        prevEl: '.gallery-wrapper .content .gallery.full .swiper-prev-button',
                    },
                    thumbs: {
                        swiper: galleryThumbs
                    },
                    on: {
                        slideChangeTransitionStart: function () {
                            $('.gallery-wrapper .content .gallery.full .swiper-slide .overlay').removeClass('show');
                        },
                        slideChangeTransitionEnd: function () {
                            $('.gallery-wrapper .content .gallery.full .swiper-slide-active .overlay').addClass('show');
                        }
                    }
                });
            }
        });



    </script>
@endpush