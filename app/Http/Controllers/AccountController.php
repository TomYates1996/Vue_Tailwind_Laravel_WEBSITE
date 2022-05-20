<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Account::orderBy('created_at', 'DESC')->get();
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
        $newAccount = new Account;
        $newAccount->username = $request->account['username'];
        $newAccount->email = $request->account['email'];
        $newAccount->password = $request->account['password'];
        $newAccount->verified = $request->account['verified'];
        $newAccount->save();

        return $newAccount;
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
        // $existingAccount = Item::find( $id );

        // if( $existingAccount ) {
        //     $existingAccount->verified = $request->account['verified'] ? true : false;
        //     $existingAccount->verified = $request->account['verified'] ? true : false;
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingAccount = Account::find( $id );

        if( $existingAccount ) {
            $existingAccount->delete();
            return "Account deleted successfully";
        }

        return "Something went wrong";
    }
}
