@extends('layouts.main')

@section('content')

@include('sections.intro')

<main id="main">
  @include('sections.about')

  @include('sections.feature')

  @include('sections.gallery')

  @include('sections.faq')

  @include('sections.subscribe')

  @include('sections.price')

  @include('sections.contact')

 
</main>
@endsection