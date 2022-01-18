@extends('templates.master-site')

@section('page-title')
    Blog
@endsection

@section('site-content')
    <!-- Container -->
    <div class="container" style="margin-top: 150px">
        <!-- Page Heading -->
        <div id="page-heading" class="d-flex align-items-center mb-3">
            <h3 class="display-5 main-font">Latest Blog Posts</h3>

        </div>
        <!-- End Of Page Heading -->  
        
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <!-- Card -->
                <div class="card mb-3" >
                    <!-- Row -->
                    <div class="row g-0">
                    <!-- Image Column --> 
                    <div class="col-md-4 ">
                        <img src="{{asset('storage/images/') ."/". $post->image_path}}" class="img-fluid rounded-start" style="height:100%; object-fit:cover" alt="...">
                    </div>
                    <!-- End Of Image Column -->

                    <!-- Blog Content Column -->
                    <div class="col-md-8">
                        <!-- Card Body -->
                        <div class="card-body">
                            <h6 class="card-title main-font display-6">{{$post->title}}</h6>
                            <p class="card-text">{!! Str::words($post->body, 30, '...') !!}</p><br>
                            <div class="d-flex align-items-center">
                                <a href="{{route('blog.post', [$post->slug])}}" class="btn btn-lg btn-warning me-3">View More</a>
                                <p class="card-text"><small class="text-muted">{{$post->updated_at->diffForHumans()}}</small></p>
                            </div>
                        </div>
                        <!-- End Of Card Body -->
                    </div>
                    <!-- End Of Blog Content Column -->
                    </div>
                    <!-- End Of Row -->
                </div>
                <!-- End Of Card -->                
            @endforeach
        @else
            <!-- Card text -->
            <div class="card-text text-center">
                <b>Current no blogs posts</b>
            </div>
            <!-- End Of Card text -->

        @endif

        
            {{ $posts->links() }}
        
    
    </div>
    <!-- End Of Container -->


@endsection

