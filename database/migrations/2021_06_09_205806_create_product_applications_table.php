<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_applications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->tinyInteger('coatings_industrial');
            $table->tinyInteger('coatings_automotive');
            $table->tinyInteger('coatings_decorative');
            $table->tinyInteger('coatings_coil');
            $table->tinyInteger('coatings_wood');
            $table->tinyInteger('coatings_powder');
            $table->tinyInteger('plastics_pvc');
            $table->tinyInteger('plastics_pe');
            $table->tinyInteger('plastics_abs');
            $table->tinyInteger('plastics_ps');
            $table->tinyInteger('plastics_pa');
            $table->tinyInteger('plastics_rubber');
            $table->tinyInteger('inks_solvent');
            $table->tinyInteger('inks_water');
            $table->tinyInteger('inks_uv');
            $table->tinyInteger('inks_inkjet');
            $table->foreignId('product_id')->constrained('products')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_applications');
    }
}
