<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected  $guarded = [];
    protected $hidden = ['password'];

    public function services()
    {
        return $this->belongsToMany(Service::class, 'services_providers');
    }

    public function favorites(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(favorites::class,"provider_id","id");
    }

    public function reviews(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(review::class,"user_id","id");
    }
}