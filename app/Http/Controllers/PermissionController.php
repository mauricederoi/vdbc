<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
            $permissions = Permission::all();
            return view('permission.index')->with('permissions', $permissions);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role=Role::where('created_by', '=', \Auth::user()->creatorId())->get();
        return view('permission.create')->with('roles', $role);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $this->validate(
                $request, [
                            'name' => 'required|max:40',
                        ]
            );

            $name             = $request['name'];
            $permission       = new Permission();
            $permission->name = $name;

            
            $roles = $request['roles'];
            $permission->save();

            if(!empty($request['roles']))
            {
                foreach($roles as $role)
                {
                    $r          = Role::where('id', '=', $role)->firstOrFail(); 
                    $permission = Permission::where('name', '=', $name)->first(); 
                    $r->givePermissionTo($permission);
                }
            }

            return redirect()->route('permissions.index')->with('success', 'Permission ' . $permission->name . ' added!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::where('id', '=', $id)->first();
        $roles = Role::where('created_by', '=', \Auth::user()->creatorId())->get();
        return view('permission.edit', compact('roles', 'permission'));
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

            $permission = Permission::findOrFail($id);
                $this->validate(
                    $request, [
                                'name' => 'required|max:40',
                            ]
                );
                $input = $request->all();
                $permission->fill($input)->save();

                return redirect()->route('permissions.index')->with('success', 'Permission ' . $permission->name . ' updated!');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
            $permission = Permission::findOrFail($id);
            $permission->delete();

            return redirect()->route('permissions.index')->with('success', 'Permission deleted!');

    }
}
