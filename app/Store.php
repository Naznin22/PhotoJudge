<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //table name
    protected $table = 'stores';
    //primary key
    public $primaryKey = 'email';
    //timestamps
    public $timestamps = true;
}
