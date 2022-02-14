<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Form;

class Question extends Model
{
    use HasFactory;

    public function form() {
        return $this->belongsTo(Form::class);
    }
}
