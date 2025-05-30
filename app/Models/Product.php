<?php

namespace App\Models;

use App\Models\Liga;
use App\Models\PesananDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function liga()
    {
        return $this->belongsTo(Liga::class, 'liga_id', 'id');
    }

    public function pesanan_details()
    {
        return $this->hasMany(PesananDetail::class, 'product_id', 'id');
    }
}
