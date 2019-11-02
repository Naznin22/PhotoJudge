<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    
    //table name
    protected $table = 'photos';
    protected  $primaryKey = 'image_id';

    //primary key
    //public $primaryKey =['image_id'];
    //timestamps

    
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
