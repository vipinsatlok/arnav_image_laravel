<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_dimention', 'file_name', 'file_size', 'title', 'tags'
    ];
}
