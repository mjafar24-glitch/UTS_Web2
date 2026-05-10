<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['customer_id','nama_produk','jumlah','total_harga','status','pembayaran','pengiriman'])]
class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}