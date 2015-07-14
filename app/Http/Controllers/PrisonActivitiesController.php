<?php

namespace PrisonManagementSystem\Http\Controllers;

use Illuminate\Http\Request;

use PrisonManagementSystem\Http\Requests;
use PrisonManagementSystem\Http\Controllers\Controller;

class PrisonActivitiesController extends Controller
{

    public function getAcquit()
    {
        return view('prisoner.acquit');
    }

    public function postAcquit()
    {

    }

    public function getRehab()
    {
        return view('prisoner.rehab');
    }

    public function postRehab()
    {

    }
}
