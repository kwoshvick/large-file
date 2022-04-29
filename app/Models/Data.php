<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_no', 'stock_code', 'quantity',
        'invoice_date','unit_price', 'customer_id' ,
        'country','description'
    ];
}
