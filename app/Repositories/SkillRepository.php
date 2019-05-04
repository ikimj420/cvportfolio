<?php

namespace App\Repositories;

use App\Models\Skill;
use App\Repositories\BaseRepository;

/**
 * Class SkillRepository
 * @package App\Repositories
 * @version May 2, 2019, 8:11 pm UTC
*/

class SkillRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'desc',
        'count',
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
        return Skill::class;
    }
}
