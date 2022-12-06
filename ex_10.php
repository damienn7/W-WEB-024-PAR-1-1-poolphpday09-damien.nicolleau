<?php
$dirs=scandir("./");
function autoload(
    $class_name
)
{
    if(!empty($dirs))
    {
    foreach($dirs as $dir)
    {
        if (file_exists($dir.'class.'.strtolower($class_name).'.php')) {
            require_once($dir.'class.'.strtolower($class_name).'.php');
        return;
        }
    }
}
}

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});

