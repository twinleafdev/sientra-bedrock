{{--
  Template Name: Surgeon Home
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page-for-us-surgeons-home')
  @endwhile
@endsection
