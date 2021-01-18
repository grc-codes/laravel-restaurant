@extends('layouts.app')

@section('title')
{{ $settings['general']->site_title }} | Contact
@endsection

@section('content')
    <div id='contact-page'>
        <div class='content-box'>
            <div class='row'>
                <div class='col-md-6'>
                    <h1>Contact Us</h1>
                    <h3>Address</h3>
                    <p>
                        {{ $settings['general']->address_1 }}<br>
                        {{ $settings['general']->city }}, {{ $settings['general']->state }} {{ $settings['general']->zipcode }}
                    </p>
                    <h3>Phone Number</h3>
                    <p>
                        <a href="tel:7182198652">{{ $settings['general']->phone_number }}</a>
                    </p>
                </div>
                <div class='col-md-6'>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1834.746660363629!2d-105.04238982482246!3d39.74208964977471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd7668d819be5c07b!2sTap%20%26%20Burger%20Sloan&#39;s%20Lake!5e0!3m2!1sen!2sus!4v1611008989096!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection