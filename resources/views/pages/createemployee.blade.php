@extends('layout.welcome')

@section('content')
  <a href="{{route('emp.index')}}">Indietro</a>
  <div class="">
    <form  action="{{route('emp.store')}}" method="post" >
      @csrf
      @method('POST')
      <label for="lastname">Last name</label>
      <input type="text" name="lastname" value="">
      <br>
      <label for="firstname">First name</label>
      <input type="text" name="firstname" value="">
      <br>
      <label for="birthdate">Birthdate</label>
      <input type="text" name="birthdate" value="">
      <br>
      <label for="jobtitle">Job Title</label>
      <input type="text" name="jobtitle" value="">
      <br>
      <label for="salary">Salary</label>
      <input type="text" name="salary" value="">
      <br>
      <button type="submit" name="button">Invia</button>
    </form>
  </div>
@endsection
