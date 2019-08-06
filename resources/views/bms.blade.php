@extends('layout.master',[
  'title' => 'battery management system'
  ])
  
  @section('content')
  @include('sections.navigation',[
    'data' => Config('site.setting.nav')
    ])
  @endsection