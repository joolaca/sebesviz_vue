<?php

namespace Laraspace\Http\Controllers;

use Illuminate\Http\Request;
use Laraspace\Model\MainPage;

class MainPageController extends Controller
{
    /**
    *
    */
    public function index(){
        return view('admin.main_page.index');
    }

    public function getMainPageElemet(Request $request)
    {
        $element = MainPage::findOrFail($request->id);
        return response()->json($element);
    }

}
