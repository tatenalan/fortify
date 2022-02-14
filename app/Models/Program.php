<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Form;

class Program extends Model
{
    use HasFactory;

    public function forms() {
        return $this->hasMany(Forms::class);
    }
}
