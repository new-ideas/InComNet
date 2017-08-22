<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Self_;
Relation::morphMap([
    'user' => 'App\User',
    'category' => 'App\Models\Admin\Category'
]);


class AdminMedia extends Model
{
    protected $fillable = [
        'media_id', 'media_type', 'url'
    ];

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($media) {
                $existing = Self::find($media->id);
                Storage::disk('public')->delete($existing->url);
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function media()
    {
        return $this->morphTo();
    }
}
