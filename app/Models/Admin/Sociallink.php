<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\User;

class Sociallink extends Model
{
    protected $table = 'sociallinks';
    protected $fillable = ['name', 'icon', 'status'];

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($sociallink) {
            if ($sociallink->icon) Storage::disk('public')->delete($sociallink->icon);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function icon()
    {
        return $this->hasOne(Self::class, 'id');
    }

    public function GeticonurlAttribute()
    {
        if ($this->icon) {
            return Storage::disk('public')->url($this->icon);
        }
    }
}
