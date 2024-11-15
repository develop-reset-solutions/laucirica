<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    protected $fillable = [
        'state_id',
        'name'
    ];

    public function bussine() {
        return $this->hasMany(Bussine::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
