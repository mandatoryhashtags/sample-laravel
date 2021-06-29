<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("sku")->unique();
            $table->string("name")->nullable(true);
            $table->text("description")->nullable(true);
            $table->text("short_description")->nullable(true);
            $table->string("weight", 10)->nullable(true);
            $table->boolean("product_online")->nullable(true);
            $table->string("tax_class_name", 10)->nullable(true);
            $table->string("price", 10)->nullable(true);
            $table->string("url_key")->nullable(true);
            $table->string("meta_title")->nullable(true);
            $table->string("meta_keywords")->nullable(true);
            $table->text("meta_description")->nullable(true);
            $table->string("qty",25)->nullable(true);
            $table->string("acid_value",25)->nullable(true);
            $table->string("active_content",25)->nullable(true);
            $table->string("average_particle_size",25)->nullable(true);
            $table->string("boiling_point",25)->nullable(true);
            $table->string("cas_no",25)->nullable(true);
            $table->text("chemistry")->nullable(true);
            $table->string("chem_resistance_acid",25)->nullable(true);
            $table->string("chem_resistance_alakali",25)->nullable(true);
            $table->string("chem_resistance_alcohol",25)->nullable(true);
            $table->string("chem_resistance_ester",25)->nullable(true);
            $table->string("chem_resistance_ketones",25)->nullable(true);
            $table->string("chem_resistance_migration",25)->nullable(true);
            $table->string("chem_resistance_soap",25)->nullable(true);
            $table->string("chem_resistance_water",25)->nullable(true);
            $table->string("ci_no",25)->nullable(true);
            $table->string("clear_point",25)->nullable(true);
            $table->string("color",25)->nullable(true);
            $table->string("color_gardner_scale",25)->nullable(true);
            $table->string("color_index",25)->nullable(true);
            $table->string("color_pt_scale",25)->nullable(true);
            $table->string("color_strength",25)->nullable(true);
            $table->string("contents",25)->nullable(true);
            $table->string("cost",25)->nullable(true);
            $table->string("counter_grades",25)->nullable(true);
            $table->string("curing_speed",25)->nullable(true);
            $table->string("dbp_absorption",25)->nullable(true);
            $table->string("density",25)->nullable(true);
        	$table->string("dry_cleaning_fastness",25)->nullable(true);
            $table->string("dry_rubbing_fastness",25)->nullable(true);
            $table->string("flash_point",25)->nullable(true);
            $table->string("fob_cost",25)->nullable(true);
            $table->text("form_of_supply")->nullable(true);
            $table->string("glass_transition_temperature",25)->nullable(true);
            $table->string("gloss_level",25)->nullable(true);
            $table->string("gross_kg_unit_primary",25)->nullable(true);
            $table->string("gross_kg_unit_secondary",25)->nullable(true);
            $table->string("heat_stability",25)->nullable(true);
            $table->string("hlb_value",25)->nullable(true);
            $table->string("hue",25)->nullable(true);
            $table->string("hydroxyl_value",25)->nullable(true);
            $table->string("ignition_loss",25)->nullable(true);
            $table->string("insolubility_in_water",25)->nullable(true);
            $table->string("internal_energy",25)->nullable(true);
            $table->string("ironing_fastness",25)->nullable(true);
            $table->string("item_color",25)->nullable(true);
            $table->string("lead_time",25)->nullable(true);
            $table->string("light_fastness",25)->nullable(true);
            $table->string("loss_on_drying",25)->nullable(true);
            $table->string("major_uv_wave_length",25)->nullable(true);
            $table->string("manufacturer",25)->nullable(true);
            $table->string("melting_point",25)->nullable(true);
            $table->string("merchant_center_category",25)->nullable(true);
            $table->string("mesh_residue",25)->nullable(true);
            $table->string("moisture",25)->nullable(true);
            $table->string("molecular_weight",25)->nullable(true);
            $table->string("net_kg_unit_primary",25)->nullable(true);
            $table->string("net_kg_unit_secondary",25)->nullable(true);
            $table->string("net_mt_20ft",25)->nullable(true);
            $table->string("net_mt_40ft",25)->nullable(true);
            $table->text("non_volatile_content")->nullable(true);
            $table->string("number_of_pallets_20ft_fcl",25)->nullable(true);
            $table->string("odor",25)->nullable(true);
            $table->string("oil_absorption",25)->nullable(true);
            $table->text("other_info_in_tds")->nullable(true);
            $table->string("packaging",25)->nullable(true);
            $table->string("particle_shape",25)->nullable(true);
            $table->string("perspiration_fastness_fading",25)->nullable(true);
            $table->string("perspiration_fastness_staining",25)->nullable(true);
            $table->string("ph_value",25)->nullable(true);
            $table->string("porosity",25)->nullable(true);
            $table->string("port_of_origin",60)->nullable(true);
            $table->text("qbo_i")->nullable(true);
            $table->string("residual_solvent",25)->nullable(true);
            $table->string("resistivity",25)->nullable(true);
            $table->string("samples_title",25)->nullable(true);
            $table->string("saponification_value",25)->nullable(true);
            $table->text("shelf_life")->nullable(true);
            $table->string("shipment_type",25)->nullable(true);
            $table->string("shipping_net_kg_pallet",25)->nullable(true);
            $table->string("sku_type",25)->nullable(true);
            $table->string("soaping_fastness_fading",25)->nullable(true);
            $table->string("soaping_fastness_staining",25)->nullable(true);
            $table->string("softening_range",25)->nullable(true);
            $table->string("spread_rate",25)->nullable(true);
            $table->text("storage")->nullable(true);
            $table->string("sub_type",25)->nullable(true);
            $table->string("surface_area",25)->nullable(true);
            $table->string("surface_treatment",25)->nullable(true);
            $table->string("test_method",25)->nullable(true);
            $table->string("tint_strength",25)->nullable(true);
            $table->string("type",25)->nullable(true);
            $table->string("undertone",25)->nullable(true);
            $table->string("unit_of_measurement",25)->nullable(true);
            $table->string("url_path",200)->nullable(true);
            $table->string("viscosity",25)->nullable(true);
            $table->string("volatile_matter",25)->nullable(true);
            $table->string("water_logging_fastness_fading",25)->nullable(true);
            $table->string("water_logging_fastness_staining",25)->nullable(true);
            $table->string("water_solubility",25)->nullable(true);
            $table->string("water_soluble_matter",25)->nullable(true);
            $table->string("weight_type",25)->nullable(true);
            $table->string("wet_rubbing_fastness",25)->nullable(true);
            $table->string("whiteness",25)->nullable(true);
            $table->string("yellowin",25)->nullable(true);
            $table->string("regional_price",25)->nullable(true);
            $table->string("multinational_price",25)->nullable(true);
            $table->string("product_category",25)->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
