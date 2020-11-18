<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    //



    public function show($topic){

        //Connecting to Redis server on localhost
       /* $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);
        echo "Connection to server sucessfully";
        //check whether server is running or not
        echo "Server is running: " . $redis->ping();
        */

        //echo $topic; die();
        $ids =  $topic; //die();
       return view('subcribe', compact('ids'));
    }

    /**
     * create subscription for topics
     * $topic
     */

    public function create(){

        Redis::publish('topic', json_encode(['cache'=>'clear']));

       /* $validator = $request->validate([
            'url' => ['required', 'url'],
        ]);
            $top = $topic;
            $url = $request->url;
            $data = [
                'url' => $url,
                'topic' => $top,
            ];

            $url = 'http://localhost:8000/event';

            //$data = $requst('url');
            //echo "got here". json_encode($data); die();

            return redirect(url($url))->with('data', $data);
        */
        //}
    }


    /**
     * Display subscription data created above
     *
     */

     public function display()
     {
         return view('view');
     }
}
