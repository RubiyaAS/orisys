<!----
@function:update flight
@author:Rubiya AS
@date:10/03/2021
@module:admin--->

<form action="/editnoti" method="post">
@csrf
<input type="hidden" name="id" value="{{$data->id}}">

Notification:<input type="text" name="notification" value="{{$data->notification}}"></br></br>
Fid:<input type="text" name="fid"value="{{$data->fid}}"></br></br>
Date:<input type="text" name="date"value="{{$data->date}}"></br></br>


<input type="submit" name="btn" value="update">


</form>