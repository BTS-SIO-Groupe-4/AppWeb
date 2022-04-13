<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class facture extends Model
{
    use HasFactory;

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function lignefacture(){
        return $this->belongsTo(lignefacture::class);
    }

    protected   $fillable =[
        'client_id', 'DateFac'
    ];

}
