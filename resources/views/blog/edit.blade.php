@extends('templates.master-site')

@section('page-title')
    Edit Blog Post
@endsection

@section('site-content')
    <!-- Container -->
    <div class="container" style="margin-top: 150px">

        @if (session("success"))
            <!-- Display Messages -->
            <div class="alert alert-success shadow text-center border border-success">
                {{session("success")}}
            </div>
            <!-- End Of Display Messages -->
        @endif

        <!-- Page Heading -->
        <div id="page-heading" class="d-flex align-items-center mb-3">
            <h3 class="display-5 main-font">Edit a Post</h3>

                <!-- Create Post Button -->
                <a href="{{route("app.dashboard")}}" class="btn btn-lg btn-light border border-secondary shadow ms-auto"><i class="fa fa-arrow-alt-circle-left me-2"></i> Back</a>
                <!-- End Of Create Post Button -->   
        </div>
        <!-- End Of Page Heading -->
        
        <!-- Create Post Form Card -->
        <div class="card">
            <!-- Card Body -->
            <div class="card-body">
                <!-- Create Post Form  -->
                <form action="{{route('blog.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <!-- Form Group -->
                    <div class="form-group mb-3">
                        <label for="" class="form-label display-6">Post Title</label>
                        <input type="text" name="title" class="form-control form-control-lg bg-light {{ $errors->has('title')? 'is-invalid': ''}}" value="{{$post->title}}">
                        <small class="text-danger">{{$errors->first("title")}}</small>
                    </div>
                    <!-- End Of Form Group -->

                    <!-- Form Group -->
                    <div class="form-group mb-3">
                        <label for="" class="form-label display-6">Post Body / Content</label>
                        <textarea id="post-body" name="post-body" class="form-control form-control-lg bg-light  {{ $errors->has('post-body')? 'is-invalid': ''}}" id="" cols="30" rows="3"> {{$post->body}}</textarea>
                        <small class="text-danger">{{$errors->first("post-body")}}</small>
                    </div>
                    <!-- End Of Form Group -->  
                    
                    <!-- Form Group -->
                    <div class="form-group mb-3">
                        <label for="" class="form-label display-6">Post Featured Image</label>
                        <input type="file" class=" form-control form-control-lg {{ $errors->has('image')? 'is-invalid': ''}}" {{old("image")}} name="image" id="image">
                        <small class="text-danger">{{$errors->first("image")}}</small>
                    </div>
                    <!-- End Of Form Group -->  
                    
                    <!-- Form Group -->
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-lg btn-success">Create Post</button>
                    </div>
                    <!-- End Of Form Group -->                    
                </form>
                <!-- End Of Create Post Form  -->
            </div>
            <!-- End Of Card Body -->
        </div>
        <!-- End Of Create Post Form Card -->    
    </div>
    <!-- End Of Container -->


    @section('scripts')
    <script>
        tinymce.init({
        selector: 'textarea#post-body',
        height: 350
        });       
    </script>
    @endsection
@endsection