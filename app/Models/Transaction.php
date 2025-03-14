<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'transaction';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function honorarium()
    {
        return $this->belongsTo(Honorarium::class);
    }

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function office_from()
    {
        return $this->belongsTo(Office::class, 'from_office', 'id');
    }

    public function email()
    {
        return $this->belongsTo(Emailing::class, 'id', 'transaction_id');
    }
}
