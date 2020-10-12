@extends ('layouts/app')

@section('titolo','Home')

@section('content')
    
    <div class="jumbotron">
        <h1 class="display-4">Boolean Careers</h1>
        <p class="lead">Cambia la tua vita. Entra in Boolean.</p>
        <hr class="my-4">
        <p>Segui il corso, diventi un web developer e trovi lavoro.</p>
        <p class="lead">
        <a class="btn btn-outline-success btn-lg" href="{{route('Students.studenti')}}" role="button">Guarda i nostri studenti</a>
        </p>
    </div>

@endsection