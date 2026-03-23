<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'cover_image', 'content', 'robotics_kit_id']; // ✅ fixed

    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }

    public function roboticsKit()
    {
        return $this->belongsTo(RoboticsKit::class);
    }
}