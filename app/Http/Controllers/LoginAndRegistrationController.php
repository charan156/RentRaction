<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\login_details;
use Auth;

class LoginAndRegistrationController extends Controller
{
    public function index()
    {
        return view('loginAndRegistration.index');
    }
    public function login()
    {

        return view('loginAndRegistration.login')->with('message','');
    }
    public function logout(Request $request){
        //dd($resuest);
      //  return('sdsa');
        $result = login_details::where('user_id',$request->user_id)
                                ->update(['is_type'=> 'no']);
        
        session()->flash('userName');
        session()->flash('userId');
        session()->flash('type'); 
        //return redirect('/');
        return response()->json($request->user_id);
      // return view('loginAndRegistration.login');
    }
    public function logoutM(){
        
        $result = login_details::where('user_id',session('userId'))
                                ->update(['is_type'=> 'no']);
        
        session()->flash('userName');   
        session()->flash('userId');  
        session()->flash('type');  
        //session('test','wohhie');                       
       // return response()->json($request->user_id);
        return redirect('/');
    }
    public function validateEmail(Request $request){
        
        $result = User::all()
                        ->where('email', $request->emailValidate);
                       // ->get();
       // return ($result);
       
        if(count($result)>0)
        {
            //return ($result);
            return response()->json("true");
        }
        else{
            return response()->json("false");
        }
    }
    public function verifyLogin(Request $request){
        date_default_timezone_set('Canada/Central');
        $time = now();
        $users = User::all();
        

        foreach($users as $user){
            $data = array(
                'userId'=> $user->id,
                'userName'=> $user->username
            );
            //if($user<0){
             /*   $login_detail = new login_details();
                    $login_detail->user_id = $user->id;
                    $login_detail->last_activity = now();
                    $login_detail->is_type='yes';
                    $login_detail->save();
               */     
           // }
           $request->session()->put('userId',$user->id);
           $request->session()->put('userName',$user->username);
           $request->session()->put('type',$user->role);
            if(($user->email==$request->input('email')) && ($user->password==$request->input('password'))){
                if($user->role==1){
                    $result = login_details::where('user_id',$user->id)
                                            ->update(['is_type'=> 'yes']);
                    
                   // return view('owner.index')->with($data);
                    return redirect('/owner');
                }
                if($user->role==2){
                    $result = login_details::where('user_id',$user->id)
                    ->update(['is_type'=> 'yes']);
                   // return view('tenant.index')->with($data);
                    return redirect('/tenant');
                }       
                if($user->role==3){
                    $result = login_details::where('user_id',$user->id)
                    ->update(['is_type'=> 'yes']);
                    return view('manager.index')->with($data);
                }
                    
                //break;
            }
            
        }
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        
       // $user->save();
        return 'no';
       // return redirect('/customers')->with('success','Register');

    }
    public function create(){
        return view('loginAndRegistration.register');
    }
    public function register(Request $request)
    {    date_default_timezone_set('Canada/Central');
        $time = now();
        $user = new User;
        $user->firstName = $request->input('firstName');
        $user->lastName = $request->input('lastName');
        $user->userName = $request->input('userName');
        $user->email = $request->input('emailValidate');
        $user->password = $request->input('password');
        $user->role = $request->input('role');
        $user->save();
        $login_detail = new login_details();
        $login_detail->user_id = $user->id;
        $login_detail->last_activity = now();
        $login_detail->is_type='no';
        $login_detail->save();
        return redirect('/customerLogin')->with('success','Register');
    }
}
