<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VipPackage extends Model
{
    use HasFactory;

    protected $fillable = ['package_name', 'price'];

    /**
     * Get the subscriptions for the VIP package.
     */
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}