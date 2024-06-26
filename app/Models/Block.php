<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Block extends Model
{
    use HasFactory;

    /**
     * フォローしている側のユーザーを取得する
     */
    public function followUser()
    {
        return User::find($this->follow_user);
    }

    /**
     * フォローされている側のユーザーを取得する
     */
    public function followerUser()
    {
        return User::find($this->user);
    }
}
