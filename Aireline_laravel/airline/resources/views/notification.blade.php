<!-----@function:flight book
@author:Radika J
@date:11/03/2021
@module:user--->
<!DOCTYPE html>
<html>
<head>
<title>Flight Notification Adding</title>

<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!------------custom style-->
            

<style>

fieldset{
width:500px;
height: 400px;

}
</style>
</head>
<body>



<form method="get" action="insertnotification" class="form-group">


<fieldset class="mt-3">
<h1>Flight notification</h1>
Select Flight:
<select name="fid" class="form-select">
@foreach($data as $user)
<option value="{{$user->id}}">{{$user->cname}}
</option>
@endforeach

</select><br><br>
<textarea placeholder="Notification" name="notification" class="form-control"></textarea><br><br>
<input type="date"  name="date" class="form-control"><br><br>


<input type="submit" name="submit" value="Notify" class="btn btn-primary">

</fieldset>


</form>

</body>
</html>
