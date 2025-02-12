<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductModel;
class UserModel extends Model
{
    use HasFactory;
    protected $table='user_table';
    public function product(){
        return $this->hasOne(ProductModel::class, 'user_table_id');
    }
}
