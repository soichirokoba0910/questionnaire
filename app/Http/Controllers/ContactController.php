<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Age;
class ContactController extends Controller
{
    public function index(){
        $items = Age::all();
        return view('contact.index',['items' => $items]);
    }

    public function post(Request $request){
        global $data;
        $data = $request;
        return view('contact.edit', ['data' => $data]);
    }
}
