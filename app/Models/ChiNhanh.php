<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ChiNhanh extends Authenticatable
{
    use HasFactory;

    protected $table = 'chinhanh'; // Tên của bảng trong cơ sở dữ liệu

    protected $primaryKey = 'id'; // Khóa chính của bảng

    public $incrementing = true;

    /**
     * Relationship many to many
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    
}
