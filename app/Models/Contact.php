<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'name',
        'subscribed',
    ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
