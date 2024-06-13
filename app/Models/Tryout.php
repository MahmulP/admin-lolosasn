<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tryout extends Model
{
    use HasFactory;
    protected $table = "tryout";
    protected $primaryKey = "tryout_id";
    protected $fillable = [
        'tryout_title',
        'tryout_file',
        'tryout_duration',
        'tryout_price',
        'tryout_type'
    ];
}
