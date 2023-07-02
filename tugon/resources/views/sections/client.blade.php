 <!-- Testimonial -->
 <section id="testimonial">
    <div class="container text-center testimonial_area">
        <h2>MIJOZLAR FIKRI</h2>
       

        <div class="row">

            @foreach ($clients as $client)

            <div class="col-md-4">
                <div class="testimonial_item">
                    <div class="testimonial_content text-left">
                        <p>{{$client->body}}</p>
                    </div>
                    <img src="{{Voyager::image($client->image)}}" alt="Testimonial" />
                    <p class="worker_name">{{$client->name}}</p>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</section><!-- Testimonial end -->