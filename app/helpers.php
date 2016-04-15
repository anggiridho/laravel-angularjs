<?php

/**
 * That way you would be able to use:
 * admins()
 * 
 * admins()->attempt(['email' => '', 'password' => ''])
 * 
 * To get authenticated admin:
 * 
 * admins()->user()
 * 
 * To check whether admin is logged in or not:
 * 
 * admins()->check()
 */
function admins()
{
    return auth()->guard(config('auth.defaults.admins_guard'));
}