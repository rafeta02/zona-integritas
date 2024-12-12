<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class berita extends Model
{
    use HasFactory;
    use Sluggable;
    
    protected $date=['create_at'];
    protected $fillable =['judul','news','penulis','thumbnail','tanggal','slug','id_categories'];

    protected static function boot()
    {
        parent::boot();
        static::updating(function($model){
            if ($model->isDirty('thumbnail') && ($model->getOriginal('thumbnail') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('thumbnail'));
            }
        });

       
    
    }
    public function Sluggable(): array
    {
        return [
            'slug'=>['source'=>'judul']
        ];
    }

    
}
