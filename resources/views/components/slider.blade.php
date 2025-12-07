<!-- Slider Section -->
<link rel="stylesheet" href="{{ asset('css/slider.css') }}">

<div class="slider">
  @foreach(($sliderItems ?? []) as $item)
  <div>
    <img src="{{ asset('images/sliderImages/' . $item->image_name) }}" alt="{{ $item->title }}" width="100%" height="100%">
    <span>{{ $item->title }}</span>
  </div>
  @endforeach
</div>

<script src="{{ asset('js/slider.js') }}"></script>
