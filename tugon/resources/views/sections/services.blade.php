<!-- Services -->
<section id="services">
    <div class="container">
        <h2>BIZNING XIZMATLAR</h2>
        <div class="row">
            @foreach ($services as $services)
            <div class="col-md-4">
               
                <div class="service_item">
                    
                        
                    
                    <img src="{{Voyager::image($services->image)}}" width="550 " height="300" style="border-radius: 20%" alt="Our Services" />
                    <h3>{{$services->title}}</h3>
                    <p>{{$services->body}}</p>
                  
                </div>
               
        </div>
        @endforeach
    </div>
</section><!-- Services end --