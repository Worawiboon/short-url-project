<?php

namespace App\Http\Controllers;


use App\ShortLink;
use Illuminate\Http\Request;

class ShortLinkController extends Controller
{
    //
    public function index() {
        $short_links = ShortLink::all();
        return view('shortenLink-show',compact('short_links'));
    }

    public function new(){
        return view('new.shortenLink');
    }

    public function store(Request $request) {
        $request->validate([
            'longURL' => 'required'
        ]);

        $ShortLink = new ShortLink;
        $ShortLink->longURL = $request->get('longURL');
        $number = rand(10,99);
        $string = $this->generateRandomString(3);
        $ShortLink->shortURL = "www.short.local/gt/394$string$number";
        $ShortLink->save();




        return redirect('/')->with('success','ShortLink created');

    }

    function generateRandomString($length = 3) {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


}
