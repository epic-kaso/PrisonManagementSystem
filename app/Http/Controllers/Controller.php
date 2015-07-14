<?php

namespace PrisonManagementSystem\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Validator;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;
    protected $validationRules;

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data,$this->validationRules);
    }

    protected function requiredkeys(){
        return array_keys($this->validationRules);
    }
}
