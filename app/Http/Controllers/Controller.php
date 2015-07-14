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
     * @param  array $data
     * @param array $rules
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data,array $rules = null )
    {
        if(!empty($rules)){
            return Validator::make($data,$rules);
        }
        return Validator::make($data,$this->validationRules);
    }

    protected function requiredkeys(array $rules = null){
        if(!empty($rules)){
            return array_keys($rules);
        }
        return array_keys($this->validationRules);
    }
}
