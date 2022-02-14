<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\Dimension;
use App\Models\Program;

class Form extends Model
{
    use HasFactory;

    public function getRouteKeyName() {
        return 'code';
    }

    public function users() {
        return $this->belongsToMany(User::class)->withPivot(['result', 'status', 'version'])->withTimestamps();
    }

    public function questions() {
        return $this->hasMany(Question::class);
    }

    public function dimension() {
        return $this->belongsTo(Dimension::class);
    }

    public function program() {
        return $this->belongsTo(Program::class);
    }
}
