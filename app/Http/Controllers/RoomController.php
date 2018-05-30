<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class RoomController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $rooms = DB::table('room_details')->get();
        return view('rooms', ['rooms' => $rooms]);
    }


    public function view($id)
    {




        $room = DB::table('room_details')->where('room_id', $id)->first();

        $admin = \Auth::user()->is_admin;


        if(false)
        {
            return view('admin_view_room', ['room' => $room]);
        }
        else{
            return view('view_room', ['room' => $room]);
        }



    }

    public function book($id)
    {


        DB::table('room_details')
            ->where('room_id', $id)
            ->update(['booked' => 1]);


        $room = DB::table('room_details')->where('room_id', $id)->first();

        return view('book', ['room' => $room]);
    }

}
