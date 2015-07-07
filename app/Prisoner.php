<?php

namespace PrisonManagementSystem;

use Illuminate\Database\Eloquent\Model;

/**
 * PrisonManagementSystem\Prisoner
 *
 * @property integer $id 
 * @property string $first_name 
 * @property string $middle_name 
 * @property string $last_name 
 * @property string $address 
 * @property string $next_of_kin 
 * @property string $next_of_kin_phone 
 * @property string $blood_group 
 * @property string $birth_date 
 * @property string $genotype 
 * @property string $disabilities 
 * @property string $left_mug_shot 
 * @property string $right_mug_shot 
 * @property string $center_mug_shot 
 * @property string $arresting_officer 
 * @property string $crime 
 * @property string $sentence 
 * @property string $sentence_start 
 * @property string $sentence_end 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereMiddleName($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereNextOfKin($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereNextOfKinPhone($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereBloodGroup($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereBirthDate($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereGenotype($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereDisabilities($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereLeftMugShot($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereRightMugShot($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereCenterMugShot($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereArrestingOfficer($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereCrime($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereSentence($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereSentenceStart($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereSentenceEnd($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\Prisoner whereUpdatedAt($value)
 */
class Prisoner extends Model
{
    protected $guarded = ['id'];
}
