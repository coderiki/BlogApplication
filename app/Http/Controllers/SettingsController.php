<?php

namespace App\Http\Controllers;

use App\Setting;
use Session;
use Auth;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function update(){
        $this->validate(request(), [

    		'site_name' => 'required',
    		'address' => 'required',
    		'contact_number' => 'required',
    		'contact_email' => 'required|email'

    	]);
    	$setting = Setting::first();

    	$setting->site_name = request()->site_name;
    	$setting->address = request()->address;
    	$setting->contact_number = request()->contact_number;
    	$setting->contact_email = request()->contact_email;

    	$setting->save();

    	Session::flash('success', 'Successfully Update Site Details');
    	return redirect()->route('home');
    }
    public function index(){
        return view('admin.settings.settings')->with('settings', Setting::first());
    }
}
