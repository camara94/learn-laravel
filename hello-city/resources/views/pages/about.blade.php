@extends( 'app' )
@section( 'title', 'Apropos | ' . config( 'app.name' ) )

@section( 'content' )
<h1>Hello from Tunis</h1>
<p> Construit par &hearts; Stardev Cloud Group </p>
<p>Il est actuellement {{ date('h:i:s') }} </p>
@endsection( 'content' )

@section( 'link' )
<a href="/">Retour en arrière</a>
@endsection