<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Personnel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'user_id',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function commande_Four(): HasMany{
        return $this->hasMany(Commande_Four::class);
    }

    public function messagepers(): HasMany{
        return $this->hasMany(MessagePers::class);
    }
    public function messageforum(): HasMany{
        return $this->hasMany(MessageForum::class);
    }

    public function statut(): HasOne{
        return $this->hasOne(Status::class);
    }

    public function conseils(): HasMany{
        return $this->hasMany(Conseil::class);
    }



}
