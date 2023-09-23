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
        //
        Schema::create('alerts', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->text('message');
            $table->string('type'); // You can change the type to match your requirements
            $table->unsignedBigInteger('user_id'); // Foreign key to associate with users

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('alerts');
    }
};
