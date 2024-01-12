<nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-style1 mb-0 p-0">
    @foreach ($items as $item)
      <li class="breadcrumb-item">
        @if (!empty($item['link']))
    			<a href="{{ $item['link'] }}">{{ $item['title'] }}</a>
    		@else
      		{{ $item['title'] }}
    		@endif
      </li>
    @endforeach
  </ol>
</nav>