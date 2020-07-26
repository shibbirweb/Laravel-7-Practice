<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function setRole()
    {

        $roles = Role::all();
        $users = User::all();

        return view('user-role', compact('users', 'roles'));
    }


    public function store(Request $request)
    {
        //$role_ids = $request->role_id;


        /*
        $roles = $role_ids->map(function($role_id) {
            $item = [$role_id => ['last_modified_by' => 'Shibbir']];
            $item = collect($item)->collapse();
            return $item;
            /*return [
                'role_id' => [
                    $role_id => [
                        "last_modified_by" => 'Shibbir'
                    ]
                ]
            ];
        })
            */

        //return $roles->toArray();

        $user  = User::find($request->user_id);

        $user->roles()->toggle($request->role_id);
        //$role = Role::find($request->role_id);

       /* foreach ($role_ids as  $id){
            $user->roles()->updateExistingPivot($id, ['last_modified_by' => 'Joy']);
        }*/

        //$role->users()->attach($request->user_id);

        return 'success';
    }
}
