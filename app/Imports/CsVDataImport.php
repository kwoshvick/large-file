<?php

namespace App\Imports;

use App\Models\Data;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CsVDataImport implements ToModel, WithHeadingRow, WithChunkReading, WithBatchInserts, ShouldQueue
{
    public function model(array $row)
    {
        return new Data([
            'invoice_no' =>$row['invoiceno'],
            'stock_code' =>$row['stockcode'],
            'description' =>$row['description'],
            'quantity' =>$row['quantity'],
            'invoice_date' =>$row['invoicedate'],
            'unit_price' =>$row['unitprice'],
            'customer_id' =>$row['customerid'],
            'country' =>$row['country']

        ]);
    }

    public function batchSize(): int
    {
        return 5000;
    }

    public function chunkSize(): int
    {
        return 20000;
    }
}
