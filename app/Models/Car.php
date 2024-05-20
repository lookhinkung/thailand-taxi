<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function type(){
        return $this->belongsTo(CarType::class, "cartype_id",'id');
        
        
    }
}
