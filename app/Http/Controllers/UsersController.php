<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Click;
use App\wplist;

class UsersController extends Controller
{
    //
    public function index($id)
    {




        $d = wplist::where(['id' => $id])->get();

        $data = $d[0]['wplink'];

        if ($data) {

            $product = new Click;

            $product->delear_id = $id;
            $product->click = "click ";
            $product->save();



            return redirect()->away($data);
        }
    }
}