<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use UxWeb\SweetAlert\SweetAlert;
Use App\aanmelden;
Use Alert;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use DB;
use Mail;
use Auth;


class aanmeldingen extends Controller
{
    private $info;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $njgroups = DB::table('njgroups')->where('status', 'enabled')->pluck('time');
        $data = array(
            'times' => $njgroups,
        );
        return view('create')->with($data);
    }

    public function test()
    {
        $njgroups = DB::table('njgroups')->where('status', 'enabled')->pluck('time');
        $cities = DB::table('cities')->pluck('name');
        $countries = DB::table('apps_countries')->get();
        $data = array(
            'times' => $njgroups,
            'cities' => $cities,
            'countries' => $countries,
        );
        return view('test')->with($data);
    }

    /**
     * Display a listing of the resource.
     *$this->data->firstname
     * @return \Illuminate\Http\Response
     */
    public function printticket()
    {
        $email = $_GET["email"];
        $firstname = DB::table('aanmeldens')->where('email', $email)->value('firstname');
        $id = DB::table('aanmeldens')->where('email', $email)->value('id');
        return view('print', ['firstname' => $firstname, 'email' => $email, 'id' => $id]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function success()
    {
        return view("success");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required',
            'tussenv' => 'present',
            'lastname' => 'required',
            'gender' => 'required|alpha',
            'age' => 'required|numeric|min:16',
            'email' => 'required|email|unique:aanmeldens,email',
            'street' => 'required',
            'postal' => 'required',
            'province' => 'required|alpha_dash',
            'hnumber' => 'required|numeric',
            'country' => 'required',
            'area' => 'required',
            'tel' => 'required',
            'njgroup' => 'required',
            'child' => 'required',
            'over16' => 'required|accepted',
            'zwemdiploma' => 'required|accepted',
            'klachten' => 'required|accepted',
            'bewust' => 'required|accepted',
            'eigenrisico' => 'required|accepted',
            'luisteren' => 'required|accepted',
            'g-recaptcha-response' => 'required|captcha'
        ]);
        aanmelden::create($request->except('g-recaptcha-response', '_token', 'over16', 'zwemdiploma', 'klachten', 'bewust', 'eigenrisico', 'luisteren'));

        $email = $request->input('email');
        $info = $user = DB::table('aanmeldens')->where('email', $request->input('email'))->first();
        Mail::send('emails.aanmeld', array('info'=>$info), function($message) {
            $message->to($_POST["email"], $_POST["firstname"])->subject('Welkom bij de nieuwjaarsduik!');
        });

        return redirect()->action('aanmeldingen@success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function testmail()
    {
        if (Auth::check()) {
            $info = DB::table('aanmeldens')->where('email', "idiegogameplay@gmail.com")->first();
            Mail::send('emails.aanmeld', ['info' => $info], function ($message) {
                $message->to("idiegogameplay@gmail.com", "Diego")->subject('Welkom bij de nieuwjaarsduik!');
            });
            echo "yes";
        }
        else {
            return redirect('login');
        }
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
