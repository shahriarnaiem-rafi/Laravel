<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;
use App\Models\Owner;
class Mechanic extends Model
{
    
    protected $table = 'mechanic';
    use HasFactory;
    public function carOwner()
    {
        return $this->hasManyThrough(Owner::class, Car::class);
    }
    public function car()
    {
        return $this->hasMany(Car::class);
    }
}
