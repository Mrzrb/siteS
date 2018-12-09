<?php

function getDbPrefix()
{
    return env('SN'). '-';
}

function siteUrl($url)
{
    $url = url($url);
    if (stripos($url, '.html') !== false) {
        return $url;
    }
    return $url.'/';
}
