<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_id', 'user_id','yes_ans','no_ans',
    ];

    public function tests()
    {
        return $this->hasMany(Exam::class,'id','exam_id');
    }
    public function users()
    {
        return $this->hasMany(User::class,'id','user_id');
    }
}
