<?php

namespace App\Models;
use App\Models\SubjectOption;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table='subject';
    public function subjectOption(){
        return $this->hasMany(SubjectOption::class);
    }
}
