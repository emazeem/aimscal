<?php include('layout/master1.php') ?>

<div class="main-banner" id="top">
    </div>
    <div class="container-fluid " data-aos="fade-up">
        <div class="row ">
            <div class="col-md-12 text-center pt-5 pb-5">
                <h3>Generate Request for Quote</h3>
                <p class="text-danger m-0 d-none ">
                    RFQ URL will expire after <span id="minutes"><i class="fa fa-spinner fa-spin"></i> </span> minutes
                </p>
            </div>
        </div>
        <form id="submit_rfq">
            <div class="row ">
                <div class="col-md-12 pt-0 mt-0 loader-line" style="display: none;background-image: url('{{url('line.gif')}}');background-position: center"><p></p></div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="form-group" id="parameter-loader">
                            <label class="bg-c-primary btn btn-block w-100"><b>Loading Parameters</b> <i class="fa fa-spin fa-spinner" ></i> </label>
                        </div>
                        <div class="form-group">
                            <select class="select-2-parameter form-control" id="parameter" name="parameter"></select>
                        </div>

                        <div class="form-group listed-capability" style="display: none">
                            <label for="capability"  class="d-none">Capabilities list</label>
                            <select class="form-control select-2-capability" style="width: 100%;" id="capability" name="capability"><option selected disabled>-- Select Capability</option></select>
                        </div>
                        <div class="form-group " style="display: none">
                            <label for="unit"  class="d-none">Unit</label>
                            <select class="form-control select-2-unit" id="unit" name="unit" style="width: 100%"><option selected disabled>-- Select Unit</option></select>
                        </div>
                        <div class="form-group " style="display: none">
                            <label for="serial" class="d-none">Serial Number of UUC</label>
                            <input type="text" class="form-control" id="serial" name="serial" placeholder="Serial Number">
                        </div>
                        <div class="form-group " style="display: none">
                            <label for="eq_id" class="d-none">Equipment ID of UUC</label>
                            <input type="text" class="form-control" id="eq_id" name="eq_id" placeholder="Equipment ID">
                        </div>
                        <div class="form-group col-md-6" style="display: none">
                            <label for="make" class="d-none">Make of UUC</label>
                            <input type="text" class="form-control" id="make" name="make" placeholder="Make">
                        </div>
                        <div class="form-group col-md-6 " style="display: none">
                            <label for="model" class="d-none">Model of UUC</label>
                            <input type="text" class="form-control" id="model" name="model" placeholder="Model">
                        </div>

                        <div class="form-group col-md-6 " style="display: none">
                            <label for="min_range" class="d-none">Range Min</label>
                            <input type="text" class="form-control" id="min_range" name="min_range"  placeholder="Min. Range">
                        </div>
                        <div class="form-group col-md-6 " style="display: none">
                            <label for="max_range" class="d-none">Range Max</label>
                            <input type="text" class="form-control" id="max_range" name="max_range" placeholder="Max. Range">
                        </div>
                        <div class="form-group col-md-6 " style="display: none">
                            <label for="resolution" class="d-none">Resolution</label>
                            <input type="text" class="form-control" id="resolution" name="resolution" placeholder="Resolution">
                        </div>
                        <div class="form-group col-md-6 " style="display: none">
                            <label for="accuracy" class="d-none">Accuracy</label>
                            <input type="text" class="form-control" id="accuracy" name="accuracy" placeholder="Accuracy">
                        </div>
                        <label for="quantity" style="display: none">Quantity</label>
                        <div class="input-group " style="display: none">
                            <div class="input-group-prepend">
                                <span class="input-group-text qty-btn left" id="basic-addon1"><i class="fa fa-minus"></i></span>
                            </div>
                            <input type="number" class="form-control text-center" id="quantity" name="quantity" placeholder="Quantity" value="">
                            <div class="input-group-append">
                                <span class="input-group-text qty-btn right" id="basic-addon1"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="col-12 mt-2 " style="display: none">
                            <button id="clear-btn" data-type="v" class="clear_btn btn btn-light float-start"> <i class="fa fa-eraser"></i> Clear</button>
                            <button id="add-row" class="submit_rfq_btn btn bg-c-primary float-end">
                                <span id="add-row-text"><i class="fa fa-plus-square"></i> Add Row</span>
                                <span id="add-row-loading" style="display: none"><i class="fa fa-spinner fa fa-spin"></i> Processing</span>
                            </button>
                        </div>
                    </div>
                    <select class="form-control d-none" id="location" name="location"><option selected disabled>-- Choose location</option><option value="lab" selected>Lab</option><option value="site">Site</option></select>
                    <select class="form-control d-none" id="accredited" name="accredited"><option selected disabled>-- Choose an option</option><option value="yes" selected>Accredit</option><option value="no">Non-Accredit</option></select>
                </div>
                <div class="col-md-9 table-responsive">
                    <table class="table mt-2 rounded table-bordered table-striped table-hover items-table">
                        <thead>
                        <tr id="item-table-heading">
                            <th>Capability</th>
                            <th>Parameter</th>
                            <th>Unit</th>
                            <th>Make</th>
                            <th>Model</th>
                            <th>Serial</th>
                            <th>EquipmentID</th>
                            <th>Range</th>
                            <th>Resolution</th>
                            <th>Accuracy</th>
                            <th>Location</th>
                            <th>Qty</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                        <tfoot>
                        <tr id="not-available">
                            <td colspan="100%" class="text-center">
                                <i>No RFQ items added.</i>
                            </td>
                        </tr>
                        </tfoot>
                    </table>

                    <div class="col-md-12 d-flex justify-content-end" >
                        <div class="form-group w-25 mt-0" id="customer-loader">
                            <label class="bg-c-primary btn btn-block w-100"><b>Loading Customers</b> <i class="fa fa-spin fa-spinner" ></i> </label>
                        </div>
                        <div class="form-group w-25 mt-0 customer-div">
                            <select class="select-2-customer form-control" id="customer" name="customer"></select>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2 text-end" >
                        <button class="btn btn-success rounded-0 border-0 bg-c-primary btn-p-m px-3 submit-rfq "  id="submit-btn">
                            <span id="rfq-submit-text"><i class="fa fa-save"></i> Submit RFQ</span>
                            <span id="rfq-submit-processing" style="display:none;"><i class="fa fa-spinner fa-spin"></i> Processing</span>
                        </button>
                    </div>
                </div>

            </div>
        </form>
    </div>


<style>
        label{
        }
        .form-group,.input-group{
            margin-top: 10px;
        }
        .select2-container .select2-selection--single{
            height: 38px!important;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered{
            line-height: 38px!important;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow{
            height: 38px!important;
        }
        .select2-container--default .select2-selection--single{
            border-color: #dee2e6 !important;
        }
        .input-group-text.qty-btn{
            background: #f2f2f2;
            color: grey;
            padding: 0.75rem 0.75rem;
            font-size: 1rem;
            border-radius: 0;
            transition: background 0.3s ease;

        }
        .input-group-text.qty-btn:hover{
            background: #e0e0e0;

        }
        .qty-btn.left{
            border-top-left-radius: 5px!important;
            border-bottom-left-radius: 5px!important;
        }
        .qty-btn.right{
            border-top-right-radius: 5px!important;
            border-bottom-right-radius: 5px!important;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type=number] {
            -moz-appearance: textfield;
        }
        #item-table-heading  th{
            font-weight: normal;
            color: whitesmoke;
            background: #039bf1!important;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered{
            background: #039bf1!important;
            color: whitesmoke!important;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow b{
            border-color: whitesmoke transparent transparent transparent!important;
        }
        .select2-container--default .select2-results__option--highlighted[aria-selected]{
            background:  #039bf1!important;
        }
    </style>
<?php include('layout/master2.php') ?>
<link rel="stylesheet" href="/public/vendor/select2.min.css">
<script src="/public/vendor/select2.full.min.js"></script>
<script>
    getParameters();
    getCustomers();
    window.addEventListener('beforeunload', function (event) {
        const itemsTable = $('.items-table>tbody>tr');
        if (itemsTable.length > 0) {
            const message = 'You have unsaved changes. Are you sure you want to leave?';
            event.returnValue = message;
            return message;
        }
    });
    function getParameters(){
        $.ajax({
            url: 'https://aimslims.com/api/parameters-list',
            type: "POST",
            dataType:'JSON',
            beforeSend: function () {
                $('#parameter-loader').show();
                $('#parameter').hide();
            },
            success: function(response) {
                $('#parameter').show();
                $('#parameter').append('<option selected disabled>-- Select a Parameter</option>');
                $.each(response.data,function (index,param){
                    $('#parameter').append('<option value="'+param.id+'">'+param.name+'</option>');
                });
                $('#parameter-loader').hide();
                $('#parameter').select2();
            },
            error: function(xhr) {
                erroralert(xhr);
            }
        });
    }
    function getCustomers(){
        $.ajax({
            url: 'https://aimslims.com/api/customers-list',
            type: "POST",
            dataType:'JSON',
            beforeSend: function () {
                $('#customer-loader').show();
                $('.customer-div').hide();
            },
            success: function(response) {
                $('#customer-loader').hide();
                $('#customer').append('<option selected disabled>-- Select a Customer</option>');
                $.each(response.data,function (index,param){
                    $('#customer').append('<option value="'+param.id+'">'+param.reg_name+'</option>');
                });
                $('.customer-div').show();
                $('#customer').select2();
            },
            error: function(xhr) {
                erroralert(xhr);
            }
        });
    }
    function clearFields(){
        $('#capability').val('').trigger('change');
        $('#capability').parent().hide();
        $('#unit').val('').trigger('change');
        $('#unit').parent().hide();
        $('#model').val(null).parent().hide();
        $('#make').val(null).parent().hide();
        $('#serial').val(null).parent().hide();
        $('#eq_id').val(null).parent().hide();
        $('#min_range').val(null).parent().hide();
        $('#max_range').val(null).parent().hide();
        $('#resolution').val(null).parent().hide();
        $('#accuracy').val(null).parent().hide();
        $('#quantity').val(null).parent().hide();
        $('#add-row').parent().hide();
    }
    $(function () {
        $('#customers_list').select2();
        $("#capability").select2();
        $("#unit").select2();
        $('#capability').on('change', function () {
            $('#unit').parent().fadeIn(500);
        });
        $('#unit').on('change', function () {
            $('#make').parent().fadeIn(500);
            $('#model').parent().fadeIn(500);
            $('#serial').parent().fadeIn(500);
            $('#eq_id').parent().fadeIn(500);
            $('#min_range').parent().fadeIn(500);
            $('#max_range').parent().fadeIn(500);
            $('#resolution').parent().fadeIn(500);
            $('#accuracy').parent().fadeIn(500);
            $('#quantity').parent().fadeIn(500);
            $('#add-row').parent().fadeIn(500);
            setTimeout(function (){
                $('#serial').focus();
            },100);
        });
        $('#parameter').on('change', function () {
            var parameter = $(this).val();
            if (parameter) {
                $.ajax({
                    url: 'https://aimslims.com/api/single-capability-list',
                    type: "POST",
                    data: {'id': parameter},
                    dataType: "json",
                    beforeSend: function () {
                        $('.loader-line').fadeIn();
                    },
                    success: function (response) {
                        var data=response.data;
                        $('.loader-line').hide();
                        $('select[name="capability"]').empty().append('<option disabled selected>-- Select Capability</option>');
                        $.each(data['capabilities'], function (key, value) {
                            $('select[name="capability"]').append('<option value="' + value.id + '">' + value.name + ' - ' + value.max_range + '</option>');
                        });
                        $('select[name="unit"]').empty().append('<option disabled selected>-- Select Unit</option>');
                        $.each(data['unit'], function (key, value) {
                            $('select[name="unit"]').append('<option value="' + value + '">' + key + '</option>');
                        });
                        $('#capability').parent().fadeIn(500);
                    },
                    error:function () {
                        $('.loader-line').hide();
                        $('select[name="capability"]').empty();
                        $('select[name="unit"]').empty();
                    }
                });
            }
        });
        var formdata=[];
        $("#submit_rfq").on('submit', (function (e) {
            e.preventDefault();
            $.ajax({
                url: "https://aimslims.com/api/validate-rfq-items",
                type: "POST",
                data: new FormData(this) ,
                processData: false,
                contentType: false,
                dataType:'JSON',
                beforeSend: function () {
                    $('#add-row-text').hide();
                    $('#add-row-loading').show();
                },
                success: function(data) {


                    $('#not-available').hide();
                    $('.items-table').append('<tr id="data-'+data.id+'"><td> <i class="fa fa-times-circle text-danger tbl-remove-item" data-id="'+data.id+'"></i> '+data.capability_name+'</td> <td>'+data.parameter_name+'</td> <td>'+data.unit_name+'</td> <td>'+data.make+'</td> <td>'+data.model+'</td> <td>'+data.serial+'</td> <td>'+data.eq_id+'</td> <td>'+data.min_range+','+data.max_range+'</td> <td>'+data.resolution+'</td> <td>'+data.accuracy+'</td> <td>'+data.location+'</td> <td>'+data.quantity+'</td> </tr>');
                    formdata.push(data);
                    getParameters();
                    clearFields();


                    $('#add-row-text').show();
                    $('#add-row-loading').hide();
                },
                error: function(xhr) {
                    $('#add-row-text').show();
                    $('#add-row-loading').hide();
                    erroralert(xhr);
                }
            });
        }));
        $('.clear-btn').on('click',function (){
            clearFields();
        });
        $('.items-table').on('click','.tbl-remove-item',function () {
            var id=$(this).attr('data-id');
            $('#data-'+id).remove();
            formdata = jQuery.grep(formdata, function(value) {
                return value.id!=id;
            });
            if ($('.items-table>tbody>tr').length === 0) {
                $('#not-available').show();
                $('#customer-tr').hide();
            }else{
                $('#customer-tr').show();
            }
        });
        $(".left, .right").on('click', function () {
            var inputField = $("#quantity");
            var currentQty = parseInt(inputField.val());
            if ($(this).hasClass('left')) { if (currentQty > 1) { inputField.val(currentQty - 1); } } else { inputField.val(currentQty >= 1 ? currentQty + 1 : 1); }
        });
        $("#submit-btn").on('click', (function (e) {
            e.preventDefault();
            if($('#customer').val()){
                var data={'data':formdata,'customer':$('#customer').val(),_token:'{{csrf_token()}}'};
                var button = $(this);
                var previous = $(button).html();
                button.attr('disabled', 'disabled').html('Processing <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
                $.ajax({
                    url: 'https://aimslims.com/api/online-rfq-store',
                    type: "POST",
                    data: data ,
                    dataType:'JSON',
                    beforeSend: function () {
                        $('#rfq-submit-text').hide();
                        $('#rfq-submit-processing').show();
                    },
                    success: function(data) {

                        $('#rfq-submit-text').show();
                        $('#rfq-submit-processing').hide();

                        button.attr('disabled', null).html(previous);
                        swal('success', data.success, 'success').then(function () {
                            $('.items-table>tbody>tr').remove();
                            location.reload();
                        });
                    },
                    error: function(xhr) {
                        $('#rfq-submit-text').show();
                        $('#rfq-submit-processing').hide();

                        button.attr('disabled', null).html(previous);
                        erroralert(xhr);
                    }
                });
            }else{
                swal("Failed", 'Please select customer name', "error");
            }

        }));
    });
</script>