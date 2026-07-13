<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('waste_poins')->default(0)->after('password');
            $table->string('avatar')->nullable()->after('waste_poins');
            $table->string('nomorhp')->nullable()->after('avatar');
            $table->text('address')->nullable()->after('nomorhp');
            $table->string('postal_code')->nullable()->after('address');
            $table->boolean('is_admin')->default(false)->after('postal_code');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['waste_poins','avatar','nomorhp','address','postal_code','is_admin']);
        });
    }
};
