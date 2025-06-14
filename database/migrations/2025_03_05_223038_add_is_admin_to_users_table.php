<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
{
    if (!Schema::hasColumn('users', 'is_admin')) {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_admin')->default(0);
        });
    }
}

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_admin'); // Hapus kolom jika rollback
        });
    }
};
