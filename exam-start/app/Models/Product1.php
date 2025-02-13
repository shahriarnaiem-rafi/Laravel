<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User1;

class Product1 extends Model
{
    use HasFactory;
    protected $table ='product1';
    public function user(){
    
        return $this->belongsTo(User1::class,'user_id');
       }
}
