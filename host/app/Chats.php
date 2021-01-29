<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
    protected $fillable = [
        'chat_message','user_id','chat_image'
    ];

}
