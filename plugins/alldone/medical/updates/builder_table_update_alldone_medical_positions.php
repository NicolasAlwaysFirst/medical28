<?php namespace Alldone\Medical\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlldoneMedicalPositions extends Migration
{
    public function up()
    {
        Schema::table('alldone_medical_positions', function($table)
        {
            $table->double('condition', 10, 2)->nullable()->unsigned(false)->default(null)->comment(null)->change();
            $table->double('recommended_staffing', 10, 2)->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('alldone_medical_positions', function($table)
        {
            $table->string('condition', 255)->nullable()->unsigned(false)->default(null)->comment('Условие')->change();
            $table->integer('recommended_staffing')->nullable()->unsigned(false)->default(null)->comment('Рекомендуемые штатные нормативы (количество должностей)')->change();
        });
    }
}
