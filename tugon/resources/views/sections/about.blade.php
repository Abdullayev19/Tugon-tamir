   <!-- About -->
   <section id="about">
    <div class="container about_bg">
        <div class="row">
            @foreach ($abouts as $about)
                
            
            <div class="col-lg-7 col-md-6">
                <div class="about_content">
                    <h2>{{$about->title}}</h2>                    
                    <p>{{$about->body}}  </p>
                    
                </div>
            </div>
            <div class="col-lg-3  col-lg-offset-1">
                <div class="about_banner">
                    <img src="{{Voyager::image($about->image)}}" alt="" />
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!-- About end -->
<br><br>
