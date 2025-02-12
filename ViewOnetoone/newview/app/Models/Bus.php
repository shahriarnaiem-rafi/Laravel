<?php

namespace App\Models;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $table='bus';
    public function ticket(){
        return $this->hasMany(Ticket::class,'bus_id');
    }

}
