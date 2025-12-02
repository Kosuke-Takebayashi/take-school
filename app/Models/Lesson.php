<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    // 変更可能なカラムを指定
    protected $fillable = ['title', 'description', 'content'];
}
