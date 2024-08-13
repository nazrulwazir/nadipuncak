@extends('site.layouts.app')

@section('title', __('contact.title'))

@section('content')
    @include('site.partials.page-header', ['title' => __('contact.header_title')])

    <!-- Contact Start -->
    <div class="contact wow fadeInUp">
        <div class="container">
            <div class="section-header text-center">
                <p>{{ __('contact.get_in_touch') }}</p>
                <h2>{{ __('contact.query') }}</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="flaticon-address"></i>
                            <div class="contact-text">
                                <h2>{{ __('contact.location') }}</h2>
                                <p>{{ __('contact.address') }}</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="flaticon-call"></i>
                            <div class="contact-text">
                                <h2>{{ __('contact.phone') }}</h2>
                                <p>04 - 787 7661</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="flaticon-send-mail"></i>
                            <div class="contact-text">
                                <h2>{{ __('contact.email') }}</h2>
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
                                <input type="text" class="form-control" name="name" placeholder="{{ __('contact.your_name') }}" required />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" name="email" placeholder="{{ __('contact.your_email') }}" required />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" name="subject" placeholder="{{ __('contact.subject') }}" required />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" name="message" placeholder="{{ __('contact.message') }}" required></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit">{{ __('contact.send_message') }}</button>
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
                alert('{{ __('contact.success_message') }}');
                form.reset();  // Reset the form
            } else {
                // Display error message
                alert('{{ __('contact.error_message') }}');
            }
        });
    });
</script>

@endpush
