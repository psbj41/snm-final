<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $roles;
    public function __construct()
    {
        $this->roles = Role::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('backend.pages.admin.user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.admin.user.create')->with('roles', $this->roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'alternate_phone' => $request->alternate_phone
        ]);
        $user->assignRole($request->role_id);
        return redirect()->route('user.index')->with('success', $user->name." Successfully Registered");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('backend.pages.admin.user.edit',compact(['user']))->with('roles', $this->roles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if($request->password == null){
            $user->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'alternate_phone' => $request->alternate_phone,
                'email_address' => $request->email_address,
                'gender' => $request->gender,
                'address' => $request->address,
                'area' => $request->area,
            ]);
        }else{
            $user->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'alternate_phone' => $request->alternate_phone,
                'email_address' => $request->email_address,
                'gender' => $request->gender,
                'address' => $request->address,
                'area' => $request->area,
            ]);
        }
        $user->syncRoles([$request->role_id]);
        return redirect()->route('user.index')->with('success', $user->name." Successfully Edited");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success'," Successfully Deleted");
    }

    public function pageReset(){
        return view('auth.passwordchange');
    }


    public function pageResetStore(Request $request){
        $user = User::where('phone',$request->phone)->update([
            'password' => Hash::make($request->password),
            'remember_token' => '1',
        ]);
        return redirect()->route('login');
    }

    public function profile()
    {
        return view('backend.pages.admin.user.profile');
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
