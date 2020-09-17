@extends('layouts.template')
@section('main')
    <!--Main index : End-->
    <main class="main">
        <section class="header-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 hidden-xs">
                        <h1 class="mh-title">Contact</h1>
                    </div>
                    <div class="breadcrumb-w col-sm-8">
                        <span class="hidden-xs">You are here:</span>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{route('welcome')}}">Home</a>
                            </li>
                            <li>
                                <span>Contact</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="pr-contact" class="pr-main">
            <div class="container"><h1 class="ct-header">Contact us</h1></div>
            <div class="contact-map">
                <!--<img src="images/maps.jpg" />-->
                <iframe width="100%" height="500" frameborder="0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3231541504056!2d3.3585006498860888!3d6.60670662400105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b924a5a666e6d%3A0x1e5c9ffe7a00b85b!2s3%20Adebayo%20Akande%20St%2C%20Oregun%2C%20Ikeja!5e0!3m2!1sen!2sng!4v1596784975989!5m2!1sen!2sng"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

            <div class="container">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="address">
                        <i class="fa fa-home"></i>
                        <p>
                            <span>Street: 3 Adebayo Akande</span><br/>
                            <span>Suburb: Oregun</span><br/>
                            <span>State: Lagos </span><br/>
                            <span>Zip Code: 100212 </span><br/>
                            <span>Country:Nigeria </span>
                        </p>
                    </div>
                    <div class="phone">
                        <i class="fa fa-phone"></i>
                        <p>
                            <span>Telephone: +234 812 713 8282</span>
                        </p>
                    </div>

                    <div class="fax">
                        <i class="fa fa-fax"></i>
                        <p>
                            <span>Alt Phone: +234 812 660 4977</span>
                        </p>
                    </div>

                    <div class="website">
                        <i class="fa fa-globe"></i>
                        <p>
                            <span>Website: globalplusonline.com </span>
                        </p>
                    </div>
                </div>
                <form id="contact-form" class="form-validate form-horizontal">
                    @csrf
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea aria-required="true" required class="required invalid" rows="10" cols="50"
                                  name="message" aria-invalid="true" placeholder="Enter Message*"
                                  value="{{old('message')}}"></textarea>
                        <p>Ask us a question and we'll write back to you promptly! Simply fill out the form below and
                            click Send Email.</p>
                        <p>Thanks. Items marked with an asterisk (<span class="star">*</span>) are required fields.</p>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <input class="name" type="text" placeholder="Enter your name *" name="name" required
                               value="{{old('name')}}">
                        <input class="email" type="email" placeholder="Enter E-mail *" name="email" required
                               value="{{old('email')}}">
                        <input class="message" type="text" placeholder="Enter Message Subject *" name="subject" required
                               value="{{old('subject')}}">
                        <div class="button">
                            <input class="subject" type="checkbox" name="copy">
                            <span>Send copy to yourself</span>
                        </div>
                        <button type="submit" class="sendmail">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <!--Main index : End-->
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#contact-form').on('submit', function (event) {
                event.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '/contacts',
                    data: $(this).serialize(),
                    beforeSend: function(){
                        swal.showLoading()
                    },
                    success: function (response) {
                        if (response.success) {
                            Swal.fire(
                                'Successful!',
                                response.success,
                                'success'
                            ).then(function (result) {
                                if (result.value) {
                                    window.location = '/contact-us'
                                }
                            })
                        }else {
                            Swal.fire(
                                'Failed!',
                                response.error,
                                'error'
                            ).then(function (result) {
                                if (result.value) {
                                    window.location = '/contact-us'
                                }
                            })
                        }
                    },
                    // complete: function () {
                    //     swal.stopLoading();
                    // }
                })
            })
        })
    </script>
@endsection
