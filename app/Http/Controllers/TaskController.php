<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
<<<<<<< HEAD
    public function gizumo() {
        return 'gizumo';
    }
    
=======
    public function lv1() {
        return 'gizumo';
    }
    
    public function lv2() {
        return view('lv2');
    }

    public function lv2Ans(Request $request) {
        $ans = $request->all();
        return view('lv2Ans',compact('ans'));
    }
>>>>>>> gizumo_lv2
}
