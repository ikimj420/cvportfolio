<?php

namespace App\Repositories;

use App\Models\Social;
use App\Repositories\BaseRepository;

/**
 * Class SocialRepository
 * @package App\Repositories
 * @version May 2, 2019, 10:58 pm UTC
*/

class SocialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
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
        return Social::class;
    }
}
