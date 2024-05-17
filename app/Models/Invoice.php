<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $fillable = ['customer_name', 'total_amount', 'due_date', 'status'];
}
