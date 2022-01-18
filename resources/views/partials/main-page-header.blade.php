    <!-- Main Page Header -->
    <div class="main-page-header">
        <!-- ribbon -->
        <div class="ribbon">
            <!-- Container -->
            <div class="container d-flex align-items-center">
                <span class="secondary-font"><i class="fas fa-envelope me-2" aria-hidden="true"></i>info@foodloversdaily.com</span>
            
                <!-- Icons Wrap -->
                <div class="icons-wrap ms-auto d-flex align-items-center">
                    <div><i class="fab mx-2 fa-facebook" aria-hidden="true"></i><span class="d-none d-md-inline">Facebook</span></div>
                    <div><i class="fab mx-2 fa-twitter" aria-hidden="true"></i><span class="d-none d-md-inline">Twitter</span></div>
                    <div><i class="fab mx-2 fa-instagram" aria-hidden="true"></i><span class="d-none d-md-inline">Instagram</span></div>
                    <div><i class="fab mx-2 fa-youtube" aria-hidden="true"></i><span class="d-none d-md-inline">Youtube</span></div>
                    <div><i class="fab mx-2 fa-linkedin" aria-hidden="true"></i><span class="d-none d-md-inline">LinkedIn</span></div>
                </div>
                <!-- End Of Icons Wrap -->            
            </div>
            <!-- End Of Container -->
        </div>
        <!-- End Of ribbon -->

        <!-- Navigation and Logo Container -->
        <div class="nav-and-logo-container py-2">
            <!-- Container -->
            <div class="container d-flex align-items-center">


                <!-- Logo Container -->
                <div class="logo-container">
                    <h3 class="main-font display-6 text-white">Food Lovers Daily</h3>
                    <h6 class=" secondary-font txt-italics text-white m-0">Food, Recipe's and Health Tips</h6>
                </div>
                <!-- End Of Logo Container -->

                <!-- Navigation Container -->
                <nav class="navigation ms-auto secondary-font d-none d-md-block">
                    <li><a href="{{route('site.home')}}">Home</a></li>
                    <li><a href="{{route('blog.index')}}">Blog</a></li>
                </nav>
                <!-- End Of Navigation Container -->

                @guest
                    <!-- Call To Action Button Wrapp -->
                    <div class="button-wrap d-flex align-items-center ms-4 d-none d-sm-block">
                        <a href="{{route('sign-in')}}" class="btn btn-outline-light me-3" role="button">Sign In</a>
                        <a href="{{route('sign-up')}}" class="btn btn-warning" role="button">Sign Up</a>
                    </div>
                    <!-- End Of Call To Action Button Wrapp --> 
                    
                    <!-- Mobile Menu -->
                    <div id="mobile-menu dropdrown" class="ms-auto d-sm-none">
                        <!-- Drop Down Toggle Button -->
                        <button type="button" class="btn btn-outline-light pe-2 dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Menu </button>
                        <!-- End Of Drop Down Toggle Button -->

                        <!-- Drop Down Menu -->
                        <ul class="dropdown-menu main-bg-dark-color dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item text-white " href="{{route("site.home")}}">Home</a></li>
                            <li><a class="dropdown-item text-white" href="{{route("blog.index")}}">Blog</a></li>
                            <li><a class="dropdown-item text-white" href="{{route("sign-in")}}">Sign In</a></li>
                            <li><a class="dropdown-item text-white" href="{{route("sign-up")}}">Sign Up</a></li>
                        </ul>
                        <!-- End Of Drop Down Menu -->
                    </div>
                    <!-- End Of Mobile Menu -->                    
                @endguest


                @auth
                <div class="dropdown dropright ms-3">
                    <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                     <i class="fa fa-user-circle"></i> <span class="d-sm-inline d-none">Welcome</span>: {{ucfirst(auth()->user()->first_name) . " " . ucfirst(auth()->user()->last_name)}}
                    </button>
                    <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton2">
                      <li><a class="dropdown-item d-flex align-items-center" href="{{route('app.dashboard')}}"><i class="fa fa-desktop me-2" aria-hidden="true"></i> Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li class=" dropdown-item">
                          <a class="dropdown-item" style="cursor: pointer" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out-alt me-2"></i> Logout</a>
                      </li>
                      
                        <form id="logout-form" class=" form-inline" action="{{route("logout")}}" method="POST">
                            @csrf
                        </form>
                      
                    </ul>
                  </div>                    
                @endauth

            </div>
            <!-- End Of Container -->
        </div>
        <!-- End Of Navigation and Logo Container -->

    </div>
    <!-- End Of Main Page Header -->