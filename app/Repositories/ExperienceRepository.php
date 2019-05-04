<?php

namespace App\Repositories;

use App\Models\Experience;
use App\Repositories\BaseRepository;

/**
 * Class ExperienceRepository
 * @package App\Repositories
 * @version May 2, 2019, 7:13 pm UTC
*/

class ExperienceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'company',
        'start',
        'end',
        'desc',
        'link',
        'extra'
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
        return Experience::class;
    }
}
