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
                     @foreach ($menu as $val)
                        <?php
                           $Submenu = App\Models\Submenu::where('menu_id', $val->id)->get();
                        ?>
                        <li class="nav-item dropdown">
                           <a class="nav-link" href="{{ $val->slug }}" data-bs-toggle="dropdown">{{ $val->menu_name }}</a>
                           <ul class="dropdown-menu sub-menu-items">
                              @foreach($Submenu as $subData)
                                 <li>
                                    <a class="dropdown-item" href="#">
                                       <i class="fa fa-users"></i>
                                       <span>{{$subData->submenu_name}}</span>
                                    </a>
                                 </li>
                              @endforeach
                           </ul>
                        </li>
                     @endforeach   
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
         <!-- <a href="index.html" class="navbar_brand_mobile">
            <img style="height: 80px; width: 195px;" src="" alt="">
         </a> -->
         <ul>
            @foreach ($menu as $val)
               <?php
                  $Submenu = App\Models\Submenu::where('menu_id', $val->id)->get();
               ?>
               <li class="has-submenu">
                  <a id="btn_sub" href="{{ $val->slug }}" data-submenu="About">{{ $val->menu_name }}</a>
                  <div id="About" class="submenu">
                     <!-- <div class="submenu-header">
                        <a href="#" data-submenu-close="About" id="">
                           <i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back </a>
                     </div> -->
                     <ul>
                        @foreach($Submenu as $subData)
                           <li>
                              <a href="#">{{$subData->submenu_name}}</a>
                           </li> 
                        @endforeach
                     </ul>
                  </div>
               </li>
            @endforeach
         </ul>
      </div>
      <main>
         @foreach ($header as $val)
            <a href="index.html" class="navbar_brand_mobile">
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