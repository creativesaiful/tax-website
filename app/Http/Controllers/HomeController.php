<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class HomeController extends Controller
{
    public function index()
    {   
        $notices = Notice::latest()->get();
        return view('frontend.pages.home', compact('notices'));
    }


    public function preview($id){

        $notice = Notice::find($id);

        return view('frontend.pages.notice-preview', compact('notice'));

    }
}
