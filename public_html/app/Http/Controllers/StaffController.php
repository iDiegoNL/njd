<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Validator;
use UxWeb\SweetAlert\SweetAlert;
Use App\aanmelden;
Use Alert;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\DB;
use Mail;
use Auth;
use Illuminate\Foundation\Auth\RegistersUsers;

class StaffController extends Controller
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
    public function index()
    {
        $data = DB::table('users')->paginate(10);
        return view('dashboard.viewstaff', ['data' => $data]);
    }

    // Create staff account page
    public function create()
    {
        return view('dashboard.addstaff');
    }

    // Create the new staff account
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'string|required|unique:users',
            'email' => 'string|required|unique:users|email',
            'password' => 'string|required'
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        Alert::success('Account toegevoegd!', 'U kunt nu inloggen met de opgegeven gegevens.');
        return redirect()->action('StaffController@index');
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
