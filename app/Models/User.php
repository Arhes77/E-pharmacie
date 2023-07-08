<?php

namespace App\Models;

 use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Filament\Models\Contracts\HasName;
use Filament\Models\Contracts\HasAvatar;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail, HasName

{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'adresse',
        'sexe',
        'profil',
        'birthdate',
        'qualification',
        'statut_id',
        'password',
    ];


    public function getFilamentName(): string
    {
        return $this->nom;
    }

    /**
   * Get the user's full name.
   *
   * @return string
   */
    public function getFullNameAttribute()
    {
        return "{$this->nom} {$this->prenom}";
    }

    public function status(): BelongsTo{
        return $this->belongsTo(Status::class);
    }


    public function commande(): HasMany {
        return $this->hasMany(Commande::class);
    }

    public function messageForum(): HasMany {
        return $this->hasMany(MessageForum::class);
    }

    public function messagePers(): HasMany {
        return $this->hasMany(MessagePers::class);
    }

    public function reponsePers(): HasMany {
        return $this->hasMany(ReponsePers::class);
    }

    public function reponseForum(): HasMany {
        return $this->hasMany(ReponseForum::class);
    }

    public function commentaires(): HasMany {
        return $this->hasMany(Commentaire::class);
    }

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
}
