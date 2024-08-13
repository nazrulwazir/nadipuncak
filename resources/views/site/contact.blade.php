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

                <!-- QR Code Display -->
                <div class="col-md-6 text-center">
                    <h3>{{ __('Scan to Save Contact') }}</h3>
                    {!! QrCode::size(200)->generate('Nadi Puncak Sdn Bhd, No. 283, Tingkat 1, Jalan Shahab Perdana, 05150 Alor Setar, Kedah Darul Aman, Malaysia. Phone: 04 - 787 7661. Email: nadipuncak23@gmail.com') !!}
                    <p>{{ __('Scan the QR code to save our contact information to your device.') }}</p>
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
                alert('{{ __('contact.success_message') }}');
                form.reset();  // Reset the form
            } else {
                alert('{{ __('contact.error_message') }}');
            }
        });
    });
</script>

@endpush
