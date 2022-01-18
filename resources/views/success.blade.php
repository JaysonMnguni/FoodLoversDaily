@extends('templates.master-site')

@section('page-title')
    Create Blog Post
@endsection

@section('site-content')
    <!-- Container -->
    <div class="container" style="margin-top: 150px">

        @if (session("success"))
            <div class="alert alert-success border border-success text-center">
                <h5 class="display-3 secondary-font">
                    {{session("success")}}
                </h5>
            </div>
        @else
            
            <div class="card mb-3 shadow">
                <div class="card-body">
                    <p class="card-text text-center">No Messages To Display!</p>
                </div>
            </div>
        @endif

        <a href="{{route('site.home')}}" class="btn btn-lg btn-light border border-secondary secondary-font shadow"><i class="fa fa-home me-2"></i>Back</a>

    </div>
    <!-- End Of Container -->
@endsection