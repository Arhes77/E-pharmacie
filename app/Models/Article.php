<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['qteA_art','commande_id','produit_id'];

    public function commande(): BelongsTo {
        return $this->belongsTo(Commande::class);
    }

    public function produit(): BelongsTo {
        return $this->belongsTo(Produit::class);
    }
}
