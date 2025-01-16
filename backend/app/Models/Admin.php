<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

}
