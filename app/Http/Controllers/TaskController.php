<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prefectures;
use Auth;

class TaskController extends Controller
{
    private $location;

    public function __construct(Prefectures $prefecturesInstanceClass)
    {
        $this->location = $prefecturesInstanceClass;
    }

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

    public function lv4() {
        $prefectures = $this->location->all();
        return view('lv4',compact('prefectures'));
    }
}
