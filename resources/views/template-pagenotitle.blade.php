{{--
  Template Name: Page Without Title
--}}
@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  <article>
    @include('partials.content-page')
  </article>
  @endwhile
@endsection
