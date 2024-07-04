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
        Schema::table('users', function (Blueprint $table) {
            // Drop existing primary key
            $table->dropPrimary('users_pkey');

            // Change the column type to char(26) and set it as the primary key in one go
            $table->char('id', 26)->primary()->change();
        });

        Schema::table('model_has_roles', function (Blueprint $table) {
            // Change the column type to char(26) and set it as the primary key in one go
            $table->char('model_id', 26)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop the primary key
            $table->dropPrimary(['id']);
            
            // Change the column back to unsigned big integer with auto increment
            $table->unsignedBigInteger('id')->autoIncrement()->change();

            // Re-add the primary key
            $table->primary('id');
        });
    }
};