<?php

namespace App\Models\Admin;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'user_id', 'name', 'parent_id', 'status', 'alias'
    ];


    public function subcategory()
    {
        return $this->hasMany(Self::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Self::class, 'parent_id', 'id');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /* Get Product Image */
    public function image()
    {
        return $this->morphOne('App\Models\Admin\Media', 'media', 'media_type', 'media_id');
    }

}
