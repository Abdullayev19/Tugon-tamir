<!-- Contact form -->
<section id="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>SAVOLLARINGIZ BORMI?</h2>
                <h2 class="second_heading">BIZGA MUROJAT QILING!</h2>
            </div>
            <form role="form" class="form-inline text-right col-md-6" action="/contact"  method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="5" id="msg" placeholder="Message" name="message"></textarea>
                </div>
                <button type="submit" class="btn submit_btn">Submit</button>
            </form>				
        </div>
    </div>
</section><!-- Contact form end -->