<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\facture;

class Client extends Model
{
    use HasFactory;

    public function facture(){
        return $this->hasMany(facture::class);
    }

    protected   $fillable =[
        'id','NomCli','PrenomCli','NumCli','MailCli','VilleCli','AdresseCli','Prosppect'
    ];
}
