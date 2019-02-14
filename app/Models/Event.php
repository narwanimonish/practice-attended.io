<?php

namespace App\Models;

class Event extends BaseModel
{
    public $dates = [
        'starts_at',
        'ends_at',
    ];

    public function slots()
    {
        $this->hasMany(Slot::class);
    }

}
