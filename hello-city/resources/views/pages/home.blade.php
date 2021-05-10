@extends( 'app' )

@section( 'title', config( 'app.name' ) )


@section( 'content' )
<h1>Hello from Tunis</h1>
<p> Construit par &hearts; Stardev Cloud Group </p>
<p>Il est actuellement {{ date('h:i:s') }} </p>
@endsection( 'content' )

@section( 'link' )
<a href="{{route('app_about')}}">Apropos de moi</a>
@endsection( 'link' )