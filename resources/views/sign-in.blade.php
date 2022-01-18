<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/form-pages.css')}}">
    <title>Sign In</title>
</head>
<body>

    

    <!-- Social Media Icons Wrapper -->
    <div class="social-media-icons-wrap ">
        <!-- Icons -->
        <div><i class="fab fa-facebook fa-2x" aria-hidden="true"></i></div>
        <div><i class="fab fa-twitter fa-2x" aria-hidden="true"></i></div>
        <div><i class="fab fa-instagram fa-2x" aria-hidden="true"></i></div>
        <div><i class="fab fa-youtube fa-2x" aria-hidden="true"></i></div>
        <div><i class="fab fa-linkedin fa-2x" aria-hidden="true"></i></div>
        <!-- End Of Icons -->
    </div>
    <!-- End Of Social Media Icons Wrapper -->

    <!-- Form Page Image Wrap -->
    <div class="form-img-wrap d-none d-md-block">

    </div>
    <!-- End Of From Image Wrap -->

    <!-- Form Content Container -->
    <div class="form-content-container">
        <!-- Form Container Header -->
        <div class="form-container-header px-5 py-3">
            <!-- Main Title -->
            <h2 class="display-1 main-font text-white">Food Lovers Daily</h2>
            <!-- End Of Main Title -->

            <!-- Sub Title -->
            <h5 class="display-6 text-white txt-italics secondary-font">Food, Recipe's and Health Tips</h5>
            <!-- End Of Sub Title -->
        </div>
        <!-- End Of Form Container Header -->

        <!-- Card: Form Content -->
        <div class="card form-content border-0">
            <!-- Card Body -->
            <div class="card-body px-5">
                <!-- Card Title -->
                <h5 class="display-3 secondary-font card-title mb-4">Sign In</h5>
                <!-- End Of Card Title -->

                
                @if (count($errors) > 0)
                    <!-- Display Message -->
                    <div class="alert alert-danger border border-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>
                    <!-- End Of Display Message -->
                @endif
                
                @if (session("error"))
                    <!-- Display Error Message -->
                    <div class="alert alert-danger border border-danger text-center">
                        {{session("error")}}
                    </div>
                    <!-- End Of Display Error Message -->
                @endif

                <!-- Form -->
                <form action="{{route("login")}}" method="POST">
                    @csrf
                    
                    <!-- Form Group -->
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control form-control-lg bg-light {{$errors->has("email") ? 'is-invalid': ''}}">
                    </div>
                    <!-- End Of Form Group -->

                    <!-- Form Group -->
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg bg-light {{$errors->has("password") ? 'is-invalid': ''}}">
                    </div>
                    <!-- End Of Form Group -->

                    <!-- Form Group -->
                    <div class="form-group mb-3">
                        <!-- button and redirect Link -->
                        <div class="btn-redirect-link-wrap row align-items-center">
                            <!-- Redirect Link -->
                            <p class="card-text col-sm-6">Dont have an account? <a href="{{route('sign-up')}}" class="">Sign Up</a></span></p>
                            <!-- End Of Redirect Link -->

                            <!-- Call To Action Button-->
                            <button id="sign-btn" type="submit" class="btn btn-lg col-sm-6">Sign In</button>
                            <!-- End Of Call To Action Button-->
                        </div>
                        <!-- End Of button and redirect Link -->
                    </div>
                    <!-- End Of Form Group -->                    
                </form>
                <!-- End Of Form -->
                <a href="{{route('site.home')}}" class="btn btn-md btn-light border border-secondary"> Back</a>
            </div>
            <!-- End Of Card Body -->
        </div>
        <!-- End Of Card: Form Content -->

    </div>
    <!-- End Of Form Content Container -->
    
</body>
</html>