<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
    @csrf
@if(Session::has('user'))
        <h2>Welcome, {{ Session::get('user')['semail'] }}</h2>
        <a href="{{ route('logout') }}">Logout</a>
    @else
        <p>You are not logged in.</p>
    @endif
<table>
<tr>
    <th>
<td>Name</td>
<td>address</td>
<td>email</td>
<td>gender</td>
<td>phone</td>
<td>state</td>
<!--<td>psw</td>
<td>pic</td>-->


</th>
</tr>
@foreach ($forms as $form)
<tr>
<td>{{ $form->sname}}</td>
<td>{{ $form->sadd}}</td>
<td>{{$form->sage}}</td>
<td>{{$form->semail}}</td>
<td>{{$form->gender}}</td>
<td>{{$form->sphone}}</td>
<td>{{$form->state}}</td>
<td>
<form action="{{route('delete',$form->id)}}" method="post">
        <a href="{{route('edit',$form->id)}}">edit</a>
        @csrf
@method("DELETE")
<button type="submit" >delete</button>
</td>
</form>
</tr>
@endforeach
</table>
</body>
</html>