<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;

class AdminController extends Controller
{
    public function admin_login_view(){
        return view('adminsection/admin_login');
    }
    public function admin_register_view(){
         return view('adminsection/admin_signup');
    }
    public function adminregisteraction_submit(Request $req){
        $name=$req->input('name');
        $email=$req->input('email');
        $phone=$req->input('phone');
        $password=md5($req->input('password'));
        $role=$req->input('role');
        $status = 1;
        $submit = [
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'password'=>$password,
            'role'=>$role,
            'status'=>$status
        ];
        $check=DB::table('users')->where('email','=',$email)->first();
        if($check){
            return redirect('/admin-register')->with('message','Email Alredy Exists');
        }else{
            DB::table('users')->insert($submit);
        return redirect('/admin-login');
        }
    }
    public function adminlogin_submit(Request $req){
        $email=$req->input('email');
        $password=md5($req->input('password'));
        $logdata=DB::table('users')->where('email',$email)->get();
        if(empty($logdata[0])){
            return redirect('/admin-login')->with('message','User not found');
        }else{
           $dbpass = $logdata[0]->password;
           if($dbpass == $password){
              $uid=$logdata[0]->id;
              $uname=$logdata[0]->name;
              $uemail=$logdata[0]->email;
              $uphone=$logdata[0]->phone;
              $role=$logdata[0]->role;
              $req->session()->put('session_id',$uid);
              $req->session()->put('session_name',$uname);
              $req->session()->put('session_email',$uemail);
              $req->session()->put('session_phone',$uphone);
              $req->session()->put('session_role',$role);
              return redirect('/admindashboard');
           }else{
             return redirect('/admin-login')->with('message','Password not match');
           }
        }
    }
    public function admindashboard_view(){
        $render['title'] = 'Dashboard';
        return view('adminsection.admindashboard',$render);
    }
    public function clinic_view(){
        $render['title'] = 'Clinic';
        return view('adminsection.cliniclist',$render);
    }
    public function addclinic_view(){
        return view('adminsection.addclinicmodal');
    }
}
