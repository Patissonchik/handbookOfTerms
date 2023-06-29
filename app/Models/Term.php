<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;

    protected  $table = 'terms';
    protected $fillable = ['name', 'description', 'complexity'];

}
