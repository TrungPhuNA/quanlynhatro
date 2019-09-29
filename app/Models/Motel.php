<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motel extends Model
{
    protected $table = 'motels';
    protected $guarded = '';

    public function menu()
    {
        return $this->belongsTo(Menu::class,'mt_menu_id');
    }
}
