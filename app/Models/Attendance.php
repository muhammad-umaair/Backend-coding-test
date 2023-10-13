<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = 'attendance';
    use HasFactory;
    protected $fillable = [
        'attendancefaults_id',
        'active',
    ];

}
