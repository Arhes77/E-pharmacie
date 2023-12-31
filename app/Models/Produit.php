<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produit extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'nom_prod',
        'descri_prod',
        'prix_prod',
        'url_prod',
        'code_prod',
        'qteS_prod',
        'categorie_id'
    ];


    public function commande(): BelongsTo {
        return $this->belongsTo(Commande::class);
    }

    public function commande_four(): BelongsTo {
        return $this->belongsTo(Commande_four::class);
    }

    public function categorie(): BelongsTo {
        return $this->belongsTo(Categorie::class);
    }

    public function article(): HasMany {
        return $this->hasMany(Article::class);
    }
}
