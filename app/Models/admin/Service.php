<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'title',
        'overview',
        'description',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(CategoryService::class);
    }

    public function paths()
    {
        return $this->hasMany(ServicePath::class, 'service_id');
    }

    public function buildingServices()
    {
        return $this->hasMany(BuildingService::class);
    }
}
