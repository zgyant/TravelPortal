<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use Hash;
use App\User;
use App\Users;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    public function bookpackage()
    {
        if(Session::get('type')=='user')
        {
            $email = Session::get('email');
            $pid = $_GET['id'];
            $booking = new Booking();
            $booking->email = $email;
            $booking->packageid = $pid;
            $booking->save();
            return redirect()->intended('home?page=list-booking');
        }
        else
        {
            abort(403, 'Unauthorized action.');
        }
    }
}