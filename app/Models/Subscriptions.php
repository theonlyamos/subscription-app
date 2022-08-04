<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriptions extends Model
{
    use HasFactory;

    protected $fillable = [
        'website_id',
        'subscriber_id'
    ];

    public function website(){
        return $this->belongsTo(Website::class);
    }

    public function subscriber(){
        return $this->belongsTo(Subscriber::class);
    }
}
