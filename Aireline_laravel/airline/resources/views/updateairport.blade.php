<!----
@function:update airport
@author:Mahima S
@date:10/03/2021
@module:admin--->

<form action="/editairport" method="post">
@csrf
<input type="hidden" name="id" value="{{$data->id}}">
name:<input type="text" name="aname" value="{{$data->aname}}"></br></br>
abbrevation:<input type="text" name="abbrevation" value="{{$data->abbrevation}}"></br></br>
city:<input type="text" name="city"value="{{$data->city}}"></br></br>
state:<input type="text" name="state" value="{{$data->state}}"></br></br>
Pincode:<input type="text" name="pincode" value="{{$data->pincode}}"></br></br>

timezone:<input type="text" name="timezone"value="{{$data->timezone}}"></br></br>



<input type="submit" name="btn" value="update">


</form>