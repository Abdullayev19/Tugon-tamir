<!-- Portfolio -->
<section id="portfolio">
    <div class="container portfolio_area text-center">
        <h2>BIZNING ISHLAR</h2>
        
    
        <!-- Portfolio grid -->		
        <div class="grid">
            <div class="grid-sizer"></div>
            @foreach ($works as $work)
                
            
            <div class="grid-item grid-item--width2 grid-item--height2 buildings plumbing interior">
                <img alt="" src="{{Voyager::image($work->image)}}" width="550px" height="300px" style="border-radius: 11%" >
                <div class="portfolio_hover_area">
                    <a class="fancybox" href="{{Voyager::image($work->image)}}"   data-fancybox-group="gallery"><span class="fa fa-search"></span></a>
                </div>  
            </div>
            @endforeach
        </div><!-- Portfolio grid end -->
    </div>
</section><!-- Portfolio end -->