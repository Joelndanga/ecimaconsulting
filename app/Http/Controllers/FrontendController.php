<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function a_propos_de_nous_page(){
        return view('pages.frontend.a-propos-de-nous-page');
    }

    public function index_page(){
        return view('pages.frontend.home');
    }

    public function about_us_page(){
        return view('pages.frontend.about-page');
    }

    public function contact_page(){
        return view('pages.frontend.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMessageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storeMessage(Request $request)
    {

        DB::insert('insert into messages (name, status, email, subject, content) values (?, ?, ?, ?, ?)', [$request->name, false, $request->email, $request->subject, $request->contentt]);

        //return Response::json($enterprise);
        return redirect()->back();
        //return redirect(\App::getLocale().'/admin_show_messages');
    }

    public function business_intelligence_page(){
        return view('pages.frontend.business-intelligence');
    }

    public function ecima_group_page(){
        return view('pages.frontend.ecima-group-page');
    }
}
