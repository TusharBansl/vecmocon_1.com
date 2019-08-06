<!-- Navigation -->
@if($data['show'])

  <nav id="{{ $id ?? 'main-nav'}}" class="navbar navbar-expand {{ $data['position'] }}">
    <div class="navbar-brand">
      <a href="{{ $data['menu']['brand']['url'] }}">
            <img src="{{ $data['menu']['brand']['image'] }}" width="{{ $data['menu']['brand']['width'] }}" height="{{ $data['menu']['brand']['height'] }}" />
      </a>
    </div> 
    <div class="navbar-nav ml-auto">
      @foreach($data['menu']['items'] as $item => $url)
      <a class="btn btn-lg nav-link" href="{{ $url }}">{{ $item }}</a>
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