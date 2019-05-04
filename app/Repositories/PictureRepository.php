<?php

namespace App\Repositories;

use App\Models\Picture;
use App\Repositories\BaseRepository;

/**
 * Class PictureRepository
 * @package App\Repositories
 * @version May 2, 2019, 9:00 pm UTC
*/

class PictureRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'section',
        'cover_images'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Picture::class;
    }
}
