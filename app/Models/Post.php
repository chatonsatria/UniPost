<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;
    // or use HasFactory, Sluggable;

    //protected $fillable agar dapat input langsung ke artisan tinker sesuai dengan nama table yang di tentukan
    //protected $guarded = [''];

    //protected $guarded agar table yg ditentukan tidak boleh diisi cth id
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        //1
        //secara isset

        //2
        //fungsi pemanggilan data pencarian secara callback
        $query->when($filters['search'] ?? false, function($query, $search){
            $query->where('title', 'like', '%'. $search . '%')
            ->orWhere('body', 'like', '%'. $search . '%');
        });
        $query->when($filters['category'] ?? false, function($query, $category){
            $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });
        //3
        //secara array function (fn)
        $query->when($filters['user'] ?? false, fn($query, $user) =>
            $query->whereHas('user', fn($query) =>
                $query->where('username', $user)
        )
        );
    }

    //digunakan untuk korelasi atau hubungan antar tabel
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
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
