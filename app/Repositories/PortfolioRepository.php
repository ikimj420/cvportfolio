<?php

namespace App\Repositories;

use App\Models\Portfolio;
use App\Repositories\BaseRepository;

/**
 * Class PortfolioRepository
 * @package App\Repositories
 * @version May 3, 2019, 12:11 pm UTC
*/

class PortfolioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'dev',
        'link',
        'desc',
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
        return Portfolio::class;
    }
}
