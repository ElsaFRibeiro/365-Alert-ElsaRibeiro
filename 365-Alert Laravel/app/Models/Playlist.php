<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class, 'users_id');
    }
    public function alerts()
    {
        return $this->hasMany(Alert::class, 'alerts_id');
    }
    protected $fillable = [
        'user_id',
        'alert_id'
    ];
}
