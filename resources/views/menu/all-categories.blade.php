@extends('layouts.app')

@section('title')
{{ $settings['general']->site_title }} | Menu
@endsection


@section('content')
<div id='menu-page'>
  @include('includes.food-categories-slider')
</div>
@endsection