<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\Wloop\GroupMessages\Models\GroupContact::class)->constrained()->onDelete('cascade');
            $table->integer('has_whatsapp')->default(0);
            $table->integer('lang')->default(0);
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('variable1')->nullable();
            $table->string('variable2')->nullable();
            $table->string('variable3')->nullable();
            $table->string('variable4')->nullable();
            $table->string('variable5')->nullable();
            $table->text('notes')->nullable();
            $table->integer('status')->nullable();
            $table->integer('sort')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->string('deleted_by')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};
