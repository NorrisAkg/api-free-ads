<?php

namespace App\FreeAds\Categories;

use App\FreeAds\Ads\Ad;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'label',
        'description',
    ];

    // Relations
    public function ads(): HasMany
    {
        return $this->hasMany(Ad::class);
    }
}
