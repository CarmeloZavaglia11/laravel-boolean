@extends ('layouts/app')

@section('titolo',$student->name)

@section('content')
    
    <div class="students">
        <div class="student">
            <a href="{{route('StudentsController.studenti')}}"><div class="bg">
                <h3>{{$student->name}}</h3>
                <span>{{$student->age}} anni</span>
                <h4>{{$student->job}}</h4>
                <p>{{$student->description}}</p>
            </div></a>
            
            <div class="img-student">
                <img src="{{$student->img}}" class="img-responsive" alt="{{$student->name}}">
            </div>    
        </div>
    </div>

@endsection