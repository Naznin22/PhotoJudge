<div class="owl-carousel owl-theme">
        
        @foreach($thisuser->photos as $photo)
    <div class="container">
        
            <img src="/storage/file/{{$photo->file}}" alt="hi">
            
        
    </div>
      
    @endforeach
   
  </div>