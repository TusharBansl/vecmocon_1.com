@extends('layout.master',[
  'title' => 'contact'
  ])
  
  @section('content')
  @include('sections.navigation', [
  'data' => Config('site.setting.nav')
])  @endsection