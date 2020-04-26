<?php

namespace portalium\demo;

class Module extends \portalium\base\Module
{
    public static function moduleInit()
    {
        self::registerTranslation('demo','@portalium/demo/messages',[
            'demo' => 'demo.php',
        ]);
    }

    public static function t($message, array $params = [])
    {
        return parent::coreT('demo', $message, $params);
    }
}
