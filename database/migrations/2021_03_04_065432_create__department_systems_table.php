<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('department_systems')){
            Schema::create('department_systems', function (Blueprint $table) {
                $table->string('department_id', 5 );
                $table->string('system_id', 5);
                $table->string('system_name', 50);
                $table->timestamps();
                $table->softDeletes();
                $table->string('updated_by', 5);
                $table->primary(['department_id', 'system_id']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */


    public function down()
    {
        Schema::dropIfExists('_department_systems');
    }
}
