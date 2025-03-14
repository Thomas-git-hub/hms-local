<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ThesisTransaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'thesis_transaction';

    protected $fillable = [
        'tracking_number',
        'student_id',
        'degree_id', 
        'defense_id',
        'adviser_id',
        'chairperson_id',
        'member_ids',
        'recorder_id',
        'or_number',
        'defense_date',
        'defense_time',
        'created_by',
        'created_on',
        'updated_by',
        'updated_on',
        'status',
        'adviser_amount',
        'chairperson_amount'
    ];


    public function student(){
        return $this->belongsTo(Student::class, 'student_id', 'id');

    }

    public function adviser(){
        return $this->belongsTo(Adviser::class, 'adviser_id', 'id');

    }

    public function chairperson(){
        return $this->belongsTo(Chairperson::class, 'chairperson_id', 'id');

    }
    public function degree(){
        return $this->belongsTo(Degree::class, 'degree_id');
    }

    public function defense(){
        return $this->belongsTo(Defense::class, 'defense_id');
    }

    public function recorder(){
        return $this->belongsTo(Recorder::class, 'recorder_id', 'id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function createdOn(){
        return $this->belongsTo(Office::class, 'created_on', 'id');

    }
}
