<?php

namespace Laraspace\Http\Controllers;

use Illuminate\Http\Request;
use Laraspace\Model\MainPage;

class MainPageController extends Controller
{

    public function index(){
        $gallery_example_url = '/gallery_example';
        return view('front/main/content', compact('gallery_example_url'));
    }
    public function indexAdmin(){
        return view('admin.main_page.index');
    }

    public function getMainPageElemet(Request $request)
    {
        $element = MainPage::
            where('type', $request->type)
            ->where('sequence', $request->sequence)
            ->first();
        return response()->json($element);
    }

}
