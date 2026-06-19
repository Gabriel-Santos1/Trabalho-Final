<?php

namespace Config;

use CodeIgniter\Config\BaseService;


class Services extends BaseService
{
    public static function cliente($getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('cliente');
        }

        return new \App\Services\ClienteService();
    }
}
