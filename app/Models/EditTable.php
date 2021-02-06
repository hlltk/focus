<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditTable extends Model
{
    use HasFactory;
    protected $table = 'edit_tables';
    protected $fillable = ['id', 'name', 'time', 'day', 'description', 'created_by'];
}
