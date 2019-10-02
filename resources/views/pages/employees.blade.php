@extends('layout.welcome')

@section('content')
  <a href="{{route('emp.create')}}">Nuovo Impiegato</a>
  @foreach ($content as $key => $value)
    <div class="">
      {{$value->lastname}}, {{$value -> firstname}}
      <ul>
        <li>{{$value->birthdate}}</li>
        <li>{{$value->jobtitle}}</li>
        <li>{{$value->salary}}</li>
      </ul>
    </div>
    <hr>
  @endforeach
@endsection
