<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    protected $table = 'prescriptions';
    protected $guarded = [];

    public function examinationSchedule()
    {
        return $this->hasOne(ExaminationSchedule::class, 'id', 'schedule_id');
    }
}
