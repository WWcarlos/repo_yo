<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'title', 'description'];

    public function course() {
        return $this->belongsTo(Course::class);
    }
}

