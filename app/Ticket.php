<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
    'user_id',
    'title',
    'body',
    'deadline_date',
    'current_date',
    'planned_time',
    'actual_time',
    'progress',
    ];
    
     public function getPaginateByLimit(int $limit_count = 20)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
