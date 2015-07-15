<?php

namespace PrisonManagementSystem;

use Illuminate\Database\Eloquent\Model;

class SolitaryConfinement extends Model
{
    protected $guarded = ['id'];

    public function prisoner()
    {
        return $this->belongsTo(Prisoner::class);
    }
}
