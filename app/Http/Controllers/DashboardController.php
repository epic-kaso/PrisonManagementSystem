<?php

namespace PrisonManagementSystem\Http\Controllers;

use Illuminate\Http\Request;

use PrisonManagementSystem\Http\Requests;
use PrisonManagementSystem\Http\Controllers\Controller;
use PrisonManagementSystem\Prisoner;
use PrisonManagementSystem\User;
use PrisonManagementSystem\Visitor;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $prisoner_count = Prisoner::count();
        $visitors_count = Visitor::count();
        $bailed_count =Prisoner::bailed()->count();
        $guards_count =User::guards()->count();

        $prisoners = Prisoner::latest()->take(10)->get();
        $bailedPrisoners = Prisoner::latest()->take(10)->bailed()->get();
        return view('dashboard',compact(
            'prisoner_count',
            'prisoners',
            'bailedPrisoners',
            'visitors_count',
            'bailed_count',
            'guards_count'
        ));
    }
}
