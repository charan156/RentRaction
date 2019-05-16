<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chatting;
class ChattingController extends Controller
{
    public function index(){
        //$request-get('hiddenValue');
        if(session('userId')!= null){
        return view('chatting.index');
        }
        // $data = array(
        //     'userId'=>$request->get('hiddenValue1'),
        //     'username'=>$request->get('hiddenValue2')
        // );
        // return view('chatting.index')->with($data);

    }
}
