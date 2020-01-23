<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [


        'category_id',
        'photo_id',
        'name',
        'price',
        'year',
        'kilometers',
        'body',
        'user_id',
        'is_active',





    ];

    public function user(){

        return $this->belongsTo('App\User');

    }


    public function photo(){


        return $this->belongsTo('App\Photo');
    }

    public function category(){

        return $this->belongsTo('App\Category');
    }



}
