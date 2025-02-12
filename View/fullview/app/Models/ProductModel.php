<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table='product_table';
    public function user(){
        return $this->belongsTo(UserModel::class, 'user_table_id');
    }
}
