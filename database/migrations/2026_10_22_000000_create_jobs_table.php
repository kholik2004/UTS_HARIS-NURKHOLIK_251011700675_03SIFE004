<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Preserve Laravel's queue table under a separate name before creating job listings.
        if (Schema::hasTable('jobs') && Schema::hasColumn('jobs', 'queue')) {
            Schema::rename('jobs', 'queue_jobs');
        }

        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('company');
            $table->string('location');
            $table->string('salary');
            $table->string('type');
            $table->text('requirements');
            $table->date('posted_date');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
