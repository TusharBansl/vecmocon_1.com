@extends('layout.master',[
  'title' => 'i-vec'
  ])
  
  @section('content')
  @include('sections.navigation',[
    'data' => Config('site.setting.nav')
    ])
  @endsection