<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Charts;
use Carbon\Carbon;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groep1 = DB::table('aanmeldens')->where('njgroup', '12:00')->count();
        $groep2 = DB::table('aanmeldens')->where('njgroup', '12:10')->count();
        $groep3 = DB::table('aanmeldens')->where('njgroup', '12:20')->count();
        $groep4 = DB::table('aanmeldens')->where('njgroup', '12:30')->count();
        $groep5 = DB::table('aanmeldens')->where('njgroup', '12:40')->count();
        $groep6 = DB::table('aanmeldens')->where('njgroup', '12:50')->count();
        $current = Carbon::now('Europe/Amsterdam');

        $chart = Charts::create('pie', 'highcharts')
            ->title('Groepenverdeling')
            ->labels(['12:00', '12:10', '12:20', '12:30', '12:40', '12:50'])
            ->values([$groep1, $groep2, $groep3, $groep4, $groep5, $groep6])
            ->responsive(true);

        $aanmeldingen = DB::table('aanmeldens')->count();

        $data = array(
            'groep1'  => $groep1,
            'groep2'  => $groep2,
            'groep3'  => $groep3,
            'groep4'  => $groep4,
            'groep5'  => $groep5,
            'groep6'  => $groep6,
            'current'  => $current,
            'chart'  => $chart,
            'aanmeldingen'  => $aanmeldingen,
        );

        return view('dashboard.home')->with($data);
    }
}
