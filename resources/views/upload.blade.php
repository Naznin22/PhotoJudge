@extends('layouts.app')

@section('content')


<div id="sidebar" class="col-mid-4">
    @include('includes.sidebar')
</div>
<div class="container">
        {!! Form::open(['action' => 'photosController@store', 'method' =>'POST', 'enctype' => 'multipart/form-data' ]) !!}
           
           <div class="form-group">
                    {{ Form:: file('file')}}
            </div>  
            
            
            {{Form::submit('Submit',['class' => 'btn'])}}
            {!! Form::close() !!}
   
</div>
    
@endsection