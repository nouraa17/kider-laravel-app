<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Subject extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'subjectName',
        'teacherId',
        'price',
        'age',
        'time',
        'capacity',
    ];

    public function teacher()
    {

        return $this->belongsTo(Teacher::class, 'teacherId');
    }
}
