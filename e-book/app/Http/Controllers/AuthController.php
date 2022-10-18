<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'NIS' => 3103120170,
            'Name' => 'Noviana Retno Pinasti',
            'Phone' => '085842980857',
            'Class' => 'XII RPL 5'
        ];
    }
}
