<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Add this import

class Todo extends Model
{
    use HasFactory; // Using the HasFactory trait
    protected $table = 'todos';
    protected $primaryKey = 'id';
}
