@extends('layouts.app')

@section('title', 'Nehmen Sie mit uns Kontakt auf | New Work Finance')

@section('content')
    {{-- Content --}}
    @endsection

@section('contactform')
    {{-- Contact --}}

    @include('components.contactform')

    @include('components.contactinfo')

@endsection
