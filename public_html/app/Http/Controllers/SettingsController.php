<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Charts;
use Carbon\Carbon;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $production = DB::table('settings')->where('name', 'server')->value('production');
        $njgroups = DB::table('njgroups')->get();

        $data = array(
            'production' => $production,
            'times' => $njgroups,
        );
        return view('dashboard.settings')->with($data);
    }

    public function ProductionUpdate(Request $request)
    {
        $production = DB::table('settings')->where('name', 'server')->value('production');
        if ($production == "false") {
            DB::table('settings')
                ->where('name', 'server')
                ->update(['production' => "true"]);
        }
        elseif ($production == "true") {
            DB::table('settings')
                ->where('name', 'server')
                ->update(['production' => "false"]);
        }
        return redirect('settings');
    }

    public function NjgroupUpdate(Request $request)
    {
        $query = $request->query('time');
        $njgroups = DB::table('njgroups')->where('time', $query)->value('status');
        if ($njgroups == "enabled") {
            DB::table('njgroups')
                ->where('time', $query)
                ->update(['status' => "disabled"]);
        }
        elseif ($njgroups == "disabled") {
            DB::table('njgroups')
                ->where('time', $query)
                ->update(['status' => "enabled"]);
        }
        return redirect('https://nieuwjaarsduikijburg.nl/settings');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
