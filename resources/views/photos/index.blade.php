
@extends('layouts.app')

@section('content')
<div class="container">
       

        <div id="main" class="row">
            <div id="sidebar" class="col-mid-4">
                @include('includes.sidebar')
            </div>

            <div class="row">
                <div class="col-mid-4">
                        <h3 class="box-title">Photos of the week</h3>
            </div>
                    
           
           

      
                           
                         
                            
      <div class="fullwidth-block">
            <div class="container">
                <div class="project-list">
                    @if(count($photos) > 0)
                        @foreach($photos as $photo)
                        <div class="project">
								<div class="project-content">
                                        <figure class="project-image"><img src="/storage/file/{{$photo->file}}" alt="Project"></figure>
                                        <h2><a href="/photos/{{$photo->image_id}}">  {{$photo->name}}</a>
                                        <h2><a href="{{url('/upvote/'.$photo->image_id)}}"><img src="images/up.png" width="42" height="42"></a> {{$photo->upvotes}}</h2>
                                        <h2><a href="{{url('/downvote/'.$photo->image_id)}}"><img src="images/down.png" width="42" height="42"></a> {{$photo->downvotes}}</h2>
                                       
                                       
                                </div>
                        </div>
                        @endforeach
                    @else 
                            <p>No photos found!</p>
                    @endif
                </div>
               
            </div>
        </div>
                        
            
        </div>
    </div>
@endsection