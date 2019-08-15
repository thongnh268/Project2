<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'id','moviename', 'director', 'cast','description','type','duration_min','language','opening_date','image_id'];

    protected $table = "movie"; 
    protected $primaryKey = 'id';
    
    
    public function image()
    {
        return $this->belongsTo('App\Image','imageID','imageID');
    }
    
     
}
