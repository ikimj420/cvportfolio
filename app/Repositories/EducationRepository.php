<?php

namespace App\Repositories;

use App\Models\Education;
use App\Repositories\BaseRepository;

/**
 * Class EducationRepository
 * @package App\Repositories
 * @version May 2, 2019, 7:16 pm UTC
*/

class EducationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'desc',
        'end',
        'link'
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
        return Education::class;
    }
}
