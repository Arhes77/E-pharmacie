<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commande_Four extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['status_comf'];

    public function produit(): HasMany {
        return $this->hasMany(Produit::class);
    }

    public function user(): BelongsTo {
        return $this->belongTo(User::class);
    }


    public function fournisseur(): BelongsTo {
        return $this->belongTo(Fournisseur::class);
    }




}
