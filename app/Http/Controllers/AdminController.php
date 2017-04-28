<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $user = User::all(['id'])->toArray();
        $id = array();
        foreach ($user as $value){
            array_push($id,$value['id']);
        }
        dd($id);
    }
}
