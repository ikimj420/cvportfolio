<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Education
 * @package App\Models
 * @version May 2, 2019, 7:16 pm UTC
 *
 * @property string title
 * @property string desc
 * @property string end
 * @property string link
 */
class Education extends Model
{
    use SoftDeletes;

    public $table = 'educations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'desc',
        'end',
        'link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'desc' => 'string',
        'end' => 'date',
        'link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'desc' => 'required',
        'end' => 'required'
    ];

    
}
