<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends \Eloquent {

	protected $fillable = [
        'title',
        'body',
        'user_id'
    ];

}
