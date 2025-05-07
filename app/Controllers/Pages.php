<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home'){
        $data = array(
            'title' => $page
        );
           return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
}
