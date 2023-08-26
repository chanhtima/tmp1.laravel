<div class="co-button-01-lefticon">
  <a href="{{url( $url ?? '' )}}">
    <img class="co-button-01-lefticon-img" src="{{ Module::asset('frontend:img/icon/' . ($img ?? '')) }}" alt="">
   </a>
<button type="button"><a href="{{url( $url ?? '' )}}">
    {{ $title ?? '' }}</a>
</button>
</div>