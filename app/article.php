<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class article extends Model
{
    protected $fillable = [
    	'user_id', 'content', 'live'
    ];
//Mutators start with set
    public function setLiveAttribute($value)
    {
    	$this->attributes['live'] = (boolean)($value);
    }
//Accessors start with get
    public function getshortContentAttribute()
    {
    	return substr($this->content, 0, random_int(60, 150)) . '... ';
    }
}
