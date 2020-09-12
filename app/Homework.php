<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Homework extends Model
{
    use SoftDeletes;
    //
    public function subjects()
    {
        return $this->BelongsTo(Subject::class);
    }
}
