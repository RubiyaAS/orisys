<!--- 
@function:register view
@author:Rubiya A S
@date:10/03/2021
@module:user
---->
@csrf
{{$user}}
<form action="{{url('/registerupdate')}}" method="post">
@foreach($user as $users)

 <input type="hidden" name="id" value="{{$users->id}}"> 
Name:<input type="text" name="firstname" value="{{$users->firstname}}"></br></br>
Lastname:<input type="text" name="lastname" value="{{$users->lastname}}"></br></br>
Age:<input type="text" name="age"value="{{$users->age}}"></br></br>
Gender:<input type="text" name="gender" value="{{$users->gender}}"></br></br>
Address:<input type="text" name="address" value="{{$users->address}}"></br></br>
Phone:<input type="text" name="phone"value="{{$users->phone}}"></br></br>
Email:<input type="text" name="email"value="{{$users->email}}"></br></br>
@endforeach
<input type="submit" name="btn" value="update">


</form>