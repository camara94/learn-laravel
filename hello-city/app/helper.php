<?php

if (!function_exists('getTitle')) {
    function getTitle(?string $title)
    {
        return $title ? $title . ' | ' . config('app.name') : config('app.name');
    }
}
