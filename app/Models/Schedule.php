<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    
    public function getByLimit(int $limit_count =10)
      {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
      }
}