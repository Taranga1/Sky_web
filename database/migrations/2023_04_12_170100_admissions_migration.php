<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string("fullname");
            $table->string("fathername");
            $table->string("mothername");
            $table->string("address1");
            $table->string("nextclass");
            $table->string("gmail");
            $table->string("phone1");
            $table->string("phone2");
            $table->string("gpa");
            $table->date("dob");
            $table->string("description");
            $table->string("image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
