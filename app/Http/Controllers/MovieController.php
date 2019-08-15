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
class MovieController extends Controller
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
    public function taophim()

    { 
        return view('admin.taophim');
    }
    public function taophim2(Request $request)

    {
      $this->validate(request(), [
            'moviename' => 'required',
            'director' => 'required',
            'cast' => 'required',
            'description' => 'required',
            'type' => 'required',
            'duration_min' => 'required',
            'language' => 'required',
            'opening_date' => 'required'
        ]);
        $cover = $request->file('image');
        $extension = $cover->getClientOriginalExtension();
    Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
   
    $image = new Image();
    $image->mime = $cover->getClientMimeType();
    $image->original_filename = $cover->getClientOriginalName();
    $image->filename = $cover->getFilename().'.'.$extension;
    $image->save();

    $movie = new Movie();
    $movie->moviename = $request->moviename;
    $movie->cast = $request->cast;
    $movie->director = $request->director;
    $movie->description = $request->description;
    $movie->type = $request->type;
    $movie->duration_min = $request->duration_min;
    $movie->language = $request->language;
    $movie->opening_date = $request->opening_date;
   $movie->imageID = $image['id'];
    $movie->save();
   
  
    
        
        return redirect()->back()->withErrors(['msg', 'Them thanh cong']);   
    }


    public function chitiet($id) {

      $check = Movie::where('id','=',$id)->first();
         if($check) {
        $movie = Movie::where('id','=',$id)->get();
        $img = Image::all();
        
        return view('movie',compact('movie','img'));
        }
        else
            return redirect('/');
    }
}
