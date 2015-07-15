<?php

namespace PrisonManagementSystem\Http\Controllers;

use PrisonManagementSystem\Http\Requests;
use PrisonManagementSystem\Http\Controllers\Controller;
use Request;

class ProfileController extends Controller
{

    protected $validationRules = [
        'last_name' => 'required|max:255',
        'first_name' => 'required|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',
        'sex' => '',
        'address' => '',
    ];

    protected $updateRules = [
        'last_name' => 'max:255',
        'first_name' => 'max:255',
        'password' => 'min:4|confirmed',
        'sex' => '',
        'address' => '',
    ];


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        if(\Auth::id() != $id){
            abort(404);
        }

        $user = \Auth::user();

        return view('profile.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        if(\Auth::id() != $id){
            abort(404);
        }

        $user = \Auth::user();

        return view('profile.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        if(\Auth::id() != $id){
            abort(404);
        }

        $user = \Auth::user();

        $validation = $this->validator(Request::all(),$this->updateRules);

        if($validation->fails()){
            return redirect()->back()
                ->withInput(Request::all())
                ->withErrors($validation);
        }

        $data = Request::only($this->requiredkeys($this->updateRules));

        if(isset($data['password']) && !empty($data['password'])){
            $data['password'] = bcrypt($data['password']);
        }else{
            unset($data['password']);
        }

        $user->fill($data);

        $user->save();

        return redirect(route('profile.show',['id'=> $user->id]))->with('success','Updated Successfully');
    }
}
