<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
    //

    /**
     *
     * Show a form
     */

     public function create(){
         echo "got here"; die();

       // $gettopic = $topic;

       // return view('publisher');//, compact('gettopic'));
       Redis::publish('channel', json_encode(['cache' => 'clear']));

     }
}
