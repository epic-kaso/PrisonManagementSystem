<?php

namespace PrisonManagementSystem\Http\Controllers;

use PrisonManagementSystem\Http\Requests;
use PrisonManagementSystem\Http\Controllers\Controller;
use PrisonManagementSystem\Visitor;
use Request;
use Session;
use Validator;

class VisitorController extends Controller
{
    protected $validationRules = [
        'last_name' => 'required|max:255',
        'first_name' => 'required|max:255',
        'sex' => 'required',
        'address' => '',
        'purpose' => 'required',
        'prisoner_visited' => 'required',
        'time_in' => 'required',
        'time_out' => 'required'
    ];
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
        $validation = $this->validator(Request::all());

        if($validation->fails()){
            return redirect()->back()
                ->withInput(Request::all())
                ->withErrors($validation);
        }

        $data = Request::only($this->requiredkeys());

        $visitor = Visitor::create($data);

        return redirect(route('visitor.show',['id'=> $visitor->id]))->with('success','Added Successfully');
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
