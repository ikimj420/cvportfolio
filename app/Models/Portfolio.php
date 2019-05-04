<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Portfolio
 * @package App\Models
 * @version May 3, 2019, 12:11 pm UTC
 *
 * @property string title
 * @property string dev
 * @property string link
 * @property string desc
 * @property string cover_images
 */
class Portfolio extends Model
{
    use SoftDeletes;

    public $table = 'portfolio';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'dev',
        'link',
        'desc',
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
        'dev' => 'string',
        'link' => 'string',
        'desc' => 'string',
        'cover_images' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'dev' => 'required',
        'link' => 'required',
        'cover_images' => 'required|mimes:jpg,jpeg,png,svg|max:2048'
    ];

    
}
