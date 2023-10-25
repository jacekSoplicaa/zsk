<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function ShowArray(){
        $data = [
            'firstName' => 'Jan',
            'lastName' => 'Nowak',
            'city' => 'Poznań',
            'hobby' => ['siatkówka', 'żużel', 'piłka nożna']
        ];
        return view('array', ['user' => $data]);
    }
}
