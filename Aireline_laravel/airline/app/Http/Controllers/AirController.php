<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AirModel;
use App\Models\Flight;
use App\Models\Airport;
use App\Models\Notification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class AirController extends Controller
{
/*********** 
 @function:registration function
@author:Rubiya AS
@date:9/3/2021
@module:user
****/
    
    
    function register(Request $req)
    {
    
        $req->validate([
           'firstname'=>'required',
           'lastname'=>'required',
           'age'=>'required',
           'gender'=>'required',
           'address'=>'required',
           'phone'=>'required',

          'email'=>'required|email|unique:auths',
          'password'=>'required|min:5|max:12'
          ]);
    
    
    
    $data=new AirModel ;
        $data->firstname=$req->firstname;
        $data->lastname=$req->lastname;
        $data->age=$req->age;
        $data->gender=$req->gender;
        $data->address=$req->address;
        $data->phone=$req->phone;
        $data->email=$req->email;
        $data->password=Hash::make($req->password);
        $query=$data->save();
        if($query)
        {
            return back()->with('sucess','sucessfully registered');
        }
        else{
            return back()->with('fail','something wrong');
        }
        
    }
    function loginform()
    {
        return view('log');
    }
    // function login(Request $req)
    // {
    //     $req->validate(['username'=>'required','password'=>'required']);
    //     return $req->input();
    // }



     function dash(Request $req)
 {
     $data=['LoggedUserInfo'=>AirModel::where('id','=',session('LoggedUser'))->first()];
 return view('dashboad',$data);
 }
function check(Request $req)
    {
        if($req->email=='admin@gmail.com'&&$req->password=='admin@123')
        {
            return view('adminindex');
        }
        else
        {

      
        $req->validate(['email'=>'required','password'=>'required']);
      $userinfo=AirModel::where('email','=',$req->email)->first();
        if(!$userinfo)
        {
            return back()->with('fail','Your email is not recognized!');
        }
        else{
            if(Hash::check($req->password,$userinfo->password))
            {
                $req->session()->put('LoggedUser',$userinfo->id);
                return redirect('dashboard');

            }
            else
            {
                return back()->with('fail','invalid password');
            }
        }
    }

    }





/*********** 
 @function:add flight function
@author:Radhika jaladharan
@date:10/03/2021
@module:admin
****/

    function insertflight(Request $req)
    {
    $Flight=new Flight;
         $Flight->cname=$req->cname;
         $Flight->flightid=$req->flightid;
         $Flight->flyfrom=$req->flyfrom;
         $Flight->flyto=$req->flyto;
         $Flight->dtime=$req->dtime;
         $Flight->atime=$req->atime;
         $Flight->eseat=$req->eseat;
         $Flight->bseat=$req->bseat;
         $Flight->fseat=$req->fseat;
         $Flight->date=$req->date;
         $Flight->ecost=$req->ecost;
         $Flight->bcost=$req->bcost;
         $Flight->fcost=$req->fcost;

         $query=$Flight->save();
         return redirect('add');
    }


/****
 @function:adding airport function
@author:Mahima S
@date:10/03/2021
@module:admin
****/


    function insertairport(Request $req)
    {
    $Airport=new Airport;
         $Airport->aname=$req->aname;
         $Airport->abbrevation=$req->abbrevation;
         $Airport->city=$req->city;
         $Airport->state=$req->state;
         $Airport->pincode=$req->pincode;
         $Airport->timezone=$req->timezone;
         $query=$Airport->save();
         return redirect('addairport');
    }
    
/****
 @function:update/delete flight
@author:Rubiya AS
@date:10/03/2021
@module:admin
****/
    function datalist()
    {
        $data=Flight::all();
        return view('flightadd_view',['data'=>$data]);
    }
    function delete($id)
        {
            $data=Flight::find($id);
            $data->delete();

        }
        function update($id)
        {
            $data=Flight::find($id);
           return view('updateflight',['data'=>$data]);


           
        }
        function edit_view(Request $req)
        {
            $m=Flight::find($req->id);
            $m->cname=$req->cname;
            $m->flightid=$req->flightid;
            $m->flyfrom=$req->flyfrom;
            $m->flyto=$req->flyto;
            $m->dtime=$req->atime;
            $m->eseat=$req->eseat;
            $m->bseat=$req->bseat;
            $m->fseat=$req->fseat;
            $m->date=$req->date;
            $m->ecost=$req->ecost;
            $m->bcost=$req->bcost;
            $m->fcost=$req->fcost;
            
            $m->save();
            return redirect('getdata');
        }


/****
 @function:update/delete aireport
@author:Mahima S
@date:10/03/2021
@module:admin
****/
    function airportlist()
    {
        $data=Airport::all();
        return view('aireportview',['data'=>$data]);
    }
    function deleteairport($id)
        {
            $data=Airport::find($id);
            $data->delete();

        }
        function updateairport($id)
        {
            $data=Airport::find($id);
           return view('updateairport',['data'=>$data]);


           
        }
        function editairport(Request $req)
        {
            $m=Airport::find($req->id);
            $m->aname=$req->aname;
            $m->abbrevation=$req->abbrevation;
            $m->city=$req->city;
            $m->state=$req->state;
            $m->pincode=$req->pincode;
            $m->timezone=$req->timezone;
             $query=$m->save();

             $data=Airport::all();
             return view('aireportview',['data'=>$data]);
             //return redirect('airport');
        }

/*********** 
@function:registerview function
@author:Rubiya A S
@date:10/03/2021
@module:user
*************/


        
        public function registerview($id)
    {

        // $id1=$req->session()->get('LoggedUser');
       // echo $id1;
         $data=AirModel::find($id);
        echo $data;
        //$user = DB::table('airmodels')->find($id);
        
        return view('registerview_update',['user'=>$data]);
    }
    public function registerupdate(Request $req)
    {
        $data=AirModel::find($req->id);
        $data->firstname=$req->firstname;
        $data->lastname=$req->lastname;
        $data->age=$req->age;
        $data->gender=$req->gender;
        $data->address=$req->address;
        $data->phone=$req->phone;
        $data->email=$req->email;
        $data->save();
        return view('list');

        }

        /*********** 
        @function:flight booking
        @author:Rubiya A S
        @date:10/03/2021
        @module:user
        *************/
        function flightbooking()
        {
            $data=Flight::all();
            return view('flightbook',['data'=>$data]);
        }

        function book($id)
        {
            $data=Flight::find($id);
           return view('bookingflight',['data'=>$data]);
        }

        /*********** 
        @function:flight booking
        @author:Radika J
        @date:11/03/2021
        @module:Admin
        *************/
        function notification()
        {   
        $data=Flight::all();
        return view('notification',['data'=>$data]);

        }


        function insertnotification(Request $req)
        {
            $Notification=new Notification;
            $Notification->notification=$req->notification;
            $Notification->fid=$req->fid;
            $Notification->date=$req->date;

            
            $query=$Notification->save();
            return redirect('notification');
        }


        function notificationlist()
    {
        $data=Notification::all();
        return view('notificationview',['data'=>$data]);
    }

    function deletenoti($id)
        {
            $data=Notification::find($id);
            $data->delete();

        }
        function updatenoti($id)
        {
            $data=Notification::find($id);
           return view('update_notification',['data'=>$data]);
        }
        function editnoti(Request $req)
        {
            $m=Notification::find($req->id);
            $m->id=$req->id;
            $m->notification=$req->notification;
            $m->fid=$req->fid;
            $m->date=$req->date;
            $m->save();
            return redirect('getnoti');
        }
        public function searchaction(Request $req)

    {
        $flight= new Flight;
        $from=$req->from;
        $to=$req->to;
        $date=$req->date;
        $users= DB::table('flights')
            ->where('flyfrom',$from)
            ->where('flyto',$to)
            ->where('date',$date)
            ->get();
      
        return view('flightbook',['data'=>$users]);
    }

     /*********** 
        @function:flight booking
        @author:Rubiya A S
        @date:13/03/2021
        @module:Admin
        *************/
    function adminviewuser()
    {   $data=DB::table('air_models')
        ->get();
  
        return view('admin_view_user',['users'=>$data]);
    }
    }  

