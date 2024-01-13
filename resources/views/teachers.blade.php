@extends('layouts.pages')
@section('content')
<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Popular Teachers</h1>
            <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit
                eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
        </div>
        @include('includes.team')
        <br>
        @include('includes.team')

    </div>
</div>
<!-- Team End -->
@endsection
@section('title')
Teachers
@endsection
@section('gHeaderT')
Teachers
@endsection
@section('gHeaderA')
Teachers
@endsection
