<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product1;

class User1 extends Model
{
    use HasFactory;
   protected $table ='user1';
   public function product(){
    
    return $this->hasOne(Product1::class,'user_id');
   }
}
