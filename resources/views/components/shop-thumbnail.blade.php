<div>
  @if(empty($ilename))
    <img src="{{ asset('images/no_image.jpeg') }}">
  @else
    <img src="{{ asset('storage/shops/') . $filename }}">
  @endif
</div>