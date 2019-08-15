<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DateTime,File,Input,DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Redirect;
use App\Movie;
use App\Image;
use App\Screen;
class ScreenController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /** public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function taogio()

    {   
      $sc = Screen::all();
      $mov = Movie::all();
        return view('admin.taogiochieu',compact('mov','sc'));
    }
    public function taogio2(Request $request)

    {

      $this->validate(request(), [
            'movie_id' => 'required',
            'sreening_star' => 'required'
        ]);

    $scr = new Screen();
    $scr->movie_id = $request->movie_id;
    $scr->sreening_star = $request->times;
    $scr->save();
   
  
    
        
        return redirect()->back()->withErrors(['msg', 'Them thanh cong']);   
    }


    public function show() {

     $sc = Screen::all();
        
        return view('admin.themgiochieu',compact('sc'));
        
    }
}
