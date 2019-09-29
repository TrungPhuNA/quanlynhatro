<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Motel extends Model
{
    protected $table = 'motels';
    protected $guarded = [''];
    const ACTIVE_SUCCESS = 2;
    const ACTIVE_WARNING = 1;
    const ACTIVE_CANCEL  = -1;

    private $active = [
        1 => [
            'text' => 'Chờ duyệt',
            'class' => 'label-warning'
        ],
        2 => [
            'text' => 'Đã duyệt',
            'class' => 'label-success'
        ],
        -1 => [
            'text' => 'Huỷ bỏ',
            'class' => 'label-danger'
        ]
    ];

    public function getAttributeActive()
    {
        return array_get($this->active,$this->mt_active,'[N\A]');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class,'mt_menu_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'mt_user_id');
    }
}
