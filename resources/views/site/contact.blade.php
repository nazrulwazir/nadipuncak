@extends('site.layouts.app')

@section('title', 'Contact')

@section('content')
    @include('site.partials.page-header', ['title' => 'Contact Us'])

    <!-- Contact Start -->
    <div class="contact wow fadeInUp">
        <div class="container">
            <div class="section-header text-center">
                <p>Get In Touch</p>
                <h2>For Any Query</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="flaticon-address"></i>
                            <div class="contact-text">
                                <h2>Location</h2>
                                <p>No. 283, Tingkat 1, Jalan Shahab Perdana, 05150 Alor Setar, Kedah Darul Aman, Malaysia</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="flaticon-call"></i>
                            <div class="contact-text">
                                <h2>Phone</h2>
                                <p>04 - 787 7661</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="flaticon-send-mail"></i>
                            <div class="contact-text">
                                <h2>Email</h2>
                                <p>nadipuncak23@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form action="https://api.web3forms.com/submit" method="POST">
                            <input type="hidden" name="access_key" value="c32832e4-d3ef-4c73-af27-cf1a81d2c67f">

                            <div class="control-group">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('form');
        form.addEventListener('submit', async function (event) {
            event.preventDefault();
            const formData = new FormData(form);
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData,
            });
            const result = await response.json();

            if (result.success) {
                // Display success message
                alert('Your message has been sent successfully!');
                form.reset();  // Reset the form
            } else {
                // Display error message
                alert('There was an error sending your message. Please try again later.');
            }
        });
    });
</script>

@endpush
