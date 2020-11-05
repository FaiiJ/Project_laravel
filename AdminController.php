<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\account;
use App\Models\statement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //new
        // $data = account::all();
        $data = DB::table('account')
        ->join('users', 'users.id', '=', 'account.user_id')
        ->select('users.firstname', 'users.lastname', 'account.*')
        ->get();
        return view('admin.console', compact('data'));
        //new
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
        $data = account::find($id);
        if($data->status == "Normal"){
            $status = "Suspended";
        }else{
            $status = "Normal";
        }
        DB::table('account')
        ->where('id', $id)  // find your user by their email
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update(array('status' => $status));

        return redirect()->to('admin');
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
        $data = account::find($id);
        $userID = $data->user_id;
        // statement::find($id)->delete();
        statement::where('account_id',$id)->delete();
        account::find($id)->delete();
        User::find($userID)->delete();

        return redirect()->to('admin');
    }
}
