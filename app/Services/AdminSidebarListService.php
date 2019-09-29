<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 9/29/19
 * Time: 7:18 PM
 */

namespace App\Services;


class AdminSidebarListService
{
    private  $listSidebar = [
        [
            'name'  => 'Home',
            'route' => 'admin.get.dashboard',
            'icon'  => 'icon-home7',
        ],
        [
            'name'  => 'Menu',
            'route' => 'admin.get.menu.list',
            'icon'  => 'icon-list',
        ],
        [
            'name'  => 'Location',
            'route' => 'admin.get.location.list',
            'icon'  => 'icon-location3',
        ],
    ];

    public function getListSidebar()
    {
        return $this->listSidebar;
    }
}