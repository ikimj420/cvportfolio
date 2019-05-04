<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Experience
 * @package App\Models
 * @version May 2, 2019, 7:13 pm UTC
 *
 * @property string title
 * @property string company
 * @property string start
 * @property string end
 * @property string desc
 * @property string link
 * @property string extra
 */
class Experience extends Model
{
    use SoftDeletes;

    public $table = 'experiences';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'company',
        'start',
        'end',
        'desc',
        'link',
        'extra'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'company' => 'string',
        'start' => 'date',
        'end' => 'date',
        'desc' => 'string',
        'link' => 'string',
        'extra' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'company' => 'required',
        'start' => 'required',
        'desc' => 'required',
        'link' => 'required'
    ];

    
}
