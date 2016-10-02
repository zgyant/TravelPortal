<?php

namespace App\Http\Controllers;

use App\Packages;
use App\Stories;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
class DashController extends Controller
{
    public function newpackage(Request $request)
    {
        if(Session::get('type')=='admin')
        {
            $package=new Packages();
            $package->location=Input::get('location');
            $package->time=Input::get('time');
            $package->cost=Input::get('cost');
            $package->company=Input::get('company');
            $package->address=Input::get('contact');
            $package->activity=Input::get('activity');
            $package->save();
            return redirect()->route('home');
        }
        else
        {
           return redirect()->route('home');

        }
    }public function editpackage(Request $request)
    {
        if(Session::get('type')=='admin')
        {
            $id=Session::get('idfedit');
            $package=Packages::find($id);
            $package->location=Input::get('location');
            $package->time=Input::get('time');
            $package->cost=Input::get('cost');
            $package->company=Input::get('company');
            $package->address=Input::get('contact');
            $package->save();
            return redirect()->intended('home?page=list-packages');
        }
        else
        {
           return redirect()->route('home');

        }
    }
    public function newstory(Request $request)
    {

        if(Session::get('type')=='user')
        {
            $cimage = Input::file('cimage');
            $uimage = Input::file('pimage');
            $stories=new Stories();
            $user=Session::get('email');
            $stories->user=$user;
            $stories->title=Input::get('title');
            $stories->desc=Input::get('desc');
            $destinationPath = base_path(). '/public/img/';
            $Cfilename = $cimage->getClientOriginalName();
            $Pfilename = $uimage->getClientOriginalName();
            $cimage->move($destinationPath, $Cfilename);
            $uimage->move($destinationPath, $Pfilename);

            $stories->uimage=$Pfilename;
            $stories->cimage=$Cfilename;
            $stories->save();
            return redirect()->route('index');
        }
        else
        {
            return redirect()->route('home');

        }
    }
}