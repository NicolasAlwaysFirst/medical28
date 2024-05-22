<?php namespace Alldone\Medical\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlldoneMedicalVacancies extends Migration
{
    public function up()
    {
        Schema::table('alldone_medical_vacancies', function($table)
        {
            $table->double('total_positions', 10, 2)->nullable()->unsigned(false)->default(null)->comment(null)->change();
            $table->double('occupied_positions', 10, 2)->nullable()->unsigned(false)->default(null)->comment(null)->change();
            $table->double('physical_persons', 10, 2)->nullable()->unsigned(false)->default(null)->comment(null)->change();
            $table->double('external_part_timers', 10, 2)->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('alldone_medical_vacancies', function($table)
        {
            $table->integer('total_positions')->nullable()->unsigned(false)->default(null)->comment('Количество штатных единиц')->change();
            $table->integer('occupied_positions')->nullable()->unsigned(false)->default(null)->comment('Количество занятых единиц')->change();
            $table->integer('physical_persons')->nullable()->unsigned(false)->default(null)->comment('Количество физических лиц')->change();
            $table->integer('external_part_timers')->nullable()->unsigned(false)->default(null)->comment('Количество лиц внешнего совместительства')->change();
        });
    }
}
