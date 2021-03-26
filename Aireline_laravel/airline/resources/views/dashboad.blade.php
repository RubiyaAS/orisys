<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
<!-- <table class="table table-bordered">
  <thead>
<h1>WELCOME </h1>  
<tr>
<th scope="col">name</th>
<th>email</th></tr>
<td>{{$LoggedUserInfo->firstname}}</td>
<td>{{$LoggedUserInfo->email}}</td>

</thead>
</table>
<a href="logout">Logout</a> -->
<a href={{"registerview/".$LoggedUserInfo->id}}>Update profile</a>
</body>
</html>