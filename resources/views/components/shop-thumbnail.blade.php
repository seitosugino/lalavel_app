<div>
  @if(empty($shop->filename))
    <img src="{{ asset('images/no_image.jpeg') }}">
  @else
    <img src="{{ asset('storage/shops/') . $shop->filename }}">
  @endif
</div>