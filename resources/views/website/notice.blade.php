@extends('website.webpages.layout')

@section('header')
@includeIf('website.webpages.header')
@endsection


@section('content')
@includeIf('website.webpages.searchbar')
@includeIf('website.webpages.notice')
@endsection


@section('footer')
@includeIf('website.webpages.footer')
@endsection