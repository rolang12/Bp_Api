<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CrudArticlesController;
use App\Http\Resources\CrudController as ResourcesCrudController;
use App\Models\Services\UsersServices;
use App\Models\User;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    use UsersServices;


    public function show()
    {
        $users = User::join('countries', 'users.countries_id', '=', 'countries.country_id')
        ->get(['users.*', 'countries.country']);

        return ResourcesCrudController::collection($users);
    }

    public function showUser($id)
    {
        $data = UsersServices::getUser($id);
        $resource = new ResourcesCrudController($data);
        return $resource;
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
    }


    public function update(Request $request, User $user )
    {
        $user = UsersServices::updateUser($request);

        if ($user){
            return response()->json(['message' => "user updated successfully"], 200);
        }
        return response()->json(['message' => "Error to delete user "], 400);
    
    }
}
