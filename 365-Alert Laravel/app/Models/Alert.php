<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    use HasFactory;

    public function alertPlaylist()
    {
        return $this->belongsTo(Playlist::class, 'alert_id', 'id');
    }
}
