@extends('layout.welcome')

@section('content')
  <a href="{{ route('place.index') }}">BACK</a>
 <div class="edit">
   <form method="post" action="{{route('place.store')}}">
     @csrf
     @method('POST')
     <div class="form-group">
       <label for="name">name</label>
       <input type="text" name="name" value="">
     </div>
     <div class="form-group">
       <label for="address">address</label>
       <input type="text" name="address" value="">
     </div>
     <button type="submit">Save</button>
   </form>
 </div>
@endsection
