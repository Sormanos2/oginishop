<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function index(){

        // Role::create(['name'=>'user']);
        // Permission::create(['name'=>'delete-product']);
        // auth()->user()->givePermissionTo('new-product');
        // return auth()->user()->permissions;

        // $permission=Permission::findById(2);
        // $role=Role::findById(1);
       
        // $role->givePermissionTo($permission);

        // return auth()->user()->getDirectPermissions();
        // return auth()->user()->getAllPermissions();

        // return User::role('admin')->get();
       // return User::permission('new-product')->get();

        return view('admin.index');
    }
}
