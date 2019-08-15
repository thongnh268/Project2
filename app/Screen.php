<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Screen extends Model
{
    protected $fillable = [
        'id','movie_id','sreening_star'];

    protected $table = "screening"; 
    protected $primaryKey = 'id';
    
    
    
    
}
