<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as UserMod;
use App\Exports\BladeExport; 

class DemoController extends Controller
{
public function index()
    {
       return "Method POST: demoone";

    }

    public function demotwo()
    {
        return "Method POST: demotwo";
    }

    public function demothree()
    {
        return "Method GET, POST : demothree";
    }

    public function demofour()
    {
        return "Method GET, POST, PUT/PATCH, DELETE : demofour";
    }
    public function testlinenoti()
    {
        $line_noti_token = "34uUAb3cTV2mt2fVRlmqGLeASmkH53T3D7PPlTHmBoE";
        
        $message = array(
          'message' => "Hello World",//required message
          'stickerPackageId'=> 2,
          'stickerId'=> 34
        );
        
        //notify_message($message,$line_noti_token);
        
        return 'ok';
    }

    public function testexcel(){
        $user = UserMod::all();
        return \Excel::download(new BladeExport($user->toArray()), 'invoices.xlsx');
    }

}
