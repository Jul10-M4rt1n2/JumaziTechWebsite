@extends('layout.app')

@section('content')
    @include('layout.inc.header')
    @include('layout.inc.about')
    @include('layout.inc.services')
{{--    @include('layout.inc.portfolio')--}}
    @include('layout.inc.action')
    @include('layout.inc.contact')
@endsection
