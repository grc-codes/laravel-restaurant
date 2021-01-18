@extends('layouts.app')

@section('title')
{{ $settings['general']->site_title }} | About
@endsection

@section('content')
    <div id='about-page'>
        <div class='content-box'>
            <div class='row'>
                <div class='col-md-6'>
                    <h1>About Page</h1>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae voluptas natus deserunt! Dolor sed atque deserunt eos cumque voluptates nam quidem id numquam. Similique, voluptas cum quibusdam quam explicabo fuga!
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dolore quam similique inventore exercitationem eos optio nesciunt, laudantium dolorum quaerat consequatur ipsam perferendis, perspiciatis, harum expedita laboriosam adipisci ad accusantium.
                    </p>
                </div>
                <div class='col-md-6'>
                    <img class='img-fluid' src='/img/about-page-image.jpg' />
                </div>
            </div>
        </div>
    </div>
@endsection