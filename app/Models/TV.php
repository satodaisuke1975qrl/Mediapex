<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TV extends Model
{
    use HasFactory;

    public function genre()
    {
        return $this->belongsTo(Genre::class); // useで読み込んでおく
    }
}
