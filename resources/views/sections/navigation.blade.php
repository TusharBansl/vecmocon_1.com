<!-- Navigation -->
@if($data['show'])

  <nav id="{{ $id ?? 'main-nav'}}" class="navbar navbar-expand {{ $data['position'] }}">
  @if($data['brand']['show'])
    <div class="navbar-brand">
      <a href="{{ $data['brand']['url'] }}">
            <img src="{{ $data['brand']['image'] }}" width="{{ $data['brand']['width'] }}" height="{{ $data['brand']['height'] }}" />
      </a>
    </div> 
  @endif

  <div class="navbar-nav ml-auto">
    @foreach($data['link'] as $item => $object)
      @if($object['type'] == 'menuitem')
      <a class="btn btn-lg nav navbar-nav nav-link" href="{{ $object['url'] }}">{{ $item }}</a>
      @elseif($object['type']=='submenu')
      <ul class="nav navbar-nav">
      <!-- recursive loops -->
      <li class="active"><a class="btn btn-lg nav-link" href="">{{ $item }}</a></li>
      
      <ul>
      @endif
    @endforeach

  </div>
  </nav>
  @endif

<!-- 
  1) position
  2) color scheme
  3) brand logo & menu items
      a) individual
      b) sub-menus
  4) spacing control

 -->