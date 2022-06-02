<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table  = 'events';
    //Primary Key
    public $primaryKey = 'id';
    // Timestamsp
    public $timestamps = true;


    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
}
