<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/form-pages.css')}}">
    <title>Sign Up</title>
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
    <div class="form-img-wrap d-sm-block d-none">

    </div>
    <!-- End Of From Image Wrap -->

    <!-- Form Content Container -->
    <div class="form-content-container">
        <!-- Form Container Header -->
        <div class="form-container-header px-5 py-3">
            <!-- Main Title -->
            <h2 class=" main-font text-white">Food Lovers Daily</h2>
            <!-- End Of Main Title -->

            <!-- Sub Title -->
            <h5 class="text-white txt-italics secondary-font">Food, Recipe's and Health Tips</h5>
            <!-- End Of Sub Title -->
        </div>
        <!-- End Of Form Container Header -->

        <!-- Card: Form Content -->
        <div class="card form-content border-0">
            <!-- Card Body -->
            <div class="card-body px-5">
                <!-- Card Title -->
                <h5 class="display-6 secondary-font card-title mb-4">Sign Up</h5>
                <!-- End Of Card Title -->

                <!-- Form -->
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <!-- Row -->
                    <div class="row">
                        <!-- Form Group -->
                        <div class="form-group col-sm-6 mb-3">
                            <label for="" class="form-label">First name</label>
                            <input type="text" name="first_name" class="form-control form-control-lg bg-light {{$errors->has('first_name')? 'is-invalid' : ' '}}" value="{{old('first_name')}}">
                            <small class="text-danger">{{$errors->first("first_name")}}</small>
                        </div>
                        <!-- End Of Form Group -->

                        <!-- Form Group -->
                        <div class="form-group col-sm-6 mb-3">
                            <label for="" class="form-label">Last name</label>
                            <input type="text" name="last_name" class="form-control form-control-lg bg-light {{$errors->has('last_name')? 'is-invalid' : ' '}}" value="{{old('last_name')}}">
                            <small class="text-danger">{{$errors->first("last_name")}}</small>
                        </div>
                        <!-- End Of Form Group -->

                    </div>
                    <!-- End Of Row -->

                    <!-- Form Group -->
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control form-control-lg bg-light {{$errors->has('email')? 'is-invalid' : ' '}}" value="{{old('email')}}">
                        <small class="text-danger">{{$errors->first("email")}}</small>
                    </div>
                    <!-- End Of Form Group -->

                    <!-- Row -->
                    <div class="row">
                        <!-- Form Group -->
                        <div class="form-group col-sm-6 mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control form-control-lg bg-light {{$errors->has('password')? 'is-invalid' : ' '}}" value="{{old('password')}}">
                            <small class="text-danger">{{$errors->first("password")}}</small>
                        </div>
                        <!-- End Of Form Group -->     
                        
                        <!-- Form Group -->
                        <div class="form-group col-sm-6 mb-3">
                            <label for="" class="form-label">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control form-control-lg bg-light {{$errors->has('confirm_password')? 'is-invalid' : ' '}}" value="{{old('confirm_password')}}">
                            <small class="text-danger">{{$errors->first("confirm_password")}}</small>
                        </div>
                        <!-- End Of Form Group -->  

                    </div>
                    <!-- End Row -->

                    <!-- Form Group -->
                    <div class="form-group my-3">
                        <!-- button and redirect Link -->
                        <div class="btn-redirect-link-wrap row align-items-center">
                            <!-- Redirect Link -->
                            <p class="card-text col-sm-6">Already have an account? <span class="text-primary"><a href="{{route('sign-in')}}" class="">Sign In</a></span></p>
                            <!-- End Of Redirect Link -->

                            <!-- Call To Action Button-->
                            <button id="sign-btn" type="submit" class="btn btn-lg col-sm-6">Sign Up</button>
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