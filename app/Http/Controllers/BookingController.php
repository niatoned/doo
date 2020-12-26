<?php

namespace App\Http\Controllers;

use App\Models\models\Booking;
use App\Models\User;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'zipcode' => ['required','numeric','min:20001','max:26999']
        ]);

        $email = $request->input('email');
        $password = Hash::make('12');
        $user = User::where('email',$email)->first();

        if ($user === null) {
            User::query()->create(['password' => $password,
                'email' => $email,
                'name' => $email]);
        }
        Auth::login($user);

//        if (Auth::attempt($email, $password)) {
//            // Authentication passed...
//            return redirect()->intended('booking');
//        }

        if (Auth::check()) {
            return view('booking');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
//        $request->validate([
//            'address' => 'required',
//            'terms' => 'required',
//            'phone_number' => 'required|regex:/(01)[0-9]{9}/'
//        ]);

        auth()->user()->update([
            'name' => $request->input('name'),
            'phone' => $request->input('phone_number')]);

        $extra = [];
        $extra[] = $request->input('box-1')!=="on"?"":"oven";
        $extra[] = $request->input('box-2')!=="on"?"":"windows";
        $extra[] = $request->input('box-3')!=="on"?"":"fridge";
        $extra[] = $request->input('box-4')!=="on"?"":"ironing";

        $date = Date::createFromFormat("m/d/Y", $request->input('date'));

        $price = 150;
        $card_number = intval(str_replace(' ', '', $request->input('card_number')));

        Booking::query()->create([
            'type' => $request->input('type'),
            'frequency' => $request->input('frequency'),
            'bedroom' => $request->input('hbedroom')==null?1:$request->input('hbedroom'),
            'bathroom' => $request->input('hbathroom')==null?1:$request->input('hbathroom'),
            'comment' => $request->input('comment'),
            'level' => 2,
            'hours' => $request->input('hhours')==null?1:$request->input('hhours'),
            'start_hour' => $request->input('hour'),
            'start_date' => $date->format('Y-m-d'),
            'estimated_time' => $request->input('hhours')==null?1:$request->input('hhours'),
            'estimated_price' => $price,
            'card_number' => $card_number,
            'address' => $request->input('address'),
            'extras' => json_encode($extra),
            'user_id' => auth()->id(),
            'service_id' => 1,
        ]);
        session()->flash('success', "Booking successfully added!");
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
