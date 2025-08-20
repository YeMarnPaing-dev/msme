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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('name_mm');
            $table->string('name_eng');
            $table->string('nrc_card_mm');
            $table->string('nrc_card_eng');
            $table->string('father_name_mm');
            $table->string('father_name_eng');
            $table->string('ethinic');
            $table->string('religion');
            $table->string('education');
            $table->string('gender');
            $table->timestamp('birthday');
            $table->string('township_id');
            $table->string('address');
            $table->text('phone');
            $table->string('email');
            $table->string('work_name_mm');
            $table->string('work_name_eng');
            $table->string('type_mm');
            $table->string('type_eng');
            $table->string('size');
            $table->string('sector_id');
            $table->string('sector_type_id');
            $table->string('location_mm');
            $table->string('location_eng');
            $table->string('wide');
            $table->string('machine');
            $table->string('owner');
            $table->timestamp('start_year');
            $table->string('building');
            $table->string('other');
            $table->string('product');
            $table->string('category');
            $table->string('sale_product');
            $table->string('order_not');
            $table->string('service');
            $table->string('quantity');
            $table->string('other_work');
            $table->string('leader');
            $table->string('supervisor');
            $table->string('smart_worker');
            $table->string('normal_worker');
            $table->string('other_worker');
            $table->string('dept');
            $table->string('liscense');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};
