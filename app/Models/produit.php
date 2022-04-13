<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\lignefacture;

class produit extends Model
{
    use HasFactory;

    public function lignefacture(){
        return $this->hasMany(lignefacture::class);
    }

    protected   $fillable =[
        'NomProd','TypeProd','PrixProd','DescProd'
    ];
}
