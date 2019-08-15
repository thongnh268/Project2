<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Redirect;
use App\User;

use Auth;


class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth'); ca khach va nguoi dung deu thay
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getlist()
    { 
        $user1 = User::paginate(20); //hien thi so san pham show ra
         return view('layouts/userlist',['user1'=>$user1]);
    }
    public function delete($id)
    { 
        $this->middleware('admin');
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->back()->withErrors(['msg', 'Xoa thanh cong']);
    }
     public function getRole($id){
        $role = User::where('id','=',$id);
     }

     public function setRole(Request $request, $id){
        $this->middleware('admin');
        $role = User::where('id','=',$id)
        ->update(request(['role']));
        return redirect()->back()->withErrors('msg_role','Phan quyen thanh cong');
     }
     public function getupdate($id){
        if(Auth::user()->id==$id) {
          $update = User::where('id','=',$id)->first();
          return view('pages.user.update',compact('update'));
        }
        return redirect('/home');
     }
     public function update(Request $req,$id){
       $this->middleware('auth');
       $update = User::where('id','=',$id)->first();
       $update->addr = $req->input('addr');
       $update->phone = $req->input('phone');
       $update->update();
       return redirect()->back()->withErrors('msg','Cap nhat thanh cong');
       
     }
     public function profile($id){
        $this->middleware('auth');
        $c1 = Order::where('id','=',$id)->count();
        $c2 = Order::where('id','=',$id)->orderBy('orderid','desc')->first();
        return view('pages.user.profile',compact('c1','c2'));
     }
}
