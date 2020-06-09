<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function index(){
        $title = ' Hello to index';
        return view('pages.index')->with('title', $title);
    }

    public function services() {
        $data = [
            'title' => ' The folowing services are provided: ',
            'services' => [
                'programing' , 'automation' , 'web design' 
            ]
            ];
        return view('pages.services')->with($data);
    }

    public function about(){
        return view('pages.about');
    }

}
