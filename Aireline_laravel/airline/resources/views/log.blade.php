<html>
<head>
<title></title>
</head>
<body>
<form action="logged" method="get">

<div class="result danger">

<div class="sucess bg-info">

</div>



@if(Session::get('fail'))
<div class="alert.alert-danger">
{{Session::get('fail')}}
</div>
@endif
</div>
    <input type="text" name="email" placeholder="email"></br>
    @error('email'){{$message}}@enderror</br>
    <input type="password" name="password" placeholder="password"><br>
    @error('password'){{$message}}@enderror</br>
    <input type="submit" value="submit">
   
 </form>
</bidy>
</html>
