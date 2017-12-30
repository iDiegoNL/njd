<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CheckController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function emailcheck()
    {
            $entered = $_GET["id"];
            $exists = DB::table('aanmeldens')->where('email', $entered)->first();
            $njgroup = DB::table('aanmeldens')->where('email', $entered)->value('njgroup');
            $name = DB::table('aanmeldens')->where('email', $entered)->value('firstname');

        if($njgroup == "12:00"){
            $color = "purple";
        }
        elseif($njgroup == "12:10"){
           $color = "orange";
        }
        elseif($njgroup == "12:20"){
            $color = "blue";
        }
        elseif($njgroup == "12:30"){
            $color = "green";
        }
        elseif($njgroup == "12:40"){
            $color = "yellow";
        }
        elseif($njgroup == "12:50"){
            $color = "red";
        }
        elseif($njgroup == ""){
            $color = "";
        }
        if (DB::table('settings')->where('name', 'server')->value('production') == "true") {
            if (!empty($njgroup)) {
                DB::table('aanmeldens')
                    ->where('email', $entered)
                    ->update(['came' => "true"]);
            }
        }
            return view('dashboard.check', ['exists' => $exists, 'userid' => $entered, 'color' => $color, 'njgroup' => $njgroup, 'name' => $name]);
    }

    public function idcheck()
    {
        $entered = $_GET["id"];
        $exists = DB::table('aanmeldens')->where('id', $entered)->first();
        $njgroup = DB::table('aanmeldens')->where('id', $entered)->value('njgroup');
        $name = DB::table('aanmeldens')->where('id', $entered)->value('firstname');

        if($njgroup == "12:00"){
            $color = "purple";
        }
        elseif($njgroup == "12:10"){
            $color = "orange";
        }
        elseif($njgroup == "12:20"){
            $color = "blue";
        }
        elseif($njgroup == "12:30"){
            $color = "green";
        }
        elseif($njgroup == "12:40"){
            $color = "yellow";
        }
        elseif($njgroup == "12:50"){
            $color = "red";
        }
        elseif($njgroup == ""){
            $color = "";
        }
        if (DB::table('settings')->where('name', 'server')->value('production') == "true") {
            if (!empty($njgroup)) {
                DB::table('aanmeldens')
                    ->where('id', $entered)
                    ->update(['came' => "true"]);
            }
        }
        return view('dashboard.check', ['exists' => $exists, 'userid' => $entered, 'color' => $color, 'njgroup' => $njgroup, 'name' => $name]);
    }

    public function enter()
    {
        $color = "transparent";
        return view('dashboard.enter', ['color' => $color]);
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
