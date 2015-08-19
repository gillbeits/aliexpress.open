<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 17.08.15
 * Time: 14:19
 */

namespace Aliexpress\Open\Model;


use Aliexpress\Open\Api;
use Aliexpress\Open\Ornamental\ExtendProperties;

class aeopPostCategory
{
    use ExtendProperties;

    protected $id;
    protected $level;
    protected $names;
    protected $isleaf;

    public function getLocaleName()
    {
        return $this->names[Api::getInstance()->getConfigParams('system.locale')];
    }
}