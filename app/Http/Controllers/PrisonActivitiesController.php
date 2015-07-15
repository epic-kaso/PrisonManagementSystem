<?php

namespace PrisonManagementSystem\Http\Controllers;

use Illuminate\Http\Request;

use PrisonManagementSystem\HardLabour;
use PrisonManagementSystem\Http\Requests;
use PrisonManagementSystem\Http\Controllers\Controller;
use PrisonManagementSystem\Prisoner;
use PrisonManagementSystem\SolitaryConfinement;

class PrisonActivitiesController extends Controller
{

    public function getAcquit($id)
    {
        $prisoner = Prisoner::findOrFail($id);
        $acquit  = \Request::get('acquit',false);

        if(!$acquit){
            $prisoner->bailed = false;
        }else{
            $prisoner->bailed = true;
        }

        $prisoner->save();

        return redirect()->back();
    }

    public function getRehab()
    {
        $prisoners = Prisoner::all();
        $solitaryPrisoners = SolitaryConfinement::with('prisoner')->paginate(30);
        $hardLabourPrisoners = HardLabour::with('prisoner')->paginate(30);

        return view('prisoner.rehab',compact('prisoners','solitaryPrisoners','hardLabourPrisoners'));
    }

    public function postRehab()
    {
        $data =  \Request::all();

        if(\Request::has('solitary')){
            return $this->handleSolitarySave($data);
        }

        if(\Request::has('hard-labour')){
            return $this->handleHardLabourSave($data);
        }

        return redirect()->back();
    }

    public function deleteRehab($id)
    {
        $data =  $id;

        if(\Request::has('solitary')){
            return $this->handleSolitaryDelete($data);
        }

        if(\Request::has('hard-labour')){
            return $this->handleHardLabourDelete($data);
        }

        return redirect()->back();
    }

    private function handleSolitarySave(array $data)
    {
        $solitary = SolitaryConfinement::create(array_only($data,['prisoner_id','offence']));
        return redirect(url('activities/rehab'));

    }

    private function handleHardLabourSave(array $data)
    {
        $solitary = HardLabour::create(array_only($data,['prisoner_id','offence']));
        return redirect(url('activities/rehab'));
    }

    private function handleSolitaryDelete($id)
    {
        $solitary = SolitaryConfinement::findOrFail($id);
        $solitary->delete();
        return redirect(url('activities/rehab'));
    }

    private function handleHardLabourDelete($id)
    {
        $hardLabour = HardLabour::findOrFail($id);
        $hardLabour->delete();
        return redirect(url('activities/rehab'));
    }
}
