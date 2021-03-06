<?php

namespace Sjdaws\Tests\Models;

use Sjdaws\Vocal\Vocal;

class TestChild extends Vocal
{
    /**
     * The fields which can be filled from input
     *
     * @var array
     */
    protected $fillable = array('name');

    /**
     * The rules for validating this model
     *
     * @var array
     */
    public $rules = array(
        'name' => array('required', 'unique')
    );

    /**
     * The table name
     *
     * @var string
     */
    protected $table = 'test_child';

    /**
     * Join parent record
     *
     * @return object
     */
    public function parent()
    {
        return $this->belongsTo('Sjdaws\Tests\Models\Test', 'test_id');
    }

    /**
     * Join child records
     *
     * @return object
     */
    public function children()
    {
        return $this->hasMany('Sjdaws\Tests\Models\TestChildChild', 'test_child_id');
    }
}
