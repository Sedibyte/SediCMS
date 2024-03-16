<?php declare(strict_types=1); // strict typing

$hooks = [];

function add_hook($hook_name, $function) {
    global $hooks;

    if($function !== null && $function)
        $hooks[$hook_name][] = $function;
}

function remove_hook($hook_name) {
    global $hooks;

    unset($hooks[$hook_name]);
}

function call_hook($hook_name, ...$parameters) {
    global $hooks;

    if(isset($hooks[$hook_name]))
        foreach ($hooks[$hook_name] as $function)
            if(function_exists($function))
                call_user_func($function, ...$parameters);
}

?>
