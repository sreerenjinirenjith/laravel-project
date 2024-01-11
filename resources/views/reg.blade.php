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
<h1>Registration</h1>
       <form action="{{route('form')}}" method="post" enctype="multipart/form-data">
       @csrf
  <div>
    <label>Enter Name</label>
    <input type="text"  id="sname"  name="sname">
    @error('sname')
<div class="alert alert-danger">
    {{$message}}</div>
    @enderror
   </div>

   <div>
    <label>Enter adress</label>
    <input type="textarea" rows="4" cols="50" id="add" name="sadd">
    @error('sadd')
<div class="alert alert-danger">
    {{$message}}</div>
    @enderror
   </div><br><br>

  <div>
  <label>enter Age</label>
  <input type="text"  id="age" name="sage">
  @error('sage')
<div class="alert alert-danger">
    {{$message}}</div>
    @enderror 
  </div>
  <div>
  <label>enter Email</label>
  <input type="email"  id="email" name="semail"> 
  @error('semail')
<div class="alert alert-danger">
    {{$message}}</div>
    @enderror
  </div><br><br>

  <div>
  <label>enter Gender</label>
  <input type="radio" id="male" name="gender" value="male">
<label>male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label>female</label><br>
@error('gender')
<div class="alert alert-danger">
    {{$message}}</div>
    @enderror
</div><br><br>

<div>
  <label>enter phone</label>
  <input type="text"  id="phone" name="sphone"> 
  @error('sphone')
<div class="alert alert-danger">
    {{$message}}</div>
    @enderror
  </div><br><br>

    
 
<div>
    <label>state</label>
  <select name="state" id="state" >
                    <option value="kerala">Kerala</option>
                    <option value="tamilnadu">tamilnadu</option>
                    <option value="banglore">banglore</option>
                    </select>
                    @error('state')
<div class="alert alert-danger">
    {{$message}}</div>
    @enderror
  </div>
  <br><br>

  <div>
  <label>enter password</label>
  <input type="password"  id="pwd" name="psw"> 
  @error('psw')
<div class="alert alert-danger">
    {{$message}}</div>
    @enderror
  </div><br><br>
  <div>
  <label>Select a file:</label>
<input type="file" id="img" name="pic">
@error('pic')
<div class="alert alert-danger">
    {{$message}}</div>
    @enderror
</div>
  

<input type="submit" name="submit" value="submit">

</form>



  
  
</body>
 
</html>

