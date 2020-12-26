<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('home');
    }

    /**
     *
     */
    public function booking(Request $request){
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'zipcode' => ['required','numeric','min:20001','max:26999']
        ]);

          return view('booking');
//        return redirect()->route('booking');
    }

}
