<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;;

class Maker extends EloquentModel
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name'];

    function models()
    {
        return $this->hasMany(Model::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
class Model extends EloquentModel
{
    public $timestamps = false;

    protected $fillable = ['maker_id', 'name'];

    function maker()
    {
        return $this->belongsTo(Maker::class);
    }

    function trims()
    {
        return $this->hasMany(Trim::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}