<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;


class Loker extends Model
{
    use HasFactory, SoftDeletes, Sluggable;
    protected $guarded = [];
    protected $data = 'loker'; // nama tabel pada database

    public function file()
    {
        return $this->belongsTo(File::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
