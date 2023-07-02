<!-- Why us -->
<section id="why_us">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="head_title">
                    <h2>MIJOZLAR NIMA UCHUN BIZNI TANLASHADI?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($whies as $why)
            <div class="col-md-3 col-sm-6">
                <div class="why_us_item" >
                    <img class="fa" style="width: 130px" src="{{Voyager::image($why->image)}}" alt="">
                    <h4>{{$why->title}}</h4>
                    <p>{{$why->body}} </p>
                </div>
            </div> 
            @endforeach
        </div>
    </div>
</section><!-- Why us end -->