<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('case_no');
            $table->string('name',30);
            $table->string('ptype');
            $table->string('email')->unique();
            $table->string('birthdate',50);
            $table->string('gender');
            //*
            $table->string('father',50);
            $table->string('mother',50);
            $table->string('nid',15)->nullable();
            $table->string('passport',15)->nullable();
            $table->string('language',10);
            $table->string('spouse');
            $table->string('b_place',50);
            //*
            $table->string('address',80);
            $table->string('phone',15);
            $table->string('occupation',15);
            $table->string('blood',5);
            $table->string('status');
            $table->string('religion',10);
            $table->string('height',5);
            $table->string('weight',5);
            //*
            $table->string('e_name',50);
            $table->string('relation',50);
            $table->string('contact_number',15);
            $table->string('password',10);
            $table->string('patient_image')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
