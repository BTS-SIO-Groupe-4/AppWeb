<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RdvComCli extends Model
{
    use HasFactory;

    public function Client(){
        return $this->belongsTo('App\Models\Client');
    }
    public function Employe(){
        return $this->belongsTo('App\Models\Employe');
    }

    protected   $fillable =[
        'employe_id', 'client_id', 'DateRdv'
    ];
}
