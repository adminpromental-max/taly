{{-- Taly branded homepage --}}
@extends('frontend.layouts.base')

@section('title', 'Taly')

@push('css')
    <link rel="stylesheet" href="{{ static_asset('frontend/css/theme/taly.css') }}">
    <link rel="stylesheet" href="{{ static_asset('frontend/css/taly-home.css') }}">
@endpush

@section('base.content')
    <script>document.body.classList.add('taly-home');</script>

    @include('frontend.layouts.header.' . ($section['header'] ?? 'header_one'))

    @include('frontend.taly.hero')

    @include('frontend.taly.tracks')

    @include('frontend.taly.closing')

    @include('frontend.layouts.footer')
@endsection
