<?php

namespace App\Models\Admin;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table ='skills';
    protected $fillable = ['name','user_id','status'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
