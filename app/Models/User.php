<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version May 2, 2019, 4:28 pm UTC
 *
 * @property string fullName
 * @property string areaField
 * @property string country
 * @property string birthDate
 * @property string address
 * @property string phones
 * @property string aboutMe
 * @property string cv
 * @property string email
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property string remember_token
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'fullName',
        'areaField',
        'country',
        'birthDate',
        'address',
        'phones',
        'aboutMe',
        'cv',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fullName' => 'string',
        'areaField' => 'string',
        'country' => 'string',
        'birthDate' => 'date',
        'address' => 'string',
        'phones' => 'string',
        'aboutMe' => 'string',
        'cv' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fullName' => 'required',
        'email' => 'required',
        'cv' => 'file|max:2048|mimes:pdf'
    ];

    
}
