<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->integer('age');
    $table->string('phone');
    $table->string('membership_type');
    $table->date('start_date');
    $table->date('end_date');
    $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};