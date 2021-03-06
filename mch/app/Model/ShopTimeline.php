<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShopTimeline extends Model
{
    protected $table = 'shop_timeline';

    protected $guarded = ['id'];

    protected $dateFormat = 'Y-m-d H:i:s';
}
