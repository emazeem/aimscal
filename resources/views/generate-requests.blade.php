@extends('layout.master')
@section('content')

    <div class="main-banner" id="top">
    </div>
    <div class="section events" id="events">
        <div class="container">
            <div class="section-heading">
                <div class="container " data-aos="fade-up">
                    <form id="submit_rfq">
                        @csrf
                        <div class="container">
                            <div class="row ">
                                <div class="col-md-12">
                                    <h3>Generate Request for Quote :</h3>
                                    <h6>
                                        {{--{{$customer->reg_name}}
                                        {{$customer->plant}}--}}
                                    </h6>
                                    <p class="text-danger m-0">
                                        RFQ URL will expire after <span id="minutes"><i class="fa fa-spinner fa-spin"></i> </span> minutes
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="container py-2 first-row">
                            <div class="row ">
                                <div class="col-md-12 pt-0 mt-0 loader-line" style="display: none;background-image: url('{{url('line.gif')}}');background-position: center"><p></p></div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <label for=""><i class="fa fa-spin fa-spinner text-primary" id="parameter-loader"></i></label>

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
                                            <input type="text" class="form-control" id="min_range" name="min_range"  placeholder="Min">
                                        </div>
                                        <div class="form-group col-md-6 " style="display: none">
                                            <label for="max_range" class="d-none">Range Max</label>
                                            <input type="text" class="form-control" id="max_range" name="max_range" placeholder="Max">
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
                                            <button id="add-row" data-type="v" class="submit_rfq_btn btn btn-success float-end"> <i class="fa fa-plus-square"></i> Add Row</button>
                                        </div>
                                    </div>
                                    <select class="form-control d-none" id="location" name="location"><option selected disabled>-- Choose location</option><option value="lab" selected>Lab</option><option value="site">Site</option></select>
                                    <select class="form-control d-none" id="accredited" name="accredited"><option selected disabled>-- Choose an option</option><option value="yes" selected>Accredit</option><option value="no">Non-Accredit</option></select>
                                </div>
                                <div class="col-md-9 table-responsive">
                                    <table class="table mt-2 rounded table-bordered table-striped table-hover items-table">
                                        <tr>
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
                                        <tr id="not-available">
                                            <td colspan="100%" class="text-center">
                                                <i>No data available</i>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="col-md-12 text-right text-end mt-2">
                                        <button class="btn btn-success btn-p-m px-3 submit-rfq" data-type="s" style="width: auto"><i class="fa fa-save"></i> Submit RFQ</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <p id="array-data"></p>

    @push('scripts')

        <link rel="stylesheet" href="{{url('vendor/select2.min.css')}}">
        <script src="{{url('vendor/select2.full.min.js')}}"></script>
        <script>
            getParameters();
            get_time();


            function get_time() {
                return true;
                /*$.ajax({
                    url: '{{url('w.check.time')}}',
                type: "POST",
                data: {'id':'{{1}}',_token:"{{csrf_token()}}"} ,
                dataType:'JSON',
                beforeSend: function () {
                    $('#minutes').html('<i class="fa fa-spinner fa-spin"></i>');
                },
                success: function(data) {
                    if (data.next){
                        window.location.href='{{url('w.url.expired')}}'
                    } else{
                        $('#minutes').text(45 - parseFloat(data.span));
                    }
                },
                error: function(xhr) {
                }
            });*/
            }
            function getParameters(){
                $.ajax({
                    url: 'https://aimslims.com/api/parameters-list',
                    type: "POST",
                    dataType:'JSON',
                    beforeSend: function () {
                    },
                    success: function(response) {
                        $('#parameter').append('<option selected disabled>-- Select a Parameter</option>');
                        $.each(response.data,function (index,param){
                            $('#parameter').append('<option value="'+param.id+'">'+param.name+'</option>');
                        });
                        $('#parameter-loader').remove();
                        $('#parameter').select2();
                    },
                    error: function(xhr) {
                    }
                });
            }

            $(function () {
                $('#customers_list').select2();
                $("#capability").select2();
                $("#unit").select2();

                $('#capability').on('change', function () {
                    $('#unit').parent().show();
                });
                $('#unit').on('change', function () {
                    $('#make').parent().show();
                    $('#model').parent().show();
                    $('#serial').parent().show();
                    $('#eq_id').parent().show();
                    $('#min_range').parent().show();
                    $('#max_range').parent().show();
                    $('#resolution').parent().show();
                    $('#accuracy').parent().show();
                    $('#quantity').parent().show();
                    $('#add-row').parent().show();
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
                                $('select[name="capability"]').empty();

                                $('select[name="capability"]').append('<option disabled selected>-- Select Capability</option>');
                                $.each(data['capabilities'], function (key, value) {
                                    $('select[name="capability"]').append('<option value="' + value.id + '">' + value.name + ' - ' + value.max_range + '</option>');
                                });
                                $('select[name="unit"]').empty();
                                $('select[name="unit"]').append('<option disabled selected>-- Select Unit</option>');
                                $.each(data['unit'], function (key, value) {
                                    $('select[name="unit"]').append('<option value="' + value + '">' + key + '</option>');
                                });

                                $('#capability').parent().show();
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
                    var url="https://aimslims.com/api/validate-rfq-items";
                    var data=new FormData(this);
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: data ,
                        processData: false,
                        contentType: false,
                        dataType:'JSON',
                        beforeSend: function () {
                            $('.loader-line').fadeIn();
                        },
                        success: function(data) {
                            $('.loader-line').hide();
                            $('#not-available').remove();
                            $('.items-table').append('<tr id="data-'+data.id+'"><td> <i class="fa fa-times-circle text-danger tbl-remove-item" data-id="'+data.id+'"></i> '+data.capability_name+'</td> <td>'+data.parameter_name+'</td> <td>'+data.unit_name+'</td> <td>'+data.make+'</td> <td>'+data.model+'</td> <td>'+data.serial+'</td> <td>'+data.eq_id+'</td> <td>'+data.min_range+','+data.max_range+'</td> <td>'+data.resolution+'</td> <td>'+data.accuracy+'</td> <td>'+data.location+'</td> <td>'+data.quantity+'</td> </tr>');
                            formdata.push(data);
                            getParameters();
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

                        },
                        error: function(xhr) {
                            $('.loader-line').hide();
                        }
                    });
                }));
                $('.items-table').on('click','.tbl-remove-item',function () {
                    var id=$(this).attr('data-id');
                    $('#data-'+id).remove();
                    formdata = jQuery.grep(formdata, function(value) {
                        return value.id!=id;
                    });
                });
                var parameteradd=false;
                $('#type').on('change',function () {
                    if (parameteradd == false){
                        $("#parameter").append($('#parameters').html()).select2();
                    }
                    parameteradd=true;
                    if ($(this).val()==1){
                        $('#parameter').val(0).trigger('change');
                    } else{
                        $('#parameter option').each(function () {
                            if($(this).attr('disabled')){
                                $(this).prop('selected', true).trigger('change');
                            }else{
                                $(this).prop('selected', false);
                            }
                        });
                    }
                    if ($(this).val()==2){
                        $('.non-listed-capability').show();
                        $('.listed-capability').hide();
                    } else{
                        $('.non-listed-capability').hide();
                        $('.listed-capability').show();
                    }
                });

                $("#add_form").on('submit', (function (e) {
                    e.preventDefault();
                    var next = {'type': 'reload'};
                    cstore(this, "{{url('w.online.customer.store')}}", next);
                }));
                $(".left, .right").on('click', function () {
                    var inputField = $("#quantity");
                    var currentQty = parseInt(inputField.val());

                    if ($(this).hasClass('left')) {
                        if (currentQty > 1) {
                            inputField.val(currentQty - 1);
                        }
                    } else {
                        inputField.val(currentQty >= 1 ? currentQty + 1 : 1);
                    }
                });
                $(".submit-rfq").on('click', (function (e) {
                    e.preventDefault();
                    var url="{{url('w.submit.rfq')}}";
                    var data={'data':formdata,'customer':'{{1}}',_token:'{{csrf_token()}}'};
                    var button = $(this);
                    var previous = $(button).html();
                    button.attr('disabled', 'disabled').html('Processing <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');

                    $.ajax({
                        url: url,
                        type: "POST",
                        data: data ,
                        dataType:'JSON',
                        beforeSend: function () {
                            $('.loader-line').fadeIn();
                        },
                        success: function(data) {
                            $('.loader-line').hide();
                            button.attr('disabled', null).html(previous);
                            swal('success', data.success, 'success').then(function () {
                                location.reload();
                            });
                        },
                        error: function(xhr) {
                            $('.loader-line').hide();
                            button.attr('disabled', null).html(previous);
                            erroralert(xhr);
                        }
                    });
                }));

                $('.titleWrapper').click(function(){
                    var toggle = $(this).next('div#descwrapper');
                    $(toggle).slideToggle("slow");
                });
                $('.inactive').click(function(){
                    $(this).toggleClass('inactive active');
                });
                get_time();

                window.setInterval(function(){
                    get_time();
                }, 10*1000);

            });

        </script>
    @endpush
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
    </style>
@endsection