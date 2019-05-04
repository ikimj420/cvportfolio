<?php

namespace App\Repositories;

use App\Models\Counter;
use App\Repositories\BaseRepository;

/**
 * Class CounterRepository
 * @package App\Repositories
 * @version May 2, 2019, 6:06 pm UTC
*/

class CounterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'count'
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
        return Counter::class;
    }
}
