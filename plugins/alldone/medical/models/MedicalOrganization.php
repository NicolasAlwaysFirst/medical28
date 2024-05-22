<?php

namespace Alldone\Medical\Models;

use Model;

/**
 * Model
 */
class MedicalOrganization extends Model
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
    public $table = 'alldone_medical_medical_organizations';
    protected $fillable = ['name', 'branch_name', 'branch_address', 'latitude', 'longitude', 'type', 'participation_in_distribution', 'day_hospital_department', 'doctor_amubulatory_department', 'attached_population', 'number_of_visits'];
    /**
     * @var array rules for validation.
     */
    public $rules = [];
    public function getNameAttribute($value)
    {
        return str_replace(['\'', '"', '`'], "", $value);
    }
    public $hasMany = [
        'vacancies' => Vacancy::class
    ];
}