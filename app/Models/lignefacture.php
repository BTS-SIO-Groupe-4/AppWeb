<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\facture;
use App\Models\produit;

class lignefacture extends Model
{
    use HasFactory;

    public function facture(){
        return $this->belongsTo(Facture::class);
    }

    public function produit(){
        return $this->belongsTo(produit::class);
    }

    protected   $fillable =[
        'facture_id','produit_id', 'Qte'
    ];
}
