@extends('layout.master',[
  'title' => 'associates'
  ])
  
  @section('content')
  @include('sections.navigation',[
    'data' => Config('site.setting.nav')
    ])
  @endsection