<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\Article;
use Illuminate\Support\Facades\Crypt;
use App\Models\Services\UsersServices;


class CrudController extends Controller
{

    use UsersServices;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        
        $users = User::join('countries', 'users.countries_id', '=', 'countries.country_id')
        ->get(['users.id','users.name','users.email',
        'users.created_at','users.rol','countries.country']);
        
        return view('crud.crud', compact('users'));
        
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
    public function show()
    {
        //
    }

    public function showUser($id)
    {

        $user = User::join('countries', 'countries_id', 'users.countries_id')
        ->where('id',$id)
        ->first();
        
        return view('crud.view-user', compact('user'));


    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $id     = Crypt::decrypt($id);
        $user   = User::findOrFail($id);
        
        return view('crud.update', compact('user'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $user = UsersServices::updateUser($request);
        
        return redirect()->route('users.crud')->with('status','User updated Successfully!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $user = User::find($id);
        $id = Crypt::decrypt($id);
        $guest = User::findOrFail($id)->delete();

        return redirect()->back()->with('status','User deleted Successfully!');
    
    }

}
