<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tryout;

class Token extends Model
{
    use HasFactory;

    protected $table = "tryouttoken";
    protected $primaryKey = "tryoutToken_id";
    protected $fillable = [
        'tryoutToken_code',
        'tryoutToken_status',
        'tryoutToken_listTryout'
    ];

    public function tryout()
    {
        $this->belongsTo(Tryout::class);
    }
}
