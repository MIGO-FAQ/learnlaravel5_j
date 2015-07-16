<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

	protected $fillable = [
        'title',
        'body',
        'user_id'
    ];

    public function tags(){
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function getTagListAttribute(){
        //dd($this->tags()->lists('id'));
        return $this->tags()->lists('id')->all();
    }

}
