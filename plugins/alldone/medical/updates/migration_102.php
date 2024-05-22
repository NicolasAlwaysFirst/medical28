<?php namespace Alldone\Medical\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration102 extends Migration
{
    public function up()
    {
        Schema::create('alldone_medical_medical_organizations', function ($table) {
            $table->id();
            $table->string('name')->comment('Наименование медицинской организации');
            $table->string('branch_name')->nullable()->comment('Наименование филиала');
            $table->string('branch_address')->nullable()->comment('Адрес филиала');
            $table->decimal('latitude', 10, 7)->nullable()->comment('Широта');
            $table->decimal('longitude', 10, 7)->nullable()->comment('Долгота');
            $table->string('type')->comment('Тип МО');
            $table->boolean('participation_in_distribution')->default(false)->comment('Участие в распределении');
            $table->boolean('day_hospital_department')->default(false)->comment('Наличие типа отделения дневного стационара');
            $table->boolean('doctor_amubulatory_department')->default(false)->comment('Наличие типа отделения врачебной амбулатории');
            $table->integer('attached_population')->nullable()->comment('Общая численность прикрепленного населения');
            $table->integer('number_of_visits')->nullable()->comment('Количество посещений');
            $table->timestamps();
        });
        
          Schema::create('alldone_medical_positions', function ($table) {
            $table->id();
            $table->string('name')->comment('Наименование должностей');
            $table->timestamps();
        });
        
         Schema::create('alldone_medical_vacancies', function ( $table) {
            $table->id();
            $table->integer('medical_organization_id')->comment('Идентификатор медицинской организации');
            $table->integer('position_id')->comment('Идентификатор должности');
            $table->integer('total_positions')->nullable()->comment('Количество штатных единиц');
            $table->integer('occupied_positions')->nullable()->comment('Количество занятых единиц');
            $table->integer('physical_persons')->nullable()->comment('Количество физических лиц');
            $table->integer('external_part_timers')->nullable()->comment('Количество лиц внешнего совместительства');
            $table->timestamps();
        });
        
        
    }

    public function down()
    {
        Schema::drop('alldone_medical_medical_organizations');
        Schema::drop('alldone_medical_positions');
        Schema::drop('alldone_medical_vacancies');
    }
}