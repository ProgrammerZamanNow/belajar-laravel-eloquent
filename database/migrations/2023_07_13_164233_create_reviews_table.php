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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string("product_id", 100)->nullable(false);
            $table->unsignedInteger("rating")->nullable(false);
            $table->string("customer_id", 100)->nullable(false);
            $table->text("comment")->nullable();

            $table->foreign("product_id")->on("products")->references("id");
            $table->foreign("customer_id")->on("customers")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
