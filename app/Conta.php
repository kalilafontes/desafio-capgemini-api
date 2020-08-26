<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Conta extends Model
{
    protected $fillable = [
        'numero', 'valor',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
