<?php include('layout/footer.php') ?>
<script src="public/vendor/jquery/jquery.min.js"></script>
<script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="public/assets/js/isotope.min.js"></script>
<script src="public/assets/js/owl-carousel.js"></script>
<script src="public/assets/js/counter.js"></script>
<script src="public/assets/js/custom.js"></script>
<script type="text/javascript" src="public/assets/js/sweetalert.min.js"></script>
<script>
    $(function (){
        $(document).on('click','#servicesDropdown',function (){
            var dropdownMenu=$(this).parent().find('.dropdown-menu');
            dropdownMenu.slideToggle();
            $(this).find('.fa-angle-down').toggleClass('rotate-up');
        })
    });
    function erroralert(xhr) {
        if (typeof  xhr.responseJSON.errors === 'object') {
            var error = '';
            $.each(xhr.responseJSON.errors, function (key, item) {
                error += item;
            });
            swal("Failed", error, "error");
        } else {
            console.log( xhr);
            swal("Failed", xhr.responseJSON.message, "error");
        }
    }
</script>
</body>
</html>
