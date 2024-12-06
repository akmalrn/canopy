<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuildingService extends Model
{
    use HasFactory;

    protected $table = 'building_service';

    protected $fillable = [
        'service_id',
        'type_id',
        'surface_area',
        'building_area',
        'bedrooms',
        'bathrooms',
        'car_port',
        'room_path',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function typeService()
    {
        return $this->belongsTo(TypeService::class, 'type_id');
    }
}
