<?php

namespace Alldone\Medical\Models;

use Model;

/**
 * Model
 */
class Vacancy extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    protected $fillable = ['medical_organization_id', 'position_id', 'total_positions', 'occupied_positions', 'physical_persons', 'external_part_timers'];
    /**
     * @var string table in the database used by the model.
     */
    public $table = 'alldone_medical_vacancies';

    /**
     * @var array rules for validation.
     */
    public $rules = [];

    public $belongsTo = [
        "medical_organization" => MedicalOrganization::class,
        "position" => Position::class
    ];
}