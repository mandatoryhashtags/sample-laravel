<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\ProductCategory;
use App\Models\ProductApplications;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products'; 
    protected $image = 'https://drive.google.com/uc?export=view&id=1MAlpeoscV5k85d5ft-kgfNBqHkc3GdiG';
    protected $fillable = [
            "sku",
            "name",
            "description",
            "short_description",
            "weight",
            "product_online",
            "tax_class_name",
            "price",
            "url_key",
            "meta_title",
            "meta_keywords",
            "meta_description",
            "qty",
            "acid_value",
            "active_content",
            "average_particle_size",
            "boiling_point",
            "cas_no",
            "chemistry",
            "chem_resistance_acid",
            "chem_resistance_alakali",
            "chem_resistance_alcohol",
            "chem_resistance_ester",
            "chem_resistance_ketones",
            "chem_resistance_migration",
            "chem_resistance_soap",
            "chem_resistance_water",
            "ci_no",
            "clear_point",
            "coatings_subapplications",
            "color",
            "color_gardner_scale",
            "color_index",
            "color_pt_scale",
            "color_strength",
            "contents",
            "cost",
            "counter_grades",
            "curing_speed",
            "dbp_absorption",
            "density",
        	"dry_cleaning_fastness",
            "dry_rubbing_fastness",
            "flash_point",
            "fob_cost",
            "form_of_supply",
            "glass_transition_temperature",
            "gloss_level",
            "gross_kg_unit_primary",
            "gross_kg_unit_secondary",
            "heat_stability",
            "hlb_value",
            "hue",
            "hydroxyl_value",
            "ignition_loss",
            "inks_subapplications",
            "insolubility_in_water",
            "internal_energy",
            "ironing_fastness",
            "item_color",
            "lead_time",
            "light_fastness",
            "loss_on_drying",
            "major_uv_wave_length",
            "manufacturer",
            "melting_point",
            "merchant_center_category",
            "mesh_residue",
            "moisture",
            "molecular_weight",
            "net_kg_unit_primary",
            "net_kg_unit_secondary",
            "net_mt_20ft",
            "net_mt_40ft",
            "non_volatile_content",
            "number_of_pallets_20ft_fcl",
            "odor",
            "oil_absorption",
            "other_info_in_tds",
            "packaging",
            "particle_shape",
            "perspiration_fastness_fading",
            "perspiration_fastness_staining",
            "ph_value",
            "plastics_subapplications",
            "porosity",
            "port_of_origin",
            "qbo_i",
            "residual_solvent",
            "resistivity",
            "samples_title",
            "saponification_value",
            "shelf_life",
            "shipment_type",
            "shipping_net_kg_pallet",
            "sku_type",
            "soaping_fastness_fading",
            "soaping_fastness_staining",
            "softening_range",
            "spread_rate",
            "storage",
            "sub_type",
            "surface_area",
            "surface_treatment",
            "test_method",
            "textiles_subapplication",
            "tint_strength",
            "type",
            "undertone",
            "unit_of_measurement",
            "url_path",
            "viscosity",
            "volatile_matter",
            "water_logging_fastness_fading",
            "water_logging_fastness_staining",
            "water_solubility",
            "water_soluble_matter",
            "weight_type",
            "wet_rubbing_fastness",
            "whiteness",
            "yellowin",
            "regional_price",
            "multinational_price",
            "product_category",
    ];

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function productApplication()
    {
        return $this->hasMany(ProductApplications::class,'product_id');
    }
}
