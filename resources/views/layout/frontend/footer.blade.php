<style>
.footer_contact_section {
    background: #f1f1f1;
    padding-bottom: 30px;
    padding-top: 30px;
}
.partner_logo{
    padding-bottom: 25px;
    padding-left: 35px;
}
.footer_top_seciton{
    padding-top: 35px;
}
</style>

<footer id="footer" class="footer-area"> 
    <div class="footer_top_seciton">
        <div class="footer_contact_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h4>Our Telecommunications Partners</h4>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row"> 
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="partner_logo">
                            <img src="{{url('frontend/image/airtel.png')}}" alt="SeeMove">
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="partner_logo">
                            <img src="{{url('frontend/image/banglalink.png')}}" alt="SeeMove">
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="partner_logo">
                            <img src="{{url('frontend/image/grameenphone.png')}}" alt="SeeMove">
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="partner_logo">
                            <img src="{{url('frontend/image/teletalk.png')}}" alt="SeeMove">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top-area footer_top_area_bg_img" style="background-image: url('frontend/image/footer-1.webp');">
        <div class="footer_area_bg_overlay">
            <div class="container-fluid">
                <div class="footer-widgets widgets">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="single-widget widget-quick-contact">
                                <h5 class="footer-widget-title">QUICK CONTACT</h5>
                                <ul>
                                @foreach ($footer as $val)
                                    <li>
                                        <span style="color:rgb(221, 221, 221)">Phone</span>
                                        <p>{{ $val->phone }}</p>
                                    </li>

                                    <li>
                                        <span style="color:rgb(221, 221, 221)">Email</span>
                                        <p>
                                            <a href="mailto:{{ $val->email }}" style="box-sizing: border-box; color: rgb(119, 119, 119); text-decoration-line: none; background-color: transparent; touch-action: manipulation; transition: all 0.3s ease-in-out 0s;">{{ $val->email }}</a>
                                        </p>
                                    </li>
                                    
                                    <li>
                                        <span style="color:rgb(221, 221, 221)">Address</span>
                                        <p>{{ $val->address }}</p>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="single-widget widget-latest-blog">
                                <h5 class="footer-widget-title">QUICK LINK</h5>
                                <ul>
                                @foreach ($quicklink as $val)
                                    <li>
                                        <a href="{{ $val->slug }}">{{ $val->name }}</a>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <div class="single-widget widget-quick-links">
                                <h5 class="footer-widget-title">Find ME</h5>
                                @foreach ($footer as $val)
                                    <img src="{{ asset('img/' . $val->find_logo) }}" class="responsive" alt="SeeMove" width="304" height="236"> 
                                @endforeach
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="single-widget footer-widget-about">
                                <h5 class="footer-widget-title">Get Touch in</h5>
                                <div class="social_link">
                                    @foreach ($sociallink as $val)
                                        <a href="{{ $val->slug }}">
                                            <i class="{{ $val->icon }}"></i>
                                        </a>
                                    @endforeach
                                </div>
                            </div>

                            <div class="single-widget widget-newsletter">
                                <form class="newsletter-form" id="ajaxnewsletter">
                                    @csrf
                                    <input name="txtEmail" id="txtEmail" type="email" placeholder="Your Email Address" required>
                                    <button class="cr-btn" id="snd_newsletter">
                                        <span>Subscribe</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
       
    $("#snd_newsletter").click(function(){

      $('#snd_newsletter').html('Please Wait...');
      $("#snd_newsletter"). attr("disabled", true);

      $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "newsletter_store",       
        type: "POST",
        data: {
            txtEmail: $('#txtEmail').val(),
        },
        success: function( response ) {
          $('#snd_newsletter').html('Subscribed');
          $("#snd_newsletter"). attr("disabled", false);
        
          $('#txtEmail').val('');

          alert('You are Successfully Subscribed in our Newsletter');
        }
       });
    });
    
</script>        

      