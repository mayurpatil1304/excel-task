<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('excelDataImport', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->string('emp_name');
            $table->string('emp_title');
            $table->string('emp_dept');
            $table->string('buss_unit');
            $table->string('gender');
            $table->string('ethicity');
            $table->string('age');
            $table->string('hire_date');
            $table->string('ann_sal');
            $table->string('bonus');
            $table->string('country');
            $table->string('city');
            $table->string('exit_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
