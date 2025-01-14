<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    use HasUuids;

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'date' => 'date'
    ];
}
