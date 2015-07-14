<?php

namespace PrisonManagementSystem\Http\Controllers;

use PrisonManagementSystem\Http\Requests;
use PrisonManagementSystem\Http\Controllers\Controller;
use PrisonManagementSystem\Prisoner;
use PrisonManagementSystem\PrisonerTransfer;
use Request;

class PrisonerTransferController extends Controller
{
    protected $validationRules = [
        'prisoner_id' => 'required|exists:prisoners,id',
        'destination' => 'required|max:255'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $transfers = PrisonerTransfer::with('prisoner')->paginate(30);

        return view('prisoner.transfer.index',compact('transfers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $prisoners = Prisoner::all();

        return view('prisoner.transfer.create',compact('prisoners'));
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

        $transfer = PrisonerTransfer::create($data);

        return redirect(route('transfer.show',['id'=> $transfer->id]))->with('success','Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $transfer = PrisonerTransfer::with('prisoner')->findOrFail($id);
        return view('prisoner.transfer.show',['transfer' => $transfer]);
    }

    public function edit($id)
    {
        $prisoners = Prisoner::all();
        $transfer = PrisonerTransfer::with('prisoner')->findOrFail($id);
        return view('prisoner.transfer.edit',['transfer' => $transfer,'prisoners'=>$prisoners]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $transfer = PrisonerTransfer::findOrFail($id);

        $data = Request::only($this->requiredkeys());

        $transfer->fill($data);

        $transfer->save();

        return redirect(route('transfer.show',['id'=> $transfer->id]))->with('success','Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $transfer = PrisonerTransfer::with('prisoner')->findOrFail($id);
        $transfer->delete();

        return redirect()->route('transfer.index');
    }
}
