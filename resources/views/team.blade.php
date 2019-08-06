@extends('layout.master',[
  'title' => 'team'
  ])
  
  @section('content')
  @include('sections.navigation',[
    'data' => Config('site.setting.nav')
    ])
  @endsection