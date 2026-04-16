<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function PHPUnit\Framework\callback;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('attractions', callback: function (Blueprint $table) {
            $table->id();
            $table->foreignId( column:'destination_id')->constrained()->onDelete( action:'cascade');
            $table->string( column:'name');
            $table->text( column:'description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('attractions', function (Blueprint $table) {
            $table->text('description')->change();
        });
    }
};
