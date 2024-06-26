<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class simple extends Controller
{
    public function index() {
        $fakeData = [
            'id' => '1',
            'name' => 'usman',
            'email' => 'usman@gmail.com'
        ];
        return response()->json($fakeData);
    }
}
