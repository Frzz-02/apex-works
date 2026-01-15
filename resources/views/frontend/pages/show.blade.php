@extends('frontend.layouts.pages.master-homepage')


@push('styles')
<style>
    .panel-item {
        flex: 1;
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .panel-item:hover {
        flex: 2.5;
    }
    .panel-item:hover img {
        transform: scale(1.05);
    }
    .panel-item img {
        transition: transform 0.7s ease;
    }
    .panel-item .content-card {
        transform: translateY(100%);
        transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .panel-item:hover .content-card {
        transform: translateY(0);
    }

    /* Blog Slider Auto Scroll Animation */
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(calc(-288px * 6 - 24px * 6));
        }
    }
    .animate-scroll {
        animation: scroll 30s linear infinite;
    }
    .animate-scroll:hover {
        animation-play-state: paused;
    }
</style>
@endpush


@section('content')
    @include('frontend.section.hero-banner')
    @include('frontend.section.about')
    @include('frontend.section.brands')
    <style>
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }
    .animate-scroll {
        animation: scroll 30s linear infinite;
    }
    .animate-scroll:hover {
        animation-play-state: paused;
    }
</style>
@endsection