<?php

namespace App\Models;
use App\Models\Bus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table='ticket';
    public function bus(){
        return $this->belongsToMany(Bus::class,'bus_id');
    }

}
