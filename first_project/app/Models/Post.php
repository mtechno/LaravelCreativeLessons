<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $someProperty;
    protected $table = 'posts'; //name of table
    protected $guarded = []; //can creating in DB
}