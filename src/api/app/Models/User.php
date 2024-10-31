<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Get the categories associated with the user.
     *
     * Only categories that has `show = true` will be retrieved.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'users_categories', 'user_id', 'category_id')
                    ->withPivot('subcategory_id', 'show')
                    ->wherePivot('show', true) // Hanya ambil kategori yang `show = true`
                    ->withTimestamps();
    }

    /**
     * Get the subcategories associated with the user.
     *
     * This relationship returns a belongs-to-many association with the Subcategory model
     * through the 'users_categories' pivot table. The pivot table includes the 'category_id'
     * and 'show' columns, and timestamps for the association.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function subcategories()
    {
        return $this->belongsToMany(Subcategory::class, 'users_categories', 'user_id', 'subcategory_id')
                    ->withPivot('category_id', 'show')
                    ->withTimestamps();
    }
}
