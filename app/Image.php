<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "image";
    protected $fillable = [
        'imageID', 'filename', 'mime','original_filename'];
    public function movie()
    {
        return $this->hasMany('App\Movie','imageID');
	
    }
}
