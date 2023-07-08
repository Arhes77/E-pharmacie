<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MessageForum extends Model
{
    use HasFactory,BroadcastsEvents; 
    protected $guarded = [];
    protected $fillable = ['conten_smsF'];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

   

    public function reponseForum(): HasMany {
        return $this->hasMany(ReponseForum::class);
    }

    public function broadcastOn($event): array
{
    return [new PresenceChannel(name: 'chat-room')];
}

public function broadcastWith(): array
{
    return [
        'message' => $this,
        'user' => $this->user->only('name'),
    ];
}


}
