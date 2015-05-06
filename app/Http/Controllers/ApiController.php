<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Page;

class ApiController extends Controller {

    public function index()
    {
        return Page::all();

    }

}
