<header class="header header-style-3 megamenu-container bg-white sticky-header bg-white fixed-header" style="margin-bottom: -5px;">
   <!-- Header Area Start -->
   <!-- Header Bottom Area -->
   <div class="header-bottom-area">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <nav class="navbar navbar-expand-lg navbar-dark">
                  @foreach ($header as $val)
                     <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{ asset('img/' . $val->company_logo) }}" alt="SeeMove" style="height: 80px; width: 195px;">
                     </a>
                  @endforeach

                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="main_nav">
                     <ul class="navbar-nav mx-auto">
                        <li class="nav-item dropdown">
                           <a class="nav-link" href="{{url('/')}}">Home</a>
                           <ul class="dropdown-menu sub-menu-items"></ul>
                        </li>

                        <li class="nav-item dropdown">
                           <a class="nav-link" href="{{url('/about-us')}}">About Us</a>
                           <ul class="dropdown-menu sub-menu-items"></ul>
                        </li>
                        @foreach ($menu as $val)
                           <li class="nav-item dropdown">
                              <a class="nav-link" href="{{url('/')}}" data-bs-toggle="dropdown">{{ $val->menu_name }}</a>
                              <?php
                                 $Submenu = App\Models\Submenu::where('menu_id', $val->id)->get();
                              ?>
                              <ul class="dropdown-menu sub-menu-items">
                                 @foreach($Submenu as $subData)
                                    <li>
                                       <a class="dropdown-item" href="{{url('service_unit/'.$subData->slug)}}">
                                          <i class="fa fa-hand-o-right"></i>
                                          <span>{{$subData->submenu_name}}</span>
                                       </a>
                                    </li>
                                 @endforeach
                              </ul>
                           </li>
                        @endforeach  
                        
                        <li class="nav-item dropdown">
                           <a class="nav-link" href="{{url('/our-clients')}}">Our Clients</a>
                           <ul class="dropdown-menu sub-menu-items"></ul>
                        </li>

                        <li class="nav-item dropdown">
                           <a class="nav-link" href="{{url('/pricing')}}">Pricing</a>
                           <ul class="dropdown-menu sub-menu-items"></ul>
                        </li>

                        <li class="nav-item dropdown">
                           <a class="nav-link" href="{{url('/blog')}}">Blog</a>
                           <ul class="dropdown-menu sub-menu-items"></ul>
                        </li>

                        <li class="nav-item dropdown">
                           <a class="nav-link" href="{{url('/contact-us')}}">Contact Us</a>
                           <ul class="dropdown-menu sub-menu-items"></ul>
                        </li>

                        <li class="nav-item dropdown">
                           <a class="nav-link" href="{{url('/pay')}}">Pay</a>
                           <ul class="dropdown-menu sub-menu-items"></ul>
                        </li>
                     </ul>
                  </div>

                  @foreach ($header as $val)
                     <a href="tel:{{ $val->phone }}">
                        <i class="fa fa-phone"></i>{{ $val->phone }}
                     </a>
                  @endforeach
               </nav>
            </div>
         </div>
      </div>
   </div>
   <!--// Header Bottom Area -->

   <!-- Mobile Menu -->
   <div class="mobile_menu_header">
      <div id="menu_container" class="zeynep">
         <ul> 
            <li>
               <a href="{{url('/')}}">Home</a>
            </li>

            <li>
               <a href="{{url('/about-us')}}">About Us</a>
            </li>

            @foreach ($menu as $x => $val)
               <?php
                  $Submenu = App\Models\Submenu::where('menu_id', $val->id)->get();                 
               ?>
               
               <li class="has-submenu">
                  <a id=""  data-slug="{{ $val->slug }}" data-submenu="About">{{ $val->menu_name }}</a>
                  <div id="About{{$x}}" class="submenu">
                     <div class="submenu-header">
                        <a href="#" data-submenu-close="About" id="back_{{$x}}">
                           <i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back </a>
                     </div>
                     <ul>
                        @foreach($Submenu as $subData)
                           <li>
                              <a href="{{url('service_unit/'.$subData->slug)}}">{{$subData->submenu_name}}</a>
                           </li> 
                        @endforeach
                     </ul>
                  </div>
               </li>               
            @endforeach
            <li>
               <a href="{{url('/our-clients')}}">Our Clients</a>
            </li>

            <li>
               <a href="{{url('/pricing')}}">Pricing</a>
            </li>

            <li>
               <a href="{{url('/blog')}}">Blog</a>
            </li>

            <li>
               <a href="{{url('/contact-us')}}">Contact Us</a>
            </li>

            <li>
               <a href="{{url('/pay')}}">Pay</a>
            </li>
         </ul>
      </div>
      <main>
         @foreach ($header as $val)
            <a href="{{url('/')}}" class="navbar_brand_mobile">
               <img src="{{ asset('img/' . $val->company_logo) }}" alt="SeeMove" style="height: 80px; width: 195px;">
            </a>
         @endforeach
         <button id="menu_ctrl" type="button" class="btn-open first">
            <i class="fa fa-bars"></i>
         </button>
      </main>
      <div class="zeynep-overlay"></div>
   </div>
</header>