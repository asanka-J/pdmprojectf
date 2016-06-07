<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['body']
    ;
    public function user()
    {
        return $this-> belongsTo('App\Model\User','user_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    protected $table = 'post';

}
