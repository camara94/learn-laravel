@extends( 'app' )

@section( 'title', 'hello city')


@section( 'content' )
<h1>Hello from Tunis</h1>
<p> Construit par &hearts; Stardev Cloud Group </p>
<p>Il est actuellement {{ date('h:i:s') }} </p>
@endsection( 'content' )

@section( 'link' )
<a href="/apropos-moi">Apropos de moi</a>
@endsection( 'link' )