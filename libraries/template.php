<?php
final class Template
{
    protected static $_instances = Array();

    /**
     * @param string $driver
     * @return PhpTemplate|JsonTemplate
     */
    public static function factory($driver = 'php')
    {
//        ini_set('short_open_tag', 'On');

        if (!isset(self::$_instances[$driver])) {
            include_once(App::instance()->drivers.'template/'.(strtolower($driver)).'.php');

            $class  = ucwords(strtolower($driver)).'Template';
            self::$_instances[$driver] = new $class;
        }

        return self::$_instances[$driver];
    }
}
