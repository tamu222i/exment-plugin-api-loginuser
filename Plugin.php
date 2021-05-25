<?php
namespace App\Plugins\PluginApiLoginuser;

use Exceedone\Exment\Enums\ErrorCode;
use Exceedone\Exment\Enums\Permission;
use Exceedone\Exment\Model\CustomTable;
use Exceedone\Exment\Services\Plugin\PluginApiBase;
use Validator;

class Plugin extends PluginApiBase
{
    
    /**
     * 
     * @return mixed
     */
    public function loginuser()
    {
        $loginuser = \Exment::user() ?? null;
        if (!isset($loginuser)) {
            return null;
        }
        $ret = $loginuser->toArray();
        $ret['avatar_url'] = $loginuser->getDisplayAvatarAttribute();

        return $ret;
    }
}