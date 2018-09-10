<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0397f6f254f15782af508774289e5343
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\Plugins\\H5PPageComponent\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\Plugins\\H5PPageComponent\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'ilH5PPageComponentPlugin' => __DIR__ . '/../..' . '/classes/class.ilH5PPageComponentPlugin.php',
        'ilH5PPageComponentPluginGUI' => __DIR__ . '/../..' . '/classes/class.ilH5PPageComponentPluginGUI.php',
        'ilPCPlugged' => __DIR__ . '/../..' . '/../../../../../../../Services/COPage/classes/class.ilPCPlugged.php',
        'ilPageComponentPlugin' => __DIR__ . '/../..' . '/../../../../../../../Services/COPage/classes/class.ilPageComponentPlugin.php',
        'ilPageComponentPluginGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/COPage/classes/class.ilPageComponentPluginGUI.php',
        'ilPageObjectFactory' => __DIR__ . '/../..' . '/../../../../../../../Services/COPage/classes/class.ilPageObjectFactory.php',
        'srag\\Plugins\\H5PPageComponent\\Cron\\H5PPageComponentCron' => __DIR__ . '/../..' . '/src/Cron/H5PPageComponentCron.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0397f6f254f15782af508774289e5343::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0397f6f254f15782af508774289e5343::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0397f6f254f15782af508774289e5343::$classMap;

        }, null, ClassLoader::class);
    }
}
