<?php

namespace App\Models;
use App\Models\Twofive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Twofour extends Model
{
    use HasFactory;
     protected $table='twofour';
    // protected $table='twofour';
    public function twoFive()
    {
       
        return $this->hasOne(Twofive::class, 'twofour_id');
    }
}
