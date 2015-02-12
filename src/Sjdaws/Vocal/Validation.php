<?php

namespace Sjdaws\Vocal;

class Validation
{
    /**
     * The model we're checking relationships against
     *
     * @var Vocal
     */
    private $model;

    /**
     * Create a new validator
     *
     * @param Vocal $model
     */
    public function __construct(Vocal $model)
    {
        $this->model = $model;
    }
}
