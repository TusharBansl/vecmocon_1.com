@extends('layout.master',[
  'title' => 'vecmocon-home'
])

@section('content')
@include('sections.navigation', [
  'data' => Config('site.setting.nav')
])


@endsection