<?php

$cfg['blowfish_secret'] = 'a8asdfasfb7c6d'; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */

/*
 * Servers configuration
 */
$i = 0;

/*
 * First server could change auth_type to config from cookie, bypass login.
 */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'config';
/* Server parameters */
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['AllowNoPassword'] = true;

