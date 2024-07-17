<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'manga_id'];


    // $table->string('title');
    // $table->longText('content');
    // $table->foreignId('manga_id')->constrained()->on('mangas')->cascadeOnDelete();
}
