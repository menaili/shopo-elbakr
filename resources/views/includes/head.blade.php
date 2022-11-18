@section('headerGlo')
@guest('web')

@include('includes.header1')

@endguest

@auth
  @if (Auth::user()->status == "elbadrAdmin")

    @include('includes.header2') 

  @else

    @include('includes.header') 

  @endif

@endauth

@show