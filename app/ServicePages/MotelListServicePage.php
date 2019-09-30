<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 9/30/19
 * Time: 9:15 PM
 */

namespace App\ServicePages;


use App\Models\Motel;

class MotelListServicePage
{
    public function getListMotel($condition = [], $paginate = true)
    {
        $menu_id = array_get($condition,'menu',null);
        $motels = Motel::with('menu:id,mn_name,mn_slug');

        if ($menu_id) $motels->where('mt_menu_id', $menu_id);

        $motels = $motels->select('id','mt_name','mt_slug','created_at','mt_menu_id','mt_description','mt_acreage','mt_price',
                'mt_address')
            ->orderByDesc('id')
            ->paginate(10);

        return $motels;
    }
}