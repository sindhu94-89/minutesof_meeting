<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class minutesofmeeting extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'meeting_name',
        'description',
        'meeting_date',
        'meeting_time',
        'image_name',
    ];
    protected $dates = ['deleted_at'];

    protected $table = "minutesofmeeting";
}
