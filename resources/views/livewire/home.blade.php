@extends('frontend.frontend_master')

@livewireStyles
<style>
    .readmore{
        border: 1px solid #eee;
        padding: 7px;
    }


</style>

@section('title')
Home Page

@endsection
@section('content')

@include('frontend.body.banner')



<section class="blog-posts">
    <div class="container">
      <div class="row">
        @livewire('home-search')

      </div>
    </div>
  </section>

  @livewireScripts

@endsection
