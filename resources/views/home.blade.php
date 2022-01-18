@extends('templates.master-site')

@section('page-title')
    Home
@endsection

@section('site-content')
    
<!-- Landing -->
<div id="landing" class="landing">
    <!-- Overlay -->
    <div class="overlay d-flex align-items-center">
        <!-- Container -->
        <div class="container">
            <!-- Text Content Wrap -->
            <div class="text-content-wrap col-sm-6">
                <!-- Sub Title -->
                <h4 class=" secondary-font txt-italics text-white"><b>Food, Recipe's and Health Tips</b></h4>
                <!-- Sub Title -->

                <!-- Main Title -->
                <h1 class="main-font text-white">Healthy food does not have to taste like cardboard</h1>                    
                <!-- End Of Main Title -->

                <!-- Sample Text -->
                <div class="sample-text text-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, 
                    recusandae provident aliquam corporis tempore veritatis adipisci aliquid eligendi necessitatibus quo ab odit libero explicabo nam!
                </div>
                <!-- End Of Sample Text -->

                <!-- Call To Action Button Wrap -->
                <div class="button-wrap d-flex align-items-center my-4">
                    <a href="" class="btn btn-lg btn-warning me-4" role="button">Learn More</a>
                    <a href="" class="btn btn-lg main-bg-dark-color" role="button">Sign Up</a>
                </div>
                <!-- End Of Call To Action Button Wrap -->
            </div>
            <!-- End Of Text Content Wrap -->                
        </div>
        <!-- End Of Container -->
    </div>
    <!-- End Of Overlay -->
</div>
<!-- End Of Landing -->


<!-- About / Short Bio -->
<div id="about" class="about main-bg-dark-color py-5" id="about">
    <!-- Container -->
    <div class="container">
        <h2 class="main-font text-white">About</h2>
        <p class="my-3">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Aliquam, error deserunt. 
            Sapiente ab error incidunt neque unde illum totam deleniti repudiandae. 
            Pariatur ipsum sunt rerum labore provident ut, perspiciatis nisi est doloribus veritatis repellat nihil magni ducimus ea voluptas consequuntur ab animi maiores laborum hic laboriosam. Corporis nesciunt maiores ad, vitae, 
            quis numquam eius esse, pariatur ipsa soluta voluptate quasi. Et dolorum, corrupti ex dolores deserunt nobis repellendus eum sequi dicta earum! Ad, vero incidunt?
        </p>
        <button class="btn btn-lg btn-warning my-3">Learn More</button>
    </div>
    <!-- End Of Container -->
</div>
<!-- End Of About / Short Bio -->

<!-- Recipes Preview Block -->
<div class="recipes-preview-block bg-white p-5 ps-sm-5 p-sm-0 text-sm-start text-center">

    <!-- Recipe Content -->
    <div class="recipe-content py-sm-5 px-sm-5 text-sm-start text-center w-sm-25">
        <!-- Sub Heading -->
        <h4 class="secondary-font txt-italics">View Some of our Recipe's</h4>
        <!-- End Of Sub Heading -->

        <!-- Main Heading -->
        <h1 class="main-font">
            Healthy Breakfast Tips
            to start the day with
        </h1>
        <!-- End Of Main Heading -->

        <!-- Sub Text -->
        <p class="sub-text pe-4">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Rem, iste distinctio. Minima autem dolore quod accusamus illo, 
            consequatur error eos quae eligendi aperiam adipisci officia blanditiis pariatur, 
            quibusdam ab deleniti.
        </p>
        <!-- Sub Text -->

        <!-- Call to action button -->
        <a href="" class="btn btn-lg btn-warning shadow-sm border">View More</a>
        <!-- End Of Call to action button -->

    </div>
    <!-- End Of Recipe Content -->

    <!-- Image Container -->
    <div class="img-container d-none d-sm-block w-100">

    </div>
    <!-- End Of Image Container -->            

</div>
<!-- End Of Recipes Preview Block -->


<!-- Tips Block -->
<div class="tips-block main-bg-dark-color py-5">
    <!-- Conatiner -->
    <div class="container">
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="column col-sm-4">
                <!-- Card -->
                <div class="card bg-transparent">
                    <!-- Card Body -->
                    <div class="card-body">
                        <!-- Card Title -->
                        <h3 class="main-font card-title">Health Tips</h3> 
                        <!-- End Of Card Title -->
                        
                        <!-- Card Text -->
                        <p class="card-text secondary-font text-white">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Perferendis similique enim rem dignissimos illum atque quaerat fugiat odio ducimus possimus.
                        </p>
                        <!-- End Of Card Text -->
                    </div>
                    <!-- End Of Card Body -->
                </div>
                <!-- End Of Card -->

            </div>
            <!-- End Of Column -->

            <!-- Column -->
            <div class="column col-sm-4">
                <!-- Card -->
                <div class="card bg-transparent">
                    <!-- Card Body -->
                    <div class="card-body">
                        <!-- Card Title -->
                        <h3 class="main-font card-title">Community</h3> 
                        <!-- End Of Card Title -->
                        
                        <!-- Card Text -->
                        <p class="card-text secondary-font text-white">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Perferendis similique enim rem dignissimos illum atque quaerat fugiat odio ducimus possimus.
                        </p>
                        <!-- End Of Card Text -->

                        
                    </div>
                    <!-- End Of Card Body -->
                </div>
                <!-- End Of Card -->

            </div>
            <!-- End Of Column -->
            
            
            <!-- Column -->
            <div class="column col-sm-4">
                <!-- Card -->
                <div class="card bg-transparent">
                    <!-- Card Body -->
                    <div class="card-body">
                        <!-- Card Title -->
                        <h3 class="main-font card-title">Recipes</h3> 
                        <!-- End Of Card Title -->
                        
                        <!-- Card Text -->
                        <p class="card-text secondary-font text-white">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Perferendis similique enim rem dignissimos illum atque quaerat fugiat odio ducimus possimus.
                        </p>
                        <!-- End Of Card Text -->
                    </div>
                    <!-- End Of Card Body -->
                </div>
                <!-- End Of Card -->
            </div>
            <!-- End Of Column -->                

        </div>
        <!-- End Of Row -->
    </div>
    <!-- End Of Container -->
</div>
<!-- End Of Tips Block -->

<!-- Blog Preview Content Block -->
<div class="blog-preview-content-block bg-white py-5">
    <!-- Container -->
    <div class="container">
        <!-- Main Heading -->
        <h3 class="main-font">Recent Blog Posts</h3>
        <!-- End Of Main Heading -->

        <!-- Sub Heading -->
        <h5 class="secondary-font txt-italics mb-3">Food, Recipe's and Health Tips</h5>
        <!-- End Of Sub Heading -->

        <!-- Row -->
        <div class="row">
            @if (count($posts) > 0)
                @foreach ($posts as $post)
                    <!-- Column -->
                    <div class="column col-sm-4">
                        <!-- Card -->
                        <div class="card border-0">
                            <!-- Card Image -->
                            <img src="{{asset('storage/images') . '/' . $post->image_path}}" class="card-img-top" alt="breakfast-ideas">
                            <!-- End Of Card Image -->
                            <!-- Card Body -->
                            <div class="card-body">
                                <!-- Blog Topic -->
                                <h5 class="card-text main-font">{{$post->title}}</h5>
                                <!-- End Of Blog Topic -->

                                <!-- Author -->
                                <p class="card-text secondary-font txt-italics d-flex">Author: <span class="ms-auto"><b>{{ucfirst($post->user->first_name) . " " . ucfirst($post->user->last_name) }}</b></span></p>
                                <!-- End Of Author -->
                                
                                <!-- Date Published -->
                                <p class="card-text secondary-font txt-italics d-flex">Published: <span class="ms-auto"><b>{{$post->created_at->diffForHumans()}}</b></span></p>
                                <!-- End Of Date Published -->

                                <!-- Sub Text -->
                                <p class="card-text secondary-font">
                                    {!! Str::words($post->body, 30, "...") !!}
                                </p>
                                <!-- End Of Sub Text -->
                               
                                <!-- Call to action Button -->
                                <a href="" class="btn btn-lg btn-warning shadow-sm">View More</a>
                                <!-- ENd Of Call to action Button -->
                            </div>
                            <!-- End Of Card Body -->
                        </div>
                        <!-- End Of Card -->
                    </div>
                    <!-- End Of Column -->                     
                @endforeach                
            @else
                <div class="card border-0">
                    <div class="card-body">
                        <h2 class="main-font">Join our community of food fanatics</h2>
                        <p class="lead secondary-font">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Perferendis nihil, iure possimus maxime vero atque voluptatem dolores fugiat quam nisi non inventore neque magnam ab maiores, 
                            obcaecati voluptatum labore libero.
                        </p>    
                        <a href="" class="btn btn-lg btn-waring">Sign Up</a>                    
                    </div>
                </div>
            @endif
        </div>
        <!-- End Of Row -->
    </div>
    <!-- End Of Container -->
</div>
<!-- End Of Blog Preview Content Block -->

<!-- Contact Content Block -->
<div id="contact" class="contact-block py-5">

    <!-- Conatiner -->
    <div class="container d-flex justify-content-center">
        <!-- Contact Form Contents Wrap -->
        <div class="contact-content-form-wrap py-3">
            <!-- Card: Contact Form  -->
            <div class="card col-sm-6">
                <!-- Card Body -->
                <div class="card-body">
                    <h1 class="main-font mb-3">Get In Touch</h1>
                    <!-- Contact Form -->
                    <form action="{{route('contact')}}" method="post">
                        @csrf
                        <!-- Row -->
                        <div class="row">
                            <!-- Form Group -->
                            <div class="form-group col-sm-6">
                                <label for="" class="form-label">First name</label>
                                <input type="text" name="first_name" class="form-control form-control-lg">
                                <small class="text-danger">{{$errors->first("first_name")}}</small>
                            </div>
                            <!-- End Of Form Group -->

                            <!-- Form Group -->
                            <div class="form-group col-sm-6">
                                <label for="" class="form-label">Last name</label>
                                <input type="text" name="last_name" class="form-control form-control-lg">
                                <small class="text-danger">{{$errors->first("last_name")}}</small>
                            </div>
                            <!-- End Of Form Group -->                                
                        </div>
                        <!-- End Of Row -->

                        <!-- Form Group -->
                        <div class="form-group my-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control form-control-lg">
                            <small class="text-danger">{{$errors->first("email")}}</small>
                        </div>
                        <!-- End Of Form Group --> 
                       
                        <!-- Form Group -->
                        <div class="form-group my-3">
                            <label for="" class="form-label">Message</label>
                            <textarea name="message_body" id="" cols="30" rows="5" class="form-control form-control-lg"></textarea>
                            <small class="text-danger">{{$errors->first("message_body")}}</small>
                        </div>
                        <!-- End Of Form Group -->                             
                        
                        <!-- Form Group -->
                        <div class="form-group my-3">
                            <button class="btn btn-lg btn-dark">Submit</button>
                        </div>
                        <!-- End Of Form Group --> 
                    </form>
                    <!-- End Of Contact Form -->
                </div>
                <!-- End Of Card Body -->
            </div>
            <!-- End Of Card: Contact Form  -->

            <!-- Contact Image Container -->
            <div class="contact-img-container p-lg-5 d-none d-sm-block col-sm-6 d-flex flex-column align-items-center justify-content-center">
                <h1 class="main-font text-white">Food Lovers Daily</h1>
                <h5 class="secondary-font txt-italics text-white mb-3"><b>Food, Recipe's and Health Tips</b></h5>
            </div>
            <!-- End Of Contact Image Container -->
        </div>
        <!-- End Of Contact Form Contents Wrap -->
    </div>
    <!-- End Of Conatiner -->
    
</div>
<!-- End Of Contact Content Block -->

<!-- Footer Content -->
<div class="footer-content main-bg-dark-color py-5">

    <!-- Container -->
    <div class="container">
        <!-- Row -->
        <div class="row">

            <!-- Column -->
            <div class="column col-sm-4">
                <!-- Card: Social Media Icons -->
                <div class="card bg-transparent">
                    <!-- Card Body -->
                    <div class="card-body">
                        <h3 class="card-title main-font mb-3">About</h3>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Blanditiis alias labore consequuntur, similique tenetur est velit fugiat? 
                        Itaque iure fuga eos repellat odio repudiandae quis dignissimos distinctio odit! 
                    </div>
                    <!-- End Of Card Body -->
                </div>
                <!-- End Of Card: Social Media Icons -->
            </div>
            <!-- End Of Column -->             

            <!-- Column -->
            <div class="column col-sm-4">
                <!-- Card: Social Media Icons -->
                <div class="card bg-transparent">
                    <!-- Card Body -->
                    <div class="card-body">
                        <h5 class="card-title secondary-font mb-3">Social Media</h5>
                        <div><i class="fab me-2 fa-facebook" aria-hidden="true"></i>Facebook</div>
                        <div><i class="fab me-2 fa-twitter" aria-hidden="true"></i>Twitter</div>
                        <div><i class="fab me-2 fa-instagram" aria-hidden="true"></i>Instagram</div>
                        <div><i class="fab me-2 fa-youtube" aria-hidden="true"></i>Youtube</div>
                        <div><i class="fab me-2 fa-linkedin" aria-hidden="true"></i>LinkedIn</div>
                    </div>
                    <!-- End Of Card Body -->
                </div>
                <!-- End Of Card: Social Media Icons -->
            </div>
            <!-- End Of Column -->

            <!-- Column -->
            <div class="column col-sm-4">
                <!-- Card: Social Media Icons -->
                <div class="card bg-transparent">
                    <!-- Card Body -->
                    <div class="card-body">
                        <h5 class="card-title secondary-font mb-3">Navigation</h5>
                        <div>Home</div>
                        <div>About</div>
                        <div>Blog</div>
                        <div>Recipes</div>
                        <div>Contact</div>
                    </div>
                    <!-- End Of Card Body -->
                </div>
                <!-- End Of Card: Social Media Icons -->
            </div>
            <!-- End Of Column -->   

        </div>
        <!-- Row -->
    </div>
    <!-- End Of Container -->
</div>
<!-- End Of Footer Content -->    


@endsection