
        <section id="home" class="home">
            <!-- Carousel -->
            
            <div id="carousel" class="carousel slide" data-ride="carousel" >
                <!-- Carousel-inner -->
                <div class="carousel-inner" role="listbox" >

                    @foreach ($sliders as $slider)
                        
                    
                    <div class="item {{ $loop->first ?  'active' : '' }}">
                        <div class="slider_img">
                            <img src="{{Voyager::image($slider->image)}}" alt="Construction">
                        </div>
                        
                        <div class="overlay">
                            <div class="carousel-caption">
                                
                                <h1 style="margin-top: 10%">{{$slider->title1}}</h1>
                                <h1 class="second_heading">{{$slider->title2}}</h1>
                            </div>	
                        </div>
                    </div>
                    @endforeach

                </div><!-- Carousel-inner end -->



                <!-- Controls -->
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- Carousel end-->

        </section>
