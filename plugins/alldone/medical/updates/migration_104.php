<?php namespace Alldone\Medical\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration104 extends Migration
{
    public function up()
    {
        Schema::table('alldone_medical_positions', function ($table) {
            $table->string('condition')->nullable()->comment('Условие');
             $table->string('unit')->nullable()->comment('Единица измерения');
            $table->integer('recommended_staffing')->nullable()->comment('Рекомендуемые штатные нормативы (количество должностей)');
        });
    }

    public function down()
    {
          Schema::table('positions', function ($table) {
            $table->dropColumn('condition');
            $table->dropColumn('unit');
            $table->dropColumn('recommended_staffing');
        });
    }
}