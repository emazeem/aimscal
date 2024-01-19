<div class="contact-us section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="section-heading">
                    <h6>Contact Us</h6>
                    <h2>Feel free to contact us anytime</h2>
                    <p>
                        Thank you for considering Al Meezan Industrial Metrology Services as your trusted partner.
                        Feel free to connect via email or phone, and if you prefer face-to-face communication, visit our office at the provided address. Your satisfaction is our priority, and we're committed to providing the best support for all your industrial metrology needs.
                    </p>
                    <div class="special-offer">
                        <span class="offer text-center"></span>
                        <h6><em ><i class="fa fa-envelope"></i> Email : </em> <span >info@aimscal.com</span></h6>
                        <h6><em ><i class="fa fa-phone"></i> Phone : </em> <span >+92 301 0002467</span></h6>
                        <h6><em ><i class="fa fa-mobile-alt"></i> Phone : </em> <span>+92 301 6236150</span></h6>
                        <h6><em ><i class="fa fa-map"></i> Address : </em> <span >H#58, B Block, OPF Society, Riwind Rd, Lahore</span></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-us-content">
                    <form id="contact-form" action="" method="post">

                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required />
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="" />
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="subject" id="subject" placeholder="Subject..." autocomplete="on" required />
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="send-message" class="orange-button">Send Message Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        $(function () {
            $('#contact-form').on('submit',function (e) {
                e.preventDefault();
                var button = $('#send-message');
                var previous = $(button).html();
                button.attr('disabled', 'disabled').html('Processing... Please wait <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
                $.ajax({
                    url: "{{route('contact.send.mail')}}",
                    type: "POST",
                    data:  new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function(data) {
                        button.attr('disabled', null).html(previous);
                        swal('success',data.success,'success').then((value) => {
                            location.reload();
                        });
                    },
                    error: function(xhr) {
                        button.attr('disabled', null).html(previous);
                        erroralert(xhr);
                    }
                });
            });
        })
    </script>
