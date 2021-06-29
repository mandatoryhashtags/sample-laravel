<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductApplications extends Model
{
    use HasFactory;
    protected $table = 'product_applications';
    protected $fillable =[
        'coatings_industrial',
        'coatings_automotive',
        'coatings_decorative',
        'coatings_coil',
        'coatings_wood',
        'coatings_powder',
        'plastics_pvc',
        'plastics_pe',
        'plastics_abs',
        'plastics_ps',
        'plastics_pa',
        'plastics_rubber',
        'inks_solvent',
        'inks_water',
        'inks_uv',
        'inks_inkjet'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
