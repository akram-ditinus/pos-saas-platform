<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    protected $guarded=[];

    public function tax(){
        return $this->hasOne(\App\Models\Tax::class,'uid','tax_id');
    }
}
