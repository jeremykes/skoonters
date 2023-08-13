<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'contact_id',
        'read',
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
