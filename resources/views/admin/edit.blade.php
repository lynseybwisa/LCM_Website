@extends('\admin\layout1')

@section('title', 'Register Students')


@section('content')

<h1>Register Student</h1>

<form action="{{ route('students.update',$student->id) }}" method="POST" class="pb-5">
   
   <div class="form-group pb-2">
      <label for="name">Name of Child as Shown on Passport</label>
      <input type="text" name="name" value=" {{$student->name}}" class="form-control">
       <div>
      {{$errors->first('name')}}
      </div>
   </div>

   <div class="form-group">
      <label for="dob">Date of Birth</label>
      <input value="{{$student->dob}}" type="date" name="dob" class="form-control">
   </div>
   
 
 <div class="form-group ">
   <label for="email">Email</label>
      <input type="text" name="email" value=" {{$student->email}}" class="form-control">
      <div>
     {{$errors->first('email')}}
   </div>
   </div>

   <div class="form-group">
      <label for="school">Is the student in boarding or day?</label>
      <select name="school" id="school" class="form-control">
         <option value="1">Boarding</option>
         <option value="0">Day School</option>
      </select>
   </div>
 
 

   <button type="submit" class="btn btn-primary">Update {{$student->name}}'s Details</button>

   @csrf
   @method('PUT')
</form>


@endsection





