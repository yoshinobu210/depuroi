<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = ['id'];

    // 以下を追記
    public static $rules = [
        'title' => 'required',
        'body' => 'required',
    ];
    
    public function histories()
    {
      return $this->hasMany('App\History');

    }
}
