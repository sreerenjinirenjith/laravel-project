<!DOCTYPE html>
<html lang="en">
 
<head>
  <style>
  
    </style>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Login Page</title>
   
</head>
 
<body>
<h1>login</h1>
       <form action="{{route('loginuser')}}" method="post" >
       @csrf
  <div>
    <label>Enter email</label>
    <input type="email"   name="semail" value="{{ old('semail') }}" required>
    @error('semail')
<div class="alert alert-danger">
    {{$message}}</div>
    @enderror
   </div>

   <div>
    <label>Enter password</label>
    <input type="password" id="psw" name="psw" required>
    @error('psw')
<div class="alert alert-danger">
    {{$message}}</div>
    @enderror
   </div><br><br>

    
 <button type="submit">submit</button>

</form>



  
  
</body>
 
</html>

