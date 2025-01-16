<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('image')->nullable();
            $table->string('name');
            $table->string('phone');
            $table->uuid('division_id');
            $table->string('position');
            $table->foreign('division_id')->references('id')->on('divisions')->onDelete('cascade');
            $table->timestamps();
        });
    }

}
