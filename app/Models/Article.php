<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Article extends Model
{
    
	public $table = "articles";
    

	public $fillable = [
	    "title",
		"body"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "title" => "string",
		"body" => "string"
    ];

	public static $rules = [
	    "title" => "required"
	];

}
