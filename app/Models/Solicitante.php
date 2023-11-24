<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Solicitante extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'oferta_id'
    ];

    public function user()
    {
        return $this->belongsto(User::class);
    }

    
}
