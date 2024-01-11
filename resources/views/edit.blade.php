<!DOCTYPE html>
<html lang="en">
 
<head>
  <style>
  
    </style>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Edit Page</title>
   
</head>
 
<body>
<h1>Edit</h1>
       <form  method="post" action="{{route('update',$form->id)}}" enctype="multipart/form-data">
       @method('patch');
       @csrf
      
  <div>
    <label> Name</label>
    <input type="text"   name="sname" value="{{$form->sname}}">
    @error('sname')
<div class="alert alert-danger">
    {{$message}}</div>
    @enderror
   </div>

   <div>
    <label>adress</label>
    <input type="textarea" rows="4" cols="50" id="add" name="sadd" value="{{$form->sadd}}">
    @error('sadd')
<div class="alert alert-danger">
    {{$message}}</div>
    @enderror
   </div><br><br>

  <div>
  <label> Age</label>
  <input type="text"   name="sage" value="{{$form->sage}}">
  @error('sage')
<div class="alert alert-danger">
    {{$message}}</div>
    @enderror 
  </div>
  <div>
  <label> Email</label>
  <input type="email"   name="semail" value="{{$form->semail}}"> 
  @error('semail')
<div class="alert alert-danger">
    {{$message}}</div>
    @enderror
  </div><br><br>

  <div>
  <label> Gender</label>
  <input type="radio" name="gender" value="male"{{$form->gender==='male'?'checked':''}}>male<br>
<input type="radio" name="gender" value="female"{{$form->gender==='female'?'checked':''}}>female<br>
@error('gender')
<div class="alert alert-danger">
    {{$message}}</div>
    @enderror
</div><br><br>

<div>
  <label>phone</label>
  <input type="text"  id="phone" name="sphone" value={{$form->sphone}}> 
  @error('sphone')
<div class="alert alert-danger">
    {{$message}}</div>
    @enderror
  </div><br><br>

    
 
<div>
    <label>state</label>
  <select name="state" id="state"  >
  <option value="kerala"{{$form->state==='kerala'?'selected':''}}>kerala</option><br><br>
  <option value="tamilnadu"{{$form->state==='tamilnadu'?'selected':''}}>tamilnadu</option><br><br>
  <option value="banglore"{{$form->state==='banglore'?'selected':''}}>banglore</option><br><br>
  
                    </select>
                    @error('state')
<div class="alert alert-danger">
    {{$message}}</div>
    @enderror
  </div>
  <br><br>

  

  <div class="col-md-6">
    <div class="form-group">
                    <label for="profileImage"> Image<span
                                                        style="float: right;">:</span></label>
                                                <br>

                                              
                     <img id="displays" style="width: 400px;height: 250px;"
                          src="{{asset($form->pic) }}" alt="your image" />
                         <input value="profile.jpg" type="hidden" name="Profileimage"
                              class="prfl-pic" onchange="backreadURL(this);">
                              <div class="action-section">
                                                    
                         <input type="file" multiple name="pic" class="pic"
                           onchange="display(this);" capture>
                                                    @error('pic')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
  

<button type="submit">sunmit</button>

</form>



  
  
</body>
 
</html>

