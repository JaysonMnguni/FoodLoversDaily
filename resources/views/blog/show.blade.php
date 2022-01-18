@extends('templates.master-site')

@section('page-title')
    Blog
@endsection

@section('site-content')
    <!-- Container -->
    <div class="container " style="margin-top: 150px;">
        <!-- Card -->
        <div class="card">
            <!-- Card Body -->
            <div class="card-body">
                <h1 class="main-font display-4 card-title">{{$post->title}}</h1>

                <!---Wrap -->
                <div class="wrap d-flex align-items-center">
                    <!-- Author Details and Time Stamp -->
                    <div>
                        <h5 class="card-title secondary-font txt-italics"><b>Author: </b>{{ucfirst($post->user->first_name) . " ". ucfirst($post->user->last_name)}}</h5>
                        <h5 class="card-title secondary-font txt-italics"><b>Published:</b> {{$post->created_at->diffForHumans()}}</h5>                    
                    </div>
                    <!-- End Of Author Details and Time Stamp -->
                    
                    <!-- Button Wrap -->
                    <div class="button-wrap d-flex align-items-center ms-auto">
                        @auth
                            <a href="{{route("app.dashboard")}}" class="shadow btn btn-light border border-secondary me-2"> <i class="fa fa-arrow-alt-circle-left me-1"></i> Back</a>
                        
                            @if ($post->user_id == auth()->user()->id)
                                <a href="{{route("blog.edit", $post->id)}}" class="shadow btn btn-info me-2"> <i class="fa fa-edit me-1"></i> Edit</a>
                            @endif
                        @endauth

                        @guest
                            <a href="{{route("blog.index")}}" class="shadow btn btn-light border border-secondary me-2"> <i class="fa fa-arrow-alt-circle-left me-1"></i> Back</a>
                        @endguest


                    </div>
                    <!-- End Of Button Wrap -->
                </div>
                <!-- End Of Wrap -->

                <!-- Featured Image -->
                <img class="my-3" style="object-fit: cover" src="{{asset('storage/images') . '/' . $post->image_path}}" width="100%" height="450px" alt="">
                <!-- End Of Featured Image -->

                <p class="card-text mb-5 lead secondary-font">
                    {!! $post->body !!}
                </p>               

            </div>
            <!-- End Of Card Body -->
        </div>
        <!-- End Of Card -->
    </div>
    <!-- End Of Container -->

@endsection