@extends('templates.master-site')

@section('page-title')
    Blog
@endsection

@section('site-content')
    <!-- Container -->
    <div class="container" style="margin-top: 150px;">
        @if (session("success"))
            <!-- Display Messages -->
            <div class="alert alert-success shadow text-center border border-success">
                {{session("success")}}
            </div>
            <!-- End Of Display Messages -->
        @endif

        <!-- Page Heading -->
        <div class="page-heading d-flex align-items-center mb-3 ">
            <h5 class="main-font display-5">Your Posts</h5>

            <a href="{{route("blog.create")}}" class="btn btn-md btn-primary ms-auto shadow"><i class="fa fa-plus-circle me-1"></i> Create Post</a>
        </div>
        <!-- Page Heading -->

        <!-- Card -->
        <div class="card shadow" style="">
            <ul class="list-group list-group-flush">
                @if (count($posts) > 0)
                    <!-- List User Posts -->
                    @foreach ($posts as $post)
                    <li class="list-group-item d-flex align-items-sm-center flex-column flex-sm-row">
                        <div id="post-content" class="me-sm-auto">
                            <h5 class="main-font">{{$post->title}}</h5>
                            {{-- <p class="lead h6">{!! Str::words($post->body, 20, "...") !!}</p> --}}
                        </div>

                        <div class="d-flex align-items-sm-center ms-sm-auto ">
                          <a href="{{route("blog.post", $post->slug)}}" class="btn btn-sm btn-outline-success me-2"><i class="fa fa-eye me-1"></i> <span class="d-sm-inline d-none">View Post</span></a>
                            <a href="{{route("blog.edit", $post->id) }}" class="btn btn-sm btn-outline-primary me-2"><i class="fa fa-edit me-1"></i> <span class="d-sm-inline d-none">Edit Post</span></a>
                            <a  class="btn btn-sm btn-outline-danger me-2" onclick="event.preventDefault(); document.getElementById('delete-post').submit();">
                                <i class="fa fa-trash me-1"></i> <span class="d-sm-inline d-none">Delete Post</span>
                            </a>
                            
                            <form id="delete-post" action="{{route("blog.destroy", $post->id)}}" method="post">
                                @csrf
                                @method("DELETE")
                            </form>
                        </div>
                      </li>     
                                           
                    @endforeach   
                    <!-- End Of List User Posts -->               
                @else
                      <!-- Card Body -->
                      <div class="card-body">
                        <p class="card-text text-center">
                            <b>You currently have no posts</b>
                        </p>
                      </div>
                      <!-- Card Body -->
                @endif
                
            </ul>
        </div>
        <!-- End Of Card -->

    </div>
    <!-- End Of Container -->

@endsection