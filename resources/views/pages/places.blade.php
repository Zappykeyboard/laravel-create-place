@extends('layout.welcome')

@section('content')
  <a href="{{ route('place.create')}}">Nuovo</a>

  @foreach ($content as $key => $value)
    <div class="">
      {{$value -> name}}, {{$value ->address}}
    </div>
  @endforeach
@endsection
