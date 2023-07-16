<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;

use Filament\Models\Contracts\HasName;
use Illuminate\Support\Facades\Storage;
use Filament\Models\Contracts\HasAvatar;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable implements HasName, HasAvatar,MustVerifyEmail
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
        'status_id',
        'password',
    ];


    // ...

    public function canAccessFilament(): bool
    {
        return str_ends_with($this->status_id, 1) && $this->hasVerifiedEmail();
    }

    public function getFilamentAvatarUrl(): ?string
    {
        return Storage::url($this->profil);
    }

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


    public function commandes(): HasMany {
        return $this->hasMany(Commande::class);
    }

    public function messageForums(): HasMany {
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
