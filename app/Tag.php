<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    protected $fillable = [
        'name'
    ];

    public function pages(){
        return $this->belongsToMany('App\Page')->withTimestamps();
	}

}
