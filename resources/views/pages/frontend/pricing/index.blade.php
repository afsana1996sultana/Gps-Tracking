@extends('layout.frontend.master')
@section('main_content')
<style>
    .ab-single-organic-head h1 {
        font-size: 22px;
    }

    .ab-single-organic-head {
        padding: 20px 0px 1px;
    }

    .pkg-pricing-title{
        padding-top: 25px;
    }

    .section-title{
        padding-top: 20px; 
    }
</style>
<!-- Breacrumb Area -->
<div class="breadcrumb-option"  style="background:url(frontend/image/web-dev-banner-classic-it.jpg); no-repeat scroll center center;background-repeat: no-repeat; background-attachment: scroll; background-size: cover;" data-black-overlay="7">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="cr-breadcrumb text-center">
                    <h1>Pricing</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Pricing</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//Breacrumb Area -->


<!--Pricing Area -->
<div id="mrks_package_content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="pkg-pricing-title">
                    <h3>Our Package List</h3>
                </div>
            </div>
            <?php $counter = 1 ?>
            @foreach ($addpricing as $val)
                <div class="col-lg-3 col-sm-3">
                    <div class="ab-single-organic-package">
                        <div class="ab-single-organic-head p-padding0 text-center">
                            <a id="ord_title_{{$counter}}"><h3> {{ $val->title}} </h3></a>
                            <a id="ord_price_{{$counter}}"><h1>৳ {{ $val->price}} </h1></a>
                            <a id="ord_renew_{{$counter}}"><p> {{ $val->renew}} </p></a>               
                        </div>
                        <div class="organic-phage-content text-center">
                            <h4 class="phage-title"></h4>
                            <p> {{ $val->service1}} </p>
                            <p> {{ $val->service2}} </p>
                            <p> {{ $val->service3}} </p>
                            <p> {{ $val->service4}} </p>
                            <p> {{ $val->service5}} </p>
                            <p> {{ $val->service6}} </p>
                            <p> {{ $val->service7}} </p>
                            <p> {{ $val->service8}} </p>
                            <p> {{ $val->service9}} </p>
                            <p> {{ $val->service10}} </p>
                            <p> {{ $val->service11}} </p>
                            <p> {{ $val->service12}} </p>
                            <p> {{ $val->service13}} </p>
                            <p> {{ $val->service14}} </p>
                            <p> {{ $val->service15}} </p>
                            <p> {{ $val->service16}} </p>
                            <p> {{ $val->service17}} </p>
                        </div>
                        <div class="organic-phage-content text-center">
                            <h4 class="phage-title">GPS Traker </h4>
                        </div>
                        <div class="pkg-button ab-organic-btn text-center">
                            <button id="snd_order_{{$counter}}" value="247" class="loginFromOpenBtn doddle-btn fill order_btn">
                                <span></span>
                                <b></b>Order Now 
                            </button>
                        </div>
                    </div>
                </div>
            <?php $counter++ ?>
            @endforeach
        </div>
    </div>
</div>
<!--//Pricing Area -->

<div class="order_now_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="section_title">
                    <h4> Best GPS Traker Company in bangladesh </h4>
                </div>
            </div>
            <div class="col-md-4">
                <a href="{{url('/contact-us')}}">
                    <div class="order_now_btn">
                        <span>get a quote</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!--- brand section include --->
<div class="brand-logo-area_section" id="brand-logo-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h4>Valuable Clients</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="brand_logos_item">
                    <div class="owl-carousel owl-theme brand_logos_item_active">
                        @foreach ($client as $val)
                            <div class="item">
                                <div class="brand_logo_item_box">
                                    <a href="">
                                        <img src="{{ asset('img/' . $val->client_logo) }}" alt="client_logo">
                                    </a>
                                </div>

                                <div class="brand_logo_item_box">
                                    <a href="">
                                        <img src="{{ asset('img/' . $val->client_logo) }}" alt="client_logo">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="loginModal" class="modal fade loginModalOpen" tabindex="-1" data-focus-on="input:first">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>

            <div class="modal-body">
                <div class="commom-form login-form-new">
                    <div class="login-form-new-inner">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="section-title">
                                    <h2>Packege Information</h2>
                                </div>

                                <div class="form-input">
                                    <label>Packge Name <span>*</span></label>
                                    <input name="text" name="txtTitle" class="form-control" value="">
                                </div>

                                <div class="form-input">
                                    <label>Packge Price <span>*</span></label>
                                    <input name="text" name="txtPrice" class="form-control" value="">
                                </div>

                                <div class="form-input">
                                    <label>Renew <span>*</span></label>
                                    <input name="text" name="txtRenew" class="form-control" value="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="section-title">
                                    <h2>Order Information</h2>
                                </div>

                                <div class="form-input">
                                    <label>Name <span>*</span></label>
                                    <input name="text" id="txtName" name="txtName" class="form-control">
                                </div>

                                <div class="form-input">
                                    <label>Email <span>*</span></label>
                                    <input name="email" id="txtEmail" name="txtEmail" class="form-control">
                                </div>

                                <div class="form-input">
                                    <label>Phone <span>*</span></label>
                                    <input name="text" id="txtPhone" name="txtPhone" class="form-control">
                                </div>

                                <div class="form-input">
                                    <label>Address</label>
                                    <textarea name="txtAddress"class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button id="snd_order_{{$counter}}" class="btn btn-info" data-dismiss="modal">Order</button>
            </div>
        </div>
    </div>
</div>
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $('.order_btn').on('click', function(){
    var clicked_id_number = ($(this).attr('id').slice(10));
    var title_id = "ord_title_"+clicked_id_number;
    var title_val = $('#'+title_id).text();
    var price_id = "ord_price_"+clicked_id_number;
    var price_val = $('#'+price_id).text();
    var renew_id = "ord_renew_"+clicked_id_number;
    var renew_val = $('#'+renew_id).text();
    // console.log(clicked_id_number+" "+title_val+" "+price_val+" "+renew_val);
    $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: "order_store",       
    type: "POST",
    data: {
        title: title_val,
        price: price_val,
        renew: renew_val,
    },
    success: function( response ) {
        alert('Your Order has been submitted successfully');
    }
   });
}); 

$(document).ready(function() {
    $(".loginFromOpenBtn").click(function() {
        $(".loginModalOpen").modal();
    });
});
</script>
@endsection
@endsection