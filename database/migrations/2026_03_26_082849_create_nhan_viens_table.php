<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('nhan_viens', function (Blueprint $table) {
        $table->id();
        $table->string('ten');
        $table->string('email');
        $table->string('sdt');
        $table->string('chuc_vu');
        $table->timestamps();
    });
}
    public function down(): void
    {
        Schema::dropIfExists('nhan_viens');
    }
};
