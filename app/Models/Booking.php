<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id', 'user_id', 'start_date', 'end_date'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id'); // Zorg ervoor dat de juiste kolomnaam wordt gebruikt
    }
}
