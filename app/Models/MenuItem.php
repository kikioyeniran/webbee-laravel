<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;
    protected $table  = 'menu_items';
    //Primary Key
    public $primaryKey = 'id';
    // Timestamsp
    public $timestamps = true;


    public function parent() {
        return $this->belongsToOne(static::class, 'parent_id');
    }

    public function children() {
        return $this->hasMany(static::class, 'parent_id')->with('children')->orderBy('created_at', 'asc');
    }
}
