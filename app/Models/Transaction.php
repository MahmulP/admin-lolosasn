<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $table = "usertransaction";
    protected $primaryKey = "transactionRecord_id";
    protected $fillable = [
        'account_id',
        'transaction_title',
        'jumlah_to',
        'list_tryout',
        'bukti_transaksi',
        'transaction_status',
        'transaction_price'
    ];

    /**
     * The roles that belong to the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'account_id');
    }
}
