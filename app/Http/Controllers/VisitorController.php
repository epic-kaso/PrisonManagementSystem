<?php

namespace PrisonManagementSystem\Http\Controllers;

use Illuminate\Http\Request;

use PrisonManagementSystem\Http\Requests;
use PrisonManagementSystem\Http\Controllers\Controller;
use PrisonManagementSystem\Visitor;
use Session;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $visitors = Visitor::paginate(30);
        return view('visitors.index',['visitors' => $visitors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('visitors.create');
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
        $visitor = Visitor::findOrFail($id);
        return view('visitors.show',['visitor' => $visitor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
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
        $visitor = Visitor::findOrFail($id);
        $visitor->delete();
        Session::flash('success_msg','Visit Deleted Successfully');
        return redirect()->route('visitor.index');
    }
}
