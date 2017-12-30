<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use Charts;
Use App\aanmelden;

class SignupsController extends Controller
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
        $data = DB::table('aanmeldens')->paginate(10);
        $children = DB::table('aanmeldens')->where('child', 'met')->count();
        $signups = DB::table('aanmeldens')->pluck('id')->count();
        $current = Carbon::now('Europe/Amsterdam');
        return view('dashboard.view', ['data' => $data, 'children' => $children, 'signups' => $signups, 'current' => $current]);
    }

    public function getBasicData()
    {
        $users = DB::table('aanmeldens')->get();

        return Datatables::of($users)
            ->editColumn('country', '<i class="{{strtolower($country)}} flag"></i><br>{{ $country }}')
            ->rawColumns(['country'])
            ->make();
    }

    public function stats()
    {
        $children = DB::table('aanmeldens')->where('child', 'met')->count();
        $men = DB::table('aanmeldens')->where('gender', 'male')->count();
        $woman = DB::table('aanmeldens')->where('gender', 'female')->count();
        $signups = DB::table('aanmeldens')->pluck('id')->count();

        $groep1 = DB::table('aanmeldens')->where('njgroup', '12:00')->count();
        $groep2 = DB::table('aanmeldens')->where('njgroup', '12:10')->count();
        $groep3 = DB::table('aanmeldens')->where('njgroup', '12:20')->count();
        $groep4 = DB::table('aanmeldens')->where('njgroup', '12:30')->count();
        $groep5 = DB::table('aanmeldens')->where('njgroup', '12:40')->count();
        $groep6 = DB::table('aanmeldens')->where('njgroup', '12:50')->count();

        $male1 = DB::table('aanmeldens')->where('njgroup', '12:00')->where('gender', 'male')->count();
        $male2 = DB::table('aanmeldens')->where('njgroup', '12:10')->where('gender', 'male')->count();
        $male3 = DB::table('aanmeldens')->where('njgroup', '12:20')->where('gender', 'male')->count();
        $male4 = DB::table('aanmeldens')->where('njgroup', '12:30')->where('gender', 'male')->count();
        $male5 = DB::table('aanmeldens')->where('njgroup', '12:40')->where('gender', 'male')->count();
        $male6 = DB::table('aanmeldens')->where('njgroup', '12:50')->where('gender', 'male')->count();

        $female1 = DB::table('aanmeldens')->where('njgroup', '12:00')->where('gender', 'female')->count();
        $female2 = DB::table('aanmeldens')->where('njgroup', '12:10')->where('gender', 'female')->count();
        $female3 = DB::table('aanmeldens')->where('njgroup', '12:20')->where('gender', 'female')->count();
        $female4 = DB::table('aanmeldens')->where('njgroup', '12:30')->where('gender', 'female')->count();
        $female5 = DB::table('aanmeldens')->where('njgroup', '12:40')->where('gender', 'female')->count();
        $female6 = DB::table('aanmeldens')->where('njgroup', '12:50')->where('gender', 'female')->count();

        $geochart = Charts::database(aanmelden::all(), 'geo', 'highcharts')
            ->title('Landen')
            ->elementLabel('Aantal personen per land')
            ->responsive(true)
            ->groupBy('country');

        $timechart = Charts::create('pie', 'highcharts')
            ->title('Groepenverdeling')
            ->labels(['12:00', '12:10', '12:20', '12:30', '12:40', '12:50'])
            ->values([$groep1, $groep2, $groep3, $groep4, $groep5, $groep6])
            ->responsive(true);

        $daychart = Charts::database(aanmelden::all(), 'area', 'highcharts')
            ->title('Aanmeldingen per dag')
            ->elementLabel("Aantal")
            ->responsive(true)
            ->groupByDay();

        $data = array(
            'groep1'  => $groep1,
            'groep2'  => $groep2,
            'groep3'  => $groep3,
            'groep4'  => $groep4,
            'groep5'  => $groep5,
            'groep6'  => $groep6,
            'male1'  => $male1,
            'male2'  => $male2,
            'male3'  => $male3,
            'male4'  => $male4,
            'male5'  => $male5,
            'male6'  => $male6,
            'female1'  => $female1,
            'female2'  => $female2,
            'female3'  => $female3,
            'female4'  => $female4,
            'female5'  => $female5,
            'female6'  => $female6,
            'geochart'  => $geochart,
            'timechart'  => $timechart,
            'daychart'  => $daychart,
            'children'  => $children,
            'men'  => $men,
            'woman'  => $woman,
            'signups'  => $signups,
        );

        return view('dashboard.statistics')->with($data);
    }
}
