<?php

namespace Alldone\Medical\Models;

use Model;

/**
 * Model
 */
class Position extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'alldone_medical_positions';
    protected $fillable = ['name'];

    /**
     * @var array rules for validation.
     */
    public $rules = [];

    public $hasMany = [
        'vacancies' => Vacancy::class
    ];
}