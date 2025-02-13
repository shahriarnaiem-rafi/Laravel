<?php

namespace App\Models;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectOption extends Model
{
    use HasFactory;
    protected $table='subject_option';
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
}
