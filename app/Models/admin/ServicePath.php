<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePath extends Model
{
    use HasFactory;

    protected $table = 'service_path';

    protected $fillable = [
        'service_id',
        'path',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
