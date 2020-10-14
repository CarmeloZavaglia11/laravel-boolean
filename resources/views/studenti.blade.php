@extends ('layouts/app')

@section('titolo','Studenti')

@section('content')
    
    <div class="students">
        @foreach ($data as $key => $student)

                <a href="{{route('StudentsController.show',['id'=>$student->id])}}"><div class="student">
                <div class="bg">
                <h3>{{$student->name}}</h3>
                    <span>{{$student->age}} anni</span>
                    <h4>{{$student->job}}</h4>
                </div>
                
                <div class="img-student">
                    <img src="{{$student->img}}" class="img-responsive" alt="{{$student->name}}">
                </div>
            </div></a>
            
        @endforeach
    </div>

@endsection