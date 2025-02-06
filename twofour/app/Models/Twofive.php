<?php

namespace App\Models;
use App\Models\Twofour;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Twofive extends Model
{

    use HasFactory;
    protected $table='twofive';
    /**
     * Get the phone associated with the user.
     */
    public function twoFour()
    {
        return $this->belongsTo(Twofour::class,'twofour_id');
       
    }
}
