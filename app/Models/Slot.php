<?php

namespace App\Models;

class Slot extends BaseModel
{
    public function event()
    {
        $this->belongsTo(Event::class);
    }

}
