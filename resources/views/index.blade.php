@extends('layouts.app')
@section('content')
<style>
  .ipf-navigation{
      z-index: 0;
      opacity: 0;
  }
</style>
  @include('level_one.slideshow')
  @include('level_one.news')
  @include('level_one.debates')
  @include('level_one.popupwindow')
  @include('level_one.footer')
@endsection
