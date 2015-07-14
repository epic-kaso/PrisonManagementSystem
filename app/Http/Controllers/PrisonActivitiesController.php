<?php

namespace PrisonManagementSystem\Http\Controllers;

use Illuminate\Http\Request;

use PrisonManagementSystem\Http\Requests;
use PrisonManagementSystem\Http\Controllers\Controller;
use PrisonManagementSystem\Prisoner;

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
        return view('prisoner.rehab');
    }

    public function postRehab()
    {

    }
}
