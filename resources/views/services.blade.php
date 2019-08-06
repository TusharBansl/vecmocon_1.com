@extends('layout.master',[
  'title' => 'services'
  ])
  
  @section('content')
  @include('sections.navigation',[
    'data' => Config('site.setting.nav')
    ])
  @endsection