<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('bidang_id')
                ->nullable()
                ->constrained('bidang')
                ->restrictOnDelete();

            $table->string('role', 30)
                ->default('peminta')
                ->index();

            $table->boolean('is_active')->default(true);
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['bidang_id']);
            $table->dropIndex(['role']);

            $table->dropColumn([
                'bidang_id',
                'role',
                'is_active',
            ]);
        });
    }
};
