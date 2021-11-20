<?php

namespace App\Http\Controllers;

use App\Device;
use App\Sensor;
use App\SensorLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('page.detail', $data);
    }

    public function trend()
    {
        $data['devices'] = Device::all();
        $limit = 20;
        $vlogtime = SensorLogs::select(DB::raw('TIME(created_at) as time'))->where('sensor_id', 1)->orderBy('id', 'ASC')->limit($limit)->pluck('time');
        $vr = SensorLogs::select(DB::raw('L1 as vr'))->where('sensor_id', 1)->orderBy('id', 'ASC')->limit($limit)->pluck('vr');
        $vs = SensorLogs::select(DB::raw('L2 as vs'))->where('sensor_id', 1)->orderBy('id', 'ASC')->limit($limit)->pluck('vs');
        $vt = SensorLogs::select(DB::raw('L3 as vt'))->where('sensor_id', 1)->orderBy('id', 'ASC')->limit($limit)->pluck('vt');

        $clogtime = SensorLogs::select(DB::raw('TIME(created_at) as time'))->where('sensor_id', 2)->orderBy('id', 'ASC')->limit($limit)->pluck('time');
        $cr = SensorLogs::select(DB::raw('L1 as cr'))->where('sensor_id', 2)->orderBy('id', 'ASC')->limit($limit)->pluck('cr');
        $cs = SensorLogs::select(DB::raw('L2 as cs'))->where('sensor_id', 2)->orderBy('id', 'ASC')->limit($limit)->pluck('cs');
        $ct = SensorLogs::select(DB::raw('L3 as ct'))->where('sensor_id', 2)->orderBy('id', 'ASC')->limit($limit)->pluck('ct');

        $plogtime = SensorLogs::select(DB::raw('TIME(created_at) as time'))->where('sensor_id', 2)->orderBy('id', 'ASC')->limit($limit)->pluck('time');
        $pr = SensorLogs::select(DB::raw('L1 as pr'))->where('sensor_id', 2)->orderBy('id', 'ASC')->limit($limit)->pluck('pr');
        $ps = SensorLogs::select(DB::raw('L2 as ps'))->where('sensor_id', 2)->orderBy('id', 'ASC')->limit($limit)->pluck('ps');
        $pt = SensorLogs::select(DB::raw('L3 as pt'))->where('sensor_id', 2)->orderBy('id', 'ASC')->limit($limit)->pluck('pt');

        $data['vlogtime'] = json_encode($vlogtime);
        $data['vr'] = json_encode($vr);
        $data['vs'] = json_encode($vs);
        $data['vt'] = json_encode($vt);

        $data['clogtime'] = json_encode($clogtime);
        $data['cr'] = json_encode($cr);
        $data['cs'] = json_encode($cs);
        $data['ct'] = json_encode($ct);

        $data['plogtime'] = json_encode($plogtime);
        $data['pr'] = json_encode($pr);
        $data['ps'] = json_encode($ps);
        $data['pt'] = json_encode($pt);
        return view('page.trend', $data);
    }

    public function alarm()
    {
        return view('page.alarm');
    }

    public function data()
    {
        return view('page.data');
    }
}
