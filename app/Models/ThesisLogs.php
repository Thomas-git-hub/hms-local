<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThesisLogs extends Model
{
    use HasFactory;
    protected $table = 'thesis_transaction_logs';

    public function office()
    {
        return $this->belongsTo(Office::class, 'from_office_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'from_user', 'id');
    }

    public function transaction()
    {
        return $this->belongsTo(ThesisTransaction::class, 'tracking_number', 'tracking_number');
    }

}

