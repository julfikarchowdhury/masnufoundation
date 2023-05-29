@extends('front.layouts.layout')

@section('content')
<div class="page-header">
    <h1>Contact</h1>
</div>
<div class="page-content">
    <div class="row">
        <div class="col-md-6 p-3">
            <div class="card ">
                <div class="card-body ">
                    <h2>Contact Form</h2>
                    <hr>
                    <form action="{{route('send-email')}}" method="post">@csrf
                        <div class="mb-3">
                            <label for="yourName" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="yourName" name="name" placeholder="Enter Your Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="yourEmail" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="yourEmail" name="email" placeholder="Enter Your Valid Email Adress" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Write A Subject About Your Message" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="10" placeholder="Write Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success float-end">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-3">
            <div class="card mb-4">
                <div class="card-body ">
                    <h3>Where We Are</h3>
                    <hr>
                    <div class="col" style="height: 250px; min-width:450px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7337.903284439631!2d91.39631567520595!3d23.13544277646592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37536f064cb6742d%3A0xfcf3cfeed71fe3af!2sBadarpur%20Nurani%20Madrasha!5e0!3m2!1sen!2sbd!4v1685181879467!5m2!1sen!2sbd" width="525" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body ">
                    <h3>Contact</h3>
                    <hr>
                    <div class="col">
            <p>
              Address:<br>
              Masnu Foundation<br>
              Plot-60, Road-3, Block-C, (Beside Badarpur Nurani Madrasha)<br>
              Fulgazi, Feni.
            </p>
            <p>
              Phone:<br>
              +88-00000-000000
            </p>
            <p>
              Email:<br>
              Masnufoundationbd@gmail.com
            </p>
          </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection
@section('custom-js')

@endsection