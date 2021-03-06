<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CreditDetail extends Model
{
    protected $table = 'credit_detail';

    protected $guarded = ['id'];

    protected $dateFormat = 'Y-m-d H:i:s';
}
