<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('departments')){
            Schema::create('departments', function (Blueprint $table) {
                $table->integer('department_id', 5);
                $table->string('department_name', 50);
                $table->timestamps(); //add created_at, updated_at
                $table->softDeletes();  //add deleted_at
                $table->string('updated_by');
                $table->primary('department_id');
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
        Schema::dropIfExists('departments');
    }
}
