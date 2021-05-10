@extends( 'layouts.app', ['title' => null] )

@section( 'title' )


@section( 'content' )
<img src="{{asset('/images/flaggn.jpg')}}" alt="flag guinea" width="600">
<h1>Hello from Conakry</h1>
<p> Construit par <span class="text-pink-400">&hearts;</span> Stardev Cloud Group </p>
<p>Il est actuellement {{ date('h:i:s') }} </p>
@endsection( 'content' )

@section( 'link' )
<a href=" {{route('app_about')}}">Apropos de moi</a>
@endsection( 'link' )