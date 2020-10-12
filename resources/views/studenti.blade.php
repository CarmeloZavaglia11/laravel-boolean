@extends ('layouts/app')

@section('titolo','Studenti')

@section('content')
    
    <div class="students">
        @foreach ($data as $student)

            <div class="student">
                <div class="bg">
                    <h3>{{$student['name']}}</h3>
                    <span>{{$student['age']}} anni</span>
                    <h4>{{$student['job']}}</h4>
                    <p>{{$student['description']}}</p>
                </div>
                
                <div class="img-student">
                    <img src="{{$student['img']}}" class="img-responsive" alt="{{$student['name']}}">
                </div>
            </div>
            
        @endforeach
    </div>

@endsection