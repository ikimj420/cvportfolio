<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Picture
 * @package App\Models
 * @version May 2, 2019, 9:00 pm UTC
 *
 * @property string title
 * @property string section
 * @property string cover_images
 */
class Picture extends Model
{
    use SoftDeletes;

    public $table = 'pictures';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'section',
        'cover_images'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'section' => 'string',
        'cover_images' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'section' => 'required',
        'cover_images' => 'required|max:2048'
    ];

    
}
