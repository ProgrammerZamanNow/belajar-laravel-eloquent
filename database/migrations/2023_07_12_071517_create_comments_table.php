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
        Schema::create('comments', function (Blueprint $table) {
            // $table->bigInteger("id")->autoIncrement();
            // $table->id();
            $table->integer("id")->autoIncrement();
            $table->string("email", 100)->nullable(false);
            $table->string("title", 200)->nullable(false);
            $table->text("comment")->nullable();
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
