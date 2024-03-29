
@extends('layouts.app')

@section('content')

       

      
    <header class="nav-down responsive-nav hidden-lg hidden-md">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!--/.navbar-header-->
        <div id="main-nav" class="collapse navbar-collapse">
            <nav>
                <ul class="nav navbar-nav">
                    <li><a href="#top">Home</a></li>
                    <li><a href="#featured">Vote</a></li>
                    <li><a href="#projects">Recent Projects</a></li>
                    <li><a href="#video">Presentation</a></li>
                    <li><a href="#blog">Photos of the Month</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>

    <div class="sidebar-navigation hidden-sm hidden-xs">
        
        <nav>
            <ul>
                <li>
                    <a href="#top">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Home
                    </a>
                </li>
                <li>
                        <a href="#all_photos">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Photos
                        </a>
                    </li>
                <li>
                    <a href="#featured">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Rank
                    </a>
                </li>
                <li>
                    <a href="#projects">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Upload
                    </a>
                </li>
                {{-- <li>
                    <a href="#video">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Users
                    </a>
                </li> --}}
                <li>
                    <a href="#blog">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Photos of the Month
                    </a>
                </li>
                <li>
                    <a href="#contact">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Contact Us
                    </a>
                </li>
            </ul>
        </nav>
        <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
        </ul>
    </div>

    <div class="slider">
        <div class="Modern-Slider content-section" id="top">
            <!-- Item -->
            <div class="item item-1">
                <div class="img-fill">
                <div class="image"></div>
                <div class="info">
                    <div>
                      <h1>PhotoJudge<br>from Naznin</h1>
                      <p>See beautiful photos from others and upload yourself
                                <br>Also rank and choose the best photo</p>
                      <div class="white-button button">
                          <a href="#featured">Discover More</a>
                      </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item item-2">
                <div class="img-fill">
                    <div class="image"></div>
                    <div class="info">
                    <div>
                        <h1>PhotoJudge<br>from Naznin</h1>
                        <p>See beautiful photos from others and upload yourself
                                  <br>Also rank and choose the best photo</p>
                      
                      <div class="white-button button">
                          <a href="#featured">Discover More</a>
                      </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item item-3">
                <div class="img-fill">
                    <div class="image"></div>
                    <div class="info">
                    <div>
                        <h1>PhotoJudge<br>from Naznin</h1>
                        <p>See beautiful photos from others and upload yourself
                                  <br>Also rank and choose the best photo</p>
                      
                      <div class="white-button button">
                          <a href="#featured">Discover More</a>
                      </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- // Item -->
        </div>
    </div>


    <div class="page-content">

            <section id="all_photos" class="content-section">
                    <div class="section-heading">
                        <h1><em>Photos from Users</em></h1>
                        <p>Praesent pellentesque efficitur magna, 
                        <br>sed pellentesque neque malesuada vitae.</p>
                    </div>
                    <div class="section-content">
                        <div class="slider">
                        <div class="owl-carousel owl-theme">
                                @if(count($allphotos) > 0)
                                @foreach($allphotos as $allphoto)
                            <div class="item">
                                <div class="image">
                                    <img src="/storage/file/{{$allphoto->file}}" alt="">
                                    <div class="featured-button button">
                                        <a href="#projects">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                                {{-- <div class="text-content">
                                        <div class="project-content">
                                        <a href="/photos/{{$allphoto->image_id}}">  {{$allphoto->name}}</a>
                                        </div>
                                </div>
                             --}}
                            @endforeach
                            @else 
                                    <p>No photos found!</p>
                            @endif
                          </div>
                        </div>
                    </div>
                    
                </section>

        <section id="featured" class="content-section">
            <div class="section-heading">
                <h1><em>Rank</em></h1>
                <p>Praesent pellentesque efficitur magna, 
                <br>sed pellentesque neque malesuada vitae.</p>
            </div>
            <div class="section-content">
                <div class="owl-carousel owl-theme">
                        @if(count($photos) > 0)
                        @foreach($photos as $photo)
                    <div class="item">
                        <div class="image">
                            <img src="/storage/file/{{$photo->file}}" alt="">
                            <div class="featured-button button">
                                <a href="#projects">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                        <div class="text-content">
                                <div class="project-content">
                                <a href="/photos/{{$photo->image_id}}">  {{$photo->name}}</a>
                                   <h2><a href="{{url('/upvote/'.$photo->image_id)}}"><img src="images/up.png" width="42" height="42"></a>upvotes  {{$photo->upvotes}}</h2>
                                    <h2><a href="{{url('/downvote/'.$photo->image_id)}}"><img src="images/down.png" width="42" height="42"></a>downvotes {{$photo->downvotes}}</h2>
                                </div>
                        </div>
                    
                    @endforeach
                    @else 
                            <p>No photos found!</p>
                    @endif
                  </div>
                </div>
            
        </section>

        {{-- recent projects --}}
        <section id="projects" class="content-section">
            <div class="section-heading">
                <h1><br><em>Upload</em></h1>
                <p>Praesent pellentesque efficitur magna, 
                <br>sed pellentesque neque malesuada vitae.</p>
            </div>
            <div class="section-content">
                <div class="masonry">
                    <div class="row">
                            <div class="col-md-4">
                                    {!! Form::open(['action' => 'photosController@store', 'method' =>'POST', 'enctype' => 'multipart/form-data' ]) !!}
                                       
                                       <div class="form-group">
                                                {{ Form:: file('file')}}
                                        </div>  
                                        
                                        {{Form::submit('Submit',['class' => 'btn'])}}
                                        {!! Form::close() !!}
                            </div>
                          
                        <div class="row">
                           
                        </div> 
                        <div class="row">
                           
                            </div> 
                    </div>
                </div>
            </div>            
        </section>

        {{-- presentation --}}
        <section id="video" class="content-section">
                <div class="owl-carousel owl-theme">
            <div class="row">
                <div class="col-md-12">
                    {{-- <div class="section-heading">
                            @if(count($users) > 0)
                            @foreach($users as $user)
                        <div class="item">
                            
                        <a href="/profile/{{$user->user_id}}/"> {{$user->name}}</a>
                               {{$user->email}}
                            
                        
                        
                        @endforeach
                        @else 
                                <p>No photos found!</p>
                        @endif
                    </div> --}}
                </div>
                </div>
            </div>
        </section>

        <section id="blog" class="content-section">
            <div class="section-heading">
                <h1>Blog<br><em>Photos of the month</em></h1>
                <p>Curabitur hendrerit mauris mollis ipsum vulputate rutrum. 
                <br>Phasellus luctus odio eget dui imperdiet.</p>
            </div>
            <div class="section-content">
                <div class="tabs-content">
                    <div class="wrapper">
                        <ul class="tabs clearfix" data-tabgroup="first-tab-group">

                        <li><a href="#tab1" class="active">{{$now->format('F')}} {{$now->year}}</a></li>
                          <li><a href="#tab2">{{$now->subMonth()->format('F')}} {{$now->year}}</a></li>
                          <li><a href="#tab3">{{$now->subMonth()->format('F')}} {{$now->year}}</a></li>
                          <li><a href="#tab4">{{$now->subMonth()->format('F')}} {{$now->year}}</a></li>
                        </ul>
                        <section id="first-tab-group" class="tabgroup">
                            <div id="tab1">
                                    @if(count($photos_this_month) > 0)
                                    @foreach($photos_this_month as $photo_this_month)
                                <ul>
                                    <li>
                                        <div class="item">
                                                <img src="/storage/file/{{$photo_this_month->file}}" width="250" height="200" alt="">                                           
                                            <div class="text-content">
                                                
                                            <p>{{ Carbon\Carbon::parse($photo_this_month->created_at)->format('d-m-Y ') }}</p>
                                                <p><h4>Total Votes: {{$photo_this_month->total}}</h4>  Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>
                                                
                                                {{-- <div class="accent-button button">
                                                    <a href="#contact">Continue Reading</a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    @else 
                                            <p>No photos found!</p>
                                    @endif
                                    
                                </ul>
                            </div>
                            <div id="tab2">
                                <ul>
                                    <li>
                                        <div class="item">
                                            <img src="img/blog_3.jpg" alt="">
                                            <div class="text-content">
                                                <h4>Sed at massa turpis</h4>
                                                <span>30 June 2018</span>
                                                <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>
                                                
                                                <div class="accent-button button">
                                                    <a href="#contact">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item">
                                            <img src="img/blog_1.jpg" alt="">
                                            <div class="text-content">
                                                <h4>Lorem ipsum dolor sit</h4>
                                                <span>24 June 2018</span>
                                                <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>
                                                
                                                <div class="accent-button button">
                                                    <a href="#contact">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item">
                                            <img src="img/blog_2.jpg" alt="">
                                            <div class="text-content">
                                                <h4>Cras commodo odio ut</h4>
                                                <span>12 June 2018</span>
                                                <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>
                                                
                                                <div class="accent-button button">
                                                    <a href="#contact">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab3">
                                <ul>
                                    <li>
                                        <div class="item">
                                            <img src="img/blog_2.jpg" alt="">
                                            <div class="text-content">
                                                <h4>Cras commodo odio ut</h4>
                                                <span>26 May 2018</span>
                                                <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>
                                                
                                                <div class="accent-button button">
                                                    <a href="#contact">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item">
                                            <img src="img/blog_1.jpg" alt="">
                                            <div class="text-content">
                                                <h4>Lorem ipsum dolor sit</h4>
                                                <span>22 May 2018</span>
                                                <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>
                                                
                                                <div class="accent-button button">
                                                    <a href="#contact">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item">
                                            <img src="img/blog_3.jpg" alt="">
                                            <div class="text-content">
                                                <h4>Integer ultrices augue</h4>
                                                <span>8 May 2018</span>
                                                <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>
                                                
                                                <div class="accent-button button">
                                                    <a href="#contact">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab4">
                                <ul>
                                    <li>
                                        <div class="item">
                                            <img src="img/blog_1.jpg" alt="">
                                            <div class="text-content">
                                                <h4>Lorem ipsum dolor sit</h4>
                                                <span>26 April 2018</span>
                                                <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>
                                                
                                                <div class="accent-button button">
                                                    <a href="#contact">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>                                
                                    <li>
                                        <div class="item">
                                            <img src="img/blog_3.jpg" alt="">
                                            <div class="text-content">
                                                <h4>Integer ultrices augue eu</h4>
                                                <span>24 April 2018</span>
                                                <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>
                                                
                                                <div class="accent-button button">
                                                    <a href="#contact">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item">
                                            <img src="img/blog_2.jpg" alt="">
                                            <div class="text-content">
                                                <h4>Cras commodo odio ut</h4>
                                                <span>20 April 2018</span>
                                                <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>
                                                
                                                <div class="accent-button button">
                                                    <a href="#contact">Continue Reading</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section> 
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="content-section">
            {{-- <div id="map">
            
                <!-- How to change your own map point
                       1. Go to Google Maps
                       2. Click on your location point
                       3. Click "Share" and choose "Embed map" tab
                       4. Copy only URL and paste it within the src="" field below
                -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div> --}}
            <div id="contact-content">
                <div class="section-heading">
                    <h1>Contact<br><em>PhotoJudge</em></h1>
                    <p>Curabitur hendrerit mauris mollis ipsum vulputate rutrum. 
                    <br>Phasellus luctus odio eget dui imperdiet.</p>
                    
                </div>
                <div class="section-content">
                    {{-- <form id="contact" action="#" method="post">
                        <div class="row">
                            <div class="col-md-4">
                              <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                              </fieldset>
                            </div>
                            <div class="col-md-4">
                              <fieldset>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                              </fieldset>
                            </div>
                             <div class="col-md-4">
                              <fieldset>
                                <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12">
                              <fieldset>
                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-md-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="btn">Send Message Now</button>
                              </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div> --}}
            <div>
            Contact: +8801716107622
            </div>
            <div>
            Email: nazninhaque7622@gmail.com
            </div>

        </section>
        <section class="footer">
            {{-- <p>Copyright &copy; 2018. Design: <a href="http://templatemo.com/tm-518-sentra" target="_blank">Sentra</a> | Distribution: <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p> --}}
        </section>
   



<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<script>
    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();
        
        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;
        
        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('header').removeClass('nav-up').addClass('nav-down');
            }
        }
        
        lastScrollTop = st;
    }
</script>

<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>


           
        </div>
    </div>
@endsection