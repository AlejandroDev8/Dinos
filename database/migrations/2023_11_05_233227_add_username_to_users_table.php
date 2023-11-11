<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */

  // El método de up se ejecuta cuando se ejecuta la migración
  public function up(): void
  {
    Schema::table('users', function (Blueprint $table) {
      $table->string('username')->unique();
    });
  }

  /**
   * Reverse the migrations.
   */

  // El método de down se ejecuta cuando se revierte la migración
  public function down(): void
  {
    Schema::table('users', function (Blueprint $table) {
      $table->dropColumn('username');
    });
  }
};
