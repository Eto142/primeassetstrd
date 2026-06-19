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
            if (!Schema::hasColumn('users', 'lname')) {
                $table->string('lname')->nullable()->after('name');
            }
            if (!Schema::hasColumn('users', 'currency')) {
                $table->string('currency')->nullable()->after('email');
            }
            if (!Schema::hasColumn('users', 'country')) {
                $table->string('country')->nullable()->after('currency');
            }
            if (!Schema::hasColumn('users', 'state')) {
                $table->string('state')->nullable()->after('country');
            }
            if (!Schema::hasColumn('users', 'pcode')) {
                $table->string('pcode')->nullable()->after('state');
            }
            if (!Schema::hasColumn('users', 'address')) {
                $table->string('address')->nullable()->after('pcode');
            }
            if (!Schema::hasColumn('users', 'phone')) {
                $table->string('phone')->nullable()->after('address');
            }
            if (!Schema::hasColumn('users', 'is_activated')) {
                $table->tinyInteger('is_activated')->default(0)->after('phone');
            }
            if (!Schema::hasColumn('users', 'is_verified')) {
                $table->tinyInteger('is_verified')->default(0)->after('is_activated');
            }
            if (!Schema::hasColumn('users', 'otp_code')) {
                $table->string('otp_code')->nullable()->after('is_verified');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'lname', 'currency', 'country', 'state',
                'pcode', 'address', 'phone',
                'is_activated', 'is_verified', 'otp_code',
            ]);
        });
    }
};
