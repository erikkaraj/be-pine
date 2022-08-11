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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('sub_category_id')->constrained('sub_categories');
            $table->string('description')->nullable();
            $table->string('elements')->nullable();
            $table->string('people_count')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('price')->nullable();
            $table->string('price_night')->nullable();
            $table->boolean('price_night_currency')->nullable();
            $table->string('price_person')->nullable();
            $table->boolean('price_person_currency')->nullable();
            $table->string('ofer_night_count')->nullable();
            $table->string('ofer_night_price')->nullable();
            $table->boolean('ofer_night_currency')->nullable();
            $table->string('translation')->nullable();

            $table->timestamps();
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
        Schema::dropIfExists('activities');
    }
};
