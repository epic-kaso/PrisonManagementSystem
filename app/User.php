<?php

namespace PrisonManagementSystem;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/**
 * PrisonManagementSystem\User
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property string $role
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\User whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\User whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\User whereRole($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\User admins()
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\User guards()
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\User createGuard($input)
 * @property string $sex 
 * @property string $address 
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\User whereSex($value)
 * @method static \Illuminate\Database\Query\Builder|\PrisonManagementSystem\User whereAddress($value)
 */
class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['last_name','first_name', 'email', 'password','sex','address'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    public function scopeAdmins($query){
        return $query->whereRole('admin');
    }

    public function scopeGuards($query){
        return $query->whereRole('warder');
    }

    public function scopeCreateGuard($query,array $input)
    {
        return static::create(array_merge(['role' => 'warder'],$input));
    }

    public function isAdmin()
    {
        return $this->role  === 'admin';
    }
}
