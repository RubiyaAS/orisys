<!----
@function:update flight
@author:Rubiya AS
@date:10/03/2021
@module:admin--->

<form action="/edit" method="post">
@csrf
<input type="hidden" name="id" value="{{$data->id}}">
Company name:<input type="text" name="cname" value="{{$data->cname}}"></br></br>
Flightid:<input type="text" name="flightid" value="{{$data->flightid}}"></br></br>
From:<input type="text" name="flyfrom"value="{{$data->flyfrom}}"></br></br>
To:<input type="text" name="flyto" value="{{$data->flyto}}"></br></br>
Departure time:<input type="text" name="dtime"value="{{$data->dtime}}"></br></br>
Arival time:<input type="text" name="atime" value="{{$data->atime}}"></br></br>
Econnomic seat:<input type="text" name="eseat"value="{{$data->eseat}}"></br></br>
Business seat:<input type="text" name="bseat" value="{{$data->bseat}}"></br></br>
Firstclass seat:<input type="text" name="fseat"value="{{$data->fseat}}"></br></br>
Date:<input type="text" name="date"value="{{$data->date}}"></br></br>
Econnomic cost:<input type="text" name="ecost"value="{{$data->ecost}}"></br></br>
Business cost:<input type="text" name="bcost" value="{{$data->bcost}}"></br></br>
Firstclass cost:<input type="text" name="fcost"value="{{$data->fcost}}"></br></br>


<input type="submit" name="btn" value="update">


</form>