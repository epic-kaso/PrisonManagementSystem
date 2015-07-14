<?php

namespace PrisonManagementSystem;

use Illuminate\Database\Eloquent\Model;

/**
 * PrisonManagementSystem\Visitor
 *
 * @property integer $id 
 * @property string $last_name 
 * @property string $first_name 
 * @property string $sex 
 * @property string $address 
 * @property string $purpose 
 * @property string $prisoner_visited 
 * @property string $time_in 
 * @property string $time_out 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Visitor whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Visitor whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Visitor whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Visitor whereSex($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Visitor whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Visitor wherePurpose($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Visitor wherePrisonerVisited($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Visitor whereTimeIn($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Visitor whereTimeOut($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Visitor whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Visitor whereUpdatedAt($value)
 */
class Visitor extends Model
{
    //
}
