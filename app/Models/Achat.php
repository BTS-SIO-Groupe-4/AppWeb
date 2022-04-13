<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    use HasFactory;
    
    
    public function achat(){
        return $this->hasMany('App\Achat');
    }

    protected   $fillable =[
        'id','IdCli','IdEmp','IdProd','Qte'
    ];
}
