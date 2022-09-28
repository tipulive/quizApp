<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProjectController extends Controller
{
    //

    public function __construct()
    {
        date_default_timezone_set(env('TIME_ZONE'));
        $this->today = date('Y-m-d H:i:s', time());


    }
    public function test(Request $request){

        return response([
            "status"=>true



        ],201);
    }
    public function add(Request $request){

        $uid=date(time());
        $check=DB::table("ratings")
        ->insert([
            "uid"=>$uid,
            //"question"=>$questions,
            "answer"=>$request->input('answer'),
            "ratingValue"=>10,

           ]);

        if($check)
        {
            return response([
                "status"=>true,
                "result"=>$request->input('answer')


            ],201);
        }
    }
    public function result(){
        $check=DB::select("select
        answer,sum(ratingValue) as Rating,(sum(ratingValue)*100/(select sum(ratingValue) from ratings)) as percentages,(sum(ratingValue)*20/(select sum(ratingValue) from ratings)) as results from ratings group by answer order by sum(ratingValue) desc");
        return response([
           "result"=>$check

       ],201);

       }


}
