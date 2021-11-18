<?php

namespace App\Http\Controllers;

use App\Device;
use App\Sensor;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['devices'] = Device::where('type_id', 20)->get();
        return view('page.home', $data);
    }

    public function detail($id)
    {
        $data = [
            'device' => Device::find($id),
            'volt' => Sensor::where('device_id', $id)->where('sensor_type_id', 6)->first(),
            'current' => Sensor::where('device_id', $id)->where('sensor_type_id', 7)->first(),
            'power' => Sensor::where('device_id', $id)->where('sensor_type_id', 8)->first(),
            'sensors' => Sensor::where('device_id', $id)->orderBy('sensor_type_id')->get()
        ];
        return view('page.detail',$data);
    }

    public function trend(){
        return view('page.trend');
    }
    
    public function alarm(){
        return view('page.alarm');
    }

    public function data(){
        return view('page.data');
    }
}
