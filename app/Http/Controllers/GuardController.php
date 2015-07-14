<?php

namespace PrisonManagementSystem\Http\Controllers;

use Illuminate\Http\Request;

use PrisonManagementSystem\Http\Requests;
use PrisonManagementSystem\Http\Controllers\Controller;
use PrisonManagementSystem\User;
use Session;

class GuardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $guards = User::guards()->paginate(30);
        return view('guard.index',['guards' => $guards]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('guard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $guard = User::guards()->whereId($id)->firstOrFail();
        return view('guard.show',['guard' => $guard]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $guard = User::guards()->whereId($id)->firstOrFail();
        return view('guard.edit',['guard' => $guard]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $guard = User::guards()->whereId($id)->firstOrFail();
        $guard->delete();
        Session::flash('success_msg','Guard Deleted Successfully');
        return redirect()->route('guard.index');
    }
}
